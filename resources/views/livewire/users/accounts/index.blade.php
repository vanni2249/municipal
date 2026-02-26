<div class="space-y-2">
    <!-- My Accounts -->
    <livewire:users.components.accounts :user="$user" :accounts="$accounts" />
   

    <!-- My Businesses -->

    @if ($merchant_account)
            <livewire:users.components.businesses :user="$user" :businesses="$businesses" />
      
    @endif

  
</div>
