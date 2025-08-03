<?php

namespace App\Livewire\Auth\Users;

use App\Models\Type;
use App\Models\User;
use App\Models\UserCategory;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class Register extends Component
{
    public $role;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $phone;
    public $company_name;
    public $number;
    public $address;
    public $city;
    public $postal_code;
    public $date_of_birth;
    public $terms;
    public $user;
    public $approved_at;
    public $is_veteran = false;
    public $is_age_advanced = false;
    public $is_bedridden = false;
    public $is_disabled = false;

    public function mount($role)
    {
        $this->role = $role;
        $this->terms = true; // Default to true
        $this->approved_at = in_array($this->role, ['citizen', 'merchant', 'visitor']) ? now() : null;
    }

    public function register()
    {
        $this->validate([
            'role' => ['required', 'string', Rule::in(['citizen', 'merchant', 'accountant', 'contractor', 'supplier', 'visitor'])],
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|numeric',
            'company_name' => [
                Rule::requiredIf(fn() => in_array($this->role, ['merchant', 'accountant', 'contractor', 'supplier'])),
                'string',
                'nullable',
                'max:255'
            ],
            'number' => [
                Rule::requiredIf(fn() => in_array($this->role, ['merchant', 'accountant', 'contractor', 'supplier'])),
                'string',
                'nullable',
                'max:255'
            ],
            'address' => [
                Rule::requiredIf(fn() => in_array($this->role, ['citizen', 'merchant', 'accountant', 'contractor', 'supplier'])),
                'string',
                'nullable',
                'max:255'
            ],
            'city' => [
                Rule::requiredIf(fn() => in_array($this->role, ['citizen', 'merchant', 'accountant', 'contractor', 'supplier'])),
                'string',
                'nullable',
                'max:255'
            ],
            'postal_code' => [
                Rule::requiredIf(fn() => in_array($this->role, ['citizen', 'merchant', 'accountant', 'contractor', 'supplier'])),
                'string',
                'nullable',
                'max:255'
            ],
            'date_of_birth' => [
                Rule::requiredIf(fn() => in_array($this->role, ['citizen', 'merchant', 'accountant', 'contractor', 'supplier'])),
                'date',
                'nullable',

            ],
            'terms' => 'accepted',
        ]);

        $this->user = User::create([
            'type_id' => Type::where('en_name', $this->role)->first()->id ?? null,
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'phone' => $this->phone,
            'company_name' => $this->company_name,
            'number' => $this->number,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'date_of_birth' => $this->date_of_birth,
            'approved_at' => $this->approved_at,
        ]);

        if ($this->approved_at)
        {
            $this->login();
        } else {
            redirect()->route('users.verify', ['role' => $this->role]);
        }
    }

    public function login()
    {
        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], true)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        $this->setLastLogin();

        $this->redirectIntended(default: route('users.dashboard', absolute: false), navigate: true);
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email) . '|' . request()->ip());
    }

    protected function setLastLogin(): void
    {
        $user = Auth::user();
        if ($user instanceof \App\Models\User) {
            $user->last_login_at = now();
            $user->save();
        }
    }

    public function render()
    {
        return view('livewire.auth.users.register');
    }
}
