<?php

namespace App\Livewire\Auth\Users;

use App\Models\Accountant;
use App\Models\Citizen;
use App\Models\Contractor;
use App\Models\Merchant;
use App\Models\Supplier;
use App\Models\User;
use App\Models\UserCategory;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Validate;
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
            'user_category_id' => UserCategory::where('en_name', $this->role)->first()->id ?? null,
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
            if ($this->is_veteran || $this->is_age_advanced || $this->is_bedridden || $this->is_disabled) {
                $this->createRegister();
            } else {
                $this->login();
            }

        } else {
            redirect()->route('users.verify', ['role' => $this->role]);
        }
    }

    public function createRegister()
    {
        $this->validate([
            'is_veteran' => 'boolean',
            'is_age_advanced' => 'boolean',
            'is_bedridden' => 'boolean',
            'is_disabled' => 'boolean',
        ]);

        $register = $this->user->register()->create([
            'is_veteran' => $this->is_veteran,
            'is_age_advanced' => $this->is_age_advanced,
            'is_bedridden' => $this->is_bedridden,
            'is_disabled' => $this->is_disabled,
        ]);

        $this->login();
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
