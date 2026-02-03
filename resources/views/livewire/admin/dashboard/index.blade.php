<div class="space-y-4">
    <div class="grid grid-cols-12 gap-2">
        @for ($i = 0; $i < 8; $i++)
            <div class="col-span-6 md:col-span-6 lg:col-span-3">
                <x-widget variant="success" title="Widget {{ $i + 1 }}" subtitle="Subtitle {{ $i + 1 }}"
                    value="Value {{ $i + 1 }}" />
            </div>
        @endfor
    </div>
    <div class="col-span-12">
        <x-card class="h-96">
            <div class="h-full w-full">
                <canvas  style="position: relative; height:50vh; width:80vw;" id="myChart"></canvas>
            </div>
        </x-card>
    </div>
    <div class="grid grid-cols-12 gap-2">

        @for ($i = 0; $i < 4; $i++)
            <div class="col-span-full md:col-span-6 lg:col-span-3">
                <x-card>
                    <header class="flex justify-between items-center">
                        <h2 class="text-xs text-gray-600 leading-3 font-bold uppercase">
                            Card {{ $i + 1 }}
                        </h2>
                        <span class="text-xs text-gray-500 leading-3 font-medium">
                            Subtitle {{ $i + 1 }}
                        </span>

                    </header>
                    <ul>
                        @for ($x = 0; $x < 5; $x++)
                            <li class="flex justify-between items-center bg-gray-100 p-2 rounded-lg mb-2">
                                <span class="text-sm text-gray-800">Item</span>
                                <span class="text-sm font-bold text-gray-700">34</span>
                            </li>
                        @endfor
                    </ul>
                </x-card>
            </div>
        @endfor
    </div>
</div>

@script

<script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'   
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
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
