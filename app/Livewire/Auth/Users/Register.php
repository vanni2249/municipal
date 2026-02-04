<?php

namespace App\Livewire\Auth\Users;

use App\Models\Place;
// use App\Models\Type;
use App\Models\User;
use App\Models\UserLog;
use App\Traits\AccountNumber;
use App\Traits\AccountTypeId;
use App\Traits\AccountUlid;
use App\Traits\LogTypeId;
use App\Traits\RegisterCode;
use App\Traits\StatusId;
use App\Traits\UserLogUlid;
use App\Traits\UserNumber;
use App\Traits\UserUlid;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;

class Register extends Component
{
    use UserUlid, UserNumber, StatusId, LogTypeId, AccountUlid, AccountNumber, AccountTypeId, UserLogUlid;

    // public $accounts = [
    //     'citizen' => false,
    //     'merchant' => false,
    // ];
    public $name;
    public $lastname;
    public $email;
    public $password;
    public $password_confirmation;
    public $phone;
    public $date_of_birth;
    public $gender;
    public $term_accepted;

    public function mount()
    {
        $this->term_accepted = true; // Default to true
        $this->gender = null; // Default to null
    }

    // protected $rules = [
    //     'accounts.citizen' => 'accepted',
    //     'accounts.merchant' => 'accepted',
    // ];

    public function register()
    {

        // dd($this->accounts['citizen'], $this->accounts['merchant']);
        // if (!$this->accounts['citizen'] && !$this->accounts['merchant']) {
        //     $this->addError('accounts', 'Selecciona al menos una opción.');
        //     return;
        // }


        $this->validate([
            // 'accounts' => 'nullable|array|min:1',
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|numeric',
            'date_of_birth' => 'required|date',
            'gender' => ['nullable', Rule::in(['male', 'female', 'other'])],
            'term_accepted' => ['accepted', Rule::in([true, 1, '1'])],
        ]);

        DB::transaction(function () {

            $this->user = User::create([
                'ulid' => $this->createUserUlid(),
                'number' => $this->createUserNumber(),
                'name' => $this->name . ' ' . $this->lastname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'phone' => $this->phone,
                'date_of_birth' => $this->date_of_birth,
                'gender' => $this->gender,
                'term_accepted' => $this->term_accepted,
            ]);
            $this->user->statuses()->create([
                'status_type_id' => $this->getStatusId('active'),
                'reason' => 'Initial status for user ' . $this->email,
            ]);

            $account = $this->user->accounts()->create([
                'ulid' => $this->createAccountUlid(),
                'number' => $this->createAccountNumber(),
                'account_type_id' => $this->getAccountTypeId('citizen'),
            ]);
            $account->defaults()->create([
                        'user_id' => $this->user->id,
                    ]);
            $account->statuses()->create([
                'status_type_id' => $this->getStatusId('active'),
                'reason' => 'Initial status for account ' . $account->ulid,
            ]);

            $this->user->userLogs()->create([
                'ulid' => $this->createUserLogUlid(),
                'number' => $this->createUserNumber(),
                'user_id' => $this->user->id,
                'log_type_id' => $this->getLogTypeId('registration'),
            ]);

            $this->login();
        });
    }

    public function updatingAccounts()
    {
        $this->validate([
            'accounts' => 'nullable|array|min:1',
            'accounts.*' => 'exists:accounts,id',
        ]);
    }

    public function login()
    {
        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], true)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        $this->user->sessions()->create([
            'session_id' => Session::getId(),
        ]);

        $this->redirectIntended(route('citizens.set-session', ['account' => $this->user->accounts()->first()->ulid], absolute: false));

        // $this->redirectIntended(default: route('users.accounts.create', absolute: false), navigate: true);
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
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

    #[Layout('layouts.auth')]
    public function render()
    {
        return view('livewire.auth.users.register', [
            'places' => Place::all(),
        ]);
    }
}
