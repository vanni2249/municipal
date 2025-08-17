<?php

namespace App\Livewire\Auth\Users;

use App\Models\Place;
use App\Models\Type;
use App\Models\User;
use App\Traits\RegisterCode;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;

class Register extends Component
{
    use RegisterCode;

    public $types;
    public $role;
    public $name;
    public $lastname;
    public $place_id;
    public $disability_type;
    public $emergency_contact;
    public $emergency_contact_phone;
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

    public function mount()
    {
        $this->types = Type::all();
        // $this->role = $role;
        $this->terms = true; // Default to true
        // $this->approved_at = in_array($this->role, ['citizen', 'merchant', 'citizen-merchant', 'visitor']) ? now() : null;
    }

    public function updatedRole($value)
    {
        $this->reset(['company_name', 'number', 'address', 'city', 'postal_code', 'date_of_birth', 'place_id', 'disability_type', 'emergency_contact', 'emergency_contact_phone']);
        $this->approved_at = in_array($value, ['citizen', 'merchant', 'citizen-merchant', 'visitor']) ? now() : null;
    }

    public function register()
    {
        $this->validate([
            'role' => ['required', 'string', Rule::in(['citizen', 'merchant', 'citizen-merchant', 'accountant', 'contractor', 'supplier', 'visitor'])],
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|numeric',
            'company_name' => [
                Rule::requiredIf(fn() => in_array($this->role, ['accountant', 'contractor', 'supplier'])),
                'string',
                'nullable',
                'max:255'
            ],
            'number' => [
                Rule::requiredIf(fn() => in_array($this->role, ['accountant', 'contractor', 'supplier'])),
                'string',
                'nullable',
                'max:255'
            ],
            'place_id' => [
                Rule::requiredIf(fn() => in_array($this->role, ['citizen', 'citizen-merchant'])),
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
            'name' => $this->name . ' ' . $this->lastname,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'approved_at' => $this->approved_at,
        ]);

        $this->user->register()->create([
            'type_id' => Type::where('key', $this->role)->first()->id ?? null,
            'code' => $this->createRegisterCode(),
            'name' => $this->name,
            'lastname' => $this->lastname,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
            'company_name' => $this->company_name,
            'number' => $this->number,
            'place_id' => $this->place_id,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'is_veteran' => $this->is_veteran,
            'is_age_advanced' => $this->is_age_advanced,
            'is_bedridden' => $this->is_bedridden,
            'is_disability' => $this->is_disabled,
            'disability_type' => $this->disability_type,
            'emergency_contact' => $this->emergency_contact,
            'emergency_contact_phone' => $this->emergency_contact_phone,
            'created_by' => 'user',
            'user_id' => $this->user->id,
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

    #[Layout('components.layouts.auth.index')]
    public function render()
    {
        return view('livewire.auth.users.register', [
            'places' => Place::all(),
        ]);
    }
}
