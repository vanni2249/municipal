<div class="space-y-4">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-full">
            @livewire('admin.admins.components.admin-header', ['administrator' => $administrator], key($administrator->id))
        </div>
    </div>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-5 space-y-4">
            <!-- User detail -->
            @livewire('admin.admins.components.admin-detail', ['administrator' => $administrator], key($administrator->id))
            
            <!-- Accounts -->
            @livewire('admin.admins.components.admin-roles', ['administrator' => $administrator], key($administrator->id))
            
            <!-- Statues -->
            @livewire('admin.admins.components.admin-statuses', ['administrator' => $administrator], key($administrator->id))
            
        </div>
        <div class="col-span-full lg:col-span-7 space-y-4">
            <!-- Sessions -->
            @livewire('admin.admins.components.admin-sessions', ['administrator' => $administrator], key($administrator->id))

            <!-- Logs -->
            @livewire('admin.admins.components.admin-logs', ['administrator' => $administrator], key($administrator->id))
            
        </div>
    </div>
</div>