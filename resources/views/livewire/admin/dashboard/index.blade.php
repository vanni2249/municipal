<div>
    <div class="grid grid-cols-12 gap-4">
        @for ($i = 0; $i < 8; $i++)
            <div class="col-span-6 md:col-span-6 lg:col-span-3">
                <x-card></x-card>
            </div>
        @endfor
        <div class="col-span-12">
            <x-card></x-card>
        </div>
        @for ($i = 0; $i < 4; $i++)
        <div class="col-span-full md:col-span-6 lg:col-span-3">
            <x-card></x-card>
        </div>
            
        @endfor
    </div>
</div>
