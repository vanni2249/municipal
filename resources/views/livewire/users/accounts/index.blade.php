<div class="space-y-2">
    <!-- My Accounts -->
    <livewire:users.components.accounts :user="$user" :accounts="$accounts" />
   

    <!-- My Businesses -->

    @if ($merchant_account)

        {{-- @if ($businesses) --}}
            <livewire:users.components.businesses :user="$user" :businesses="$businesses" />
        {{-- @else --}}
        {{-- @endif --}}
    {{-- @else --}}
        {{-- <livewire:users.components.business-create :user="$user" :merchant_account="$merchant_account" /> --}}
      
    @endif

    <!-- End accounts -->

   
    <!-- Create business -->
  
</div>
