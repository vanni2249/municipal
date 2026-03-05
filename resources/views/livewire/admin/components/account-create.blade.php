<div>
    <x-button label="Crear cuenta" @click="$dispatch('open-modal', 'create-account-modal')" />

    <!-- Crear cuenta modal -->
    <x-modal name="create-account-modal" title="Crear cuenta">
        @include('forms.account-form')
    </x-modal>
</div>
