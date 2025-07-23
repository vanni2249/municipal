<div>
    <form wire:submit="login">
        <div class="mt-4">
            <x-label for="email" class="mt-4" value="Email" />
            <x-input wire:model="email" class="w-full" type="email" placeholder="Enter your email" autofocus />
            @error('email')
            <x-error message="{{ $message }}" />
            @enderror
        </div>
        <div class="mt-2">
            <x-label for="email" class="mt-4" value="Password" />
            <x-input wire:model="password" class="w-full" type="password" placeholder="Enter your password" />
            @error('password')
            <x-error message="{{ $message }}" />
            @enderror
        </div>
        <a href="">
            <p class="mt-2 text-xs text-gray-600">Forgot your password?</p>
        </a>
        <div class="mt-8">
            <x-button type="submit" class="w-full">
                {{ __('Login') }}
            </x-button>
        </div>
    </form>
</div>