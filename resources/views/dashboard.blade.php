<x-app-layout>
    @include('menu.bootstrap')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Leads</h5>
                        <p class="card-text">Total: 100</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Contatos</h5>
                        <p class="card-text">Total: 50</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Vendas</h5>
                        <p class="card-text">Total: R$ 10,000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Clientes</h5>
                        <p class="card-text">Total: 20</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gráfico de Barras</h5>
                        <div class="chart-container">
                            <canvas id="bar-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gráfico de Pizza</h5>
                        <div class="chart-container">
                            <canvas id="pie-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Gráfico de Barras
        var barChart = new Chart(document.getElementById('bar-chart'), {
            type: 'bar',
            data: {
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
                datasets: [{
                    label: 'Vendas',
                    data: [50, 80, 120, 90, 100, 70],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Gráfico de Pizza
        var pieChart = new Chart(document.getElementById('pie-chart'), {
            type: 'pie',
            data: {
                labels: ['Produto A', 'Produto B', 'Produto C', 'Produto D'],
                datasets: [{
                    data: [25, 30, 15, 30],
                    backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0']
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
</body>
</html>

</x-app-layout>
