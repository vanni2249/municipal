<div>
    <div class="h-full w-full">
                <canvas style="position: relative; height:55vh; width:0vw;" id="myChart"></canvas>
            </div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
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
                        // 'rgba(100, 100, 100, 0.5)',
                        // 'rgba(200, 200, 200, 0.5)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        // 'rgba(255, 206, 86, 0.2)',
                        // 'rgba(75, 192, 192, 0.2)',
                        // 'rgba(153, 102, 255, 0.2)',
                        // 'rgba(255, 159, 64, 0.2)'   
                    ],
                    borderColor: [
                        // 'rgba(100, 100, 100, 1)',
                        // 'rgba(200, 200, 200, 1)',

                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                        // 'rgba(255, 206, 86, 1)',

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
