<div>
    <x-button label="Pagar factura" variant="success" @click="$dispatch('open-modal', 'make-payment-modal')" />

    <x-modal name="make-payment-modal" title="Realizar pago" max-width="md">
        <div class="space-y-4">
            <p>
                ¿Está seguro que desea realizar el pago de esta factura por un monto de:
            </p>
            <span class="font-bold text-lg">${{ $application->invoice->amount }}</span>

            <form wire:submit.prevent="makePayment">

                <div class="flex justify-end space-x-2">
                    {{-- <x-button label="Cancelar" variant="secondary" @click="$dispatch('close-modal')" /> --}}
                    <x-button type="submit" label="Confirmar pago" variant="success" />
                </div>
            </form>
        </div>
    </x-modal>
</div>
