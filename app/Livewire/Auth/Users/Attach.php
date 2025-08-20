<?php

namespace App\Livewire\Auth\Users;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;



class Attach extends Component
{
    public $method = 'check';
    public $code;
    public $register;
    public $name;
    public $lastname;
    public $email;
    public $password;
    public $password_confirmation;
    public $show;
    public $user;

    public function rules()
    {
        return [
            'code' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ];
    }

    public function check()
    {
        $this->validate();

        // Here you would typically check the code and email against your database
        $register = \App\Models\Register::where('code', $this->code)
            ->where('email', $this->email)
            ->whereNull('user_id')
            ->first();

    //If register is not found, return error in code field
        if (!$register) {
            $this->addError('code', 'El código de registro o el correo electrónico no son válidos o ya están en uso.');
            return;
        }

        if ($register) {
            $this->show = true;
            $this->name = $register->name;
            $this->lastname = $register->lastname;
            $this->register = $register;
            $this->method = 'save';
        }
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        DB::transaction(function () {

            $this->user = User::create([
                'name' => $this->name . ' ' . $this->lastname,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'approved_at' => now(),
            ]);

            $this->register->update([
                'name' => $this->name,
                'lastname' => $this->lastname,
                'user_id' => $this->user->id,
            ]);

            $this->login();
        });
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
        return view('livewire.auth.users.attach');
    }
}
