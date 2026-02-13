<div class="space-y-4">
    <div class="grid grid-cols-12 gap-2">
        @foreach ($widgets as $widget)
            <div class="col-span-6 md:col-span-6 lg:col-span-3">
                <x-widget variant="success" title="{{ $widget['title'] }}" subtitle="{{ $widget['subtitle'] ?? '' }}"
                    value="{{ $widget['value'] }}" />
            </div>
        @endforeach
    </div>
    <div class="col-span-12">
        <x-card class="">
            <x-card-header>
                <h2 class="text-xs text-gray-600 leading-3 font-bold uppercase">Aplicaciones por día</h2>
            </x-card-header>
            @livewire('admin.dashboard.components.chart-application', key('chart-application'))
            {{-- @livewire('component', ['user' => $user], key($user->id)) --}}
            {{-- <div class="h-full w-full">
                <canvas style="position: relative; height:55vh; width:0vw;" id="myChart"></canvas>
            </div> --}}
        </x-card>
    </div>
    <div class="grid grid-cols-12 gap-2">

        @foreach ($lists as $list)
            <div class="col-span-full md:col-span-6 lg:col-span-3">
                <x-card class="">
                    <header class="flex justify-between items-center">
                        <h2 class="text-xs text-gray-600 leading-3 font-bold uppercase">
                            {{ $list['title'] }}
                        </h2>
                        <span class="text-xs text-gray-500 leading-3 font-medium">
                            {{ $list['total'] ?? '' }}
                        </span>

                    </header>
                    <ul class="space-y-1">
                        @foreach ($list['items'] as $item)
                            <li class="flex justify-between items-center bg-gray-100 p-2 rounded-lg">
                                <span class="text-sm text-gray-800 line-clamp-1">{{ $item['name'] }}</span>
                                <span class="text-sm font-bold text-gray-700">{{ $item['count'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </x-card>
            </div>
        @endforeach
    </div>
</div>

@script
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: $wire.labels,
                datasets: [{
                    // label: '# of Votes',
                    data: $wire.data,
                    backgroundColor: [
                        'rgba(211, 211, 211, 0.5)',
                        'rgba(150, 150, 150, 0.5)',
                        // 'rgba(255, 99, 132, 0.2)',
                        // 'rgba(54, 162, 235, 0.2)',
                        // 'rgba(255, 206, 86, 0.2)',
                        // 'rgba(75, 192, 192, 0.2)',
                        // 'rgba(153, 102, 255, 0.2)',
                        // 'rgba(255, 159, 64, 0.2)'   
                    ],
                    borderColor: [
                        'rgba(211, 211, 211, 1)',
                        'rgba(150, 150, 150, 1)',

                        //     'rgba(255, 99, 132, 1)',
                        //     'rgba(54, 162, 235, 1)',
                        // 'rgba(255, 206, 86, 1)',
                        //     'rgba(75, 192, 192, 1)',
                        //     'rgba(153, 102, 255, 1)',
                        //     'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endscript
