<x-app-layout>
    @include('menu.bootstrap')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Relatório') }}
        </h2>
    </x-slot>
    <div class="container mt-4">
        <h1>Relatórios</h1>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Relatório 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a lorem vitae dolor interdum lacinia.</p>
                        <a href="#" class="btn btn-primary">Visualizar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Relatório 2</h5>
                        <p class="card-text">Sed vel nisl ut neque ullamcorper posuere. In cursus quam eu elementum dapibus.</p>
                        <a href="#" class="btn btn-primary">Visualizar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Relatório 3</h5>
                        <p class="card-text">Vestibulum consequat velit et nunc semper, sed ultrices elit suscipit. Donec posuere quam nunc, id venenatis felis luctus nec.</p>
                        <a href="#" class="btn btn-primary">Visualizar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Relatório 4</h5>
                        <p class="card-text">Curabitur maximus mauris et bibendum interdum. Nullam cursus venenatis volutpat.</p>
                        <a href="#" class="btn btn-primary">Visualizar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
