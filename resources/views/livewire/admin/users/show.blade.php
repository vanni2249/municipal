<div class="space-y-4">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-full">
            @livewire('admin.users.components.user-header', ['user' => $user], key($user->id))
        </div>
    </div>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-5 space-y-4">
            <!-- User detail -->
            @livewire('admin.users.components.user-detail', ['user' => $user], key($user->id))
            
            <!-- Accounts -->
            @livewire('admin.users.components.user-accounts', ['user' => $user], key($user->id))
            
            <!-- Statues -->
            @livewire('admin.users.components.user-statuses', ['user' => $user], key($user->id))
            
        </div>
        <div class="col-span-full lg:col-span-7">
            <!-- Session -->
            @livewire('admin.users.components.user-sessions', ['user' => $user], key($user->id))
            
        </div>
    </div>
</div>
