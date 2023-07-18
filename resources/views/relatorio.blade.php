<x-app-layout>
    @include('menu.bootstrap')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Relatório') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <form method="POST" class="row g-3" action="/cadastrarleads">
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    </form>
                    <div class="p-6 text-gray-900">
                        <div class="table-responsive">
                            <table class="table" id="search">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Relatorio</th>
                                        <th scope="col">Cliente</th>
                                        <th></th>
                                    </tr>
                        </thead>
                        <tbody>
                            @foreach ($relatorio as $relatorios)
                            <tr>
                                <td data-label="ID">
                                    <a class="text-heading font-semibold" href="#">
                                        {{$relatorios->id}}
                                    </a>
                                </td>
                                <td data-label="Relatorio">
                                    <span>{{$relatorios->relatorio}}</span>
                                </td>
                                <td data-label="Cliente">
                                    <a class="text-current">{{$relatorios->cliente}}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    </x-app-layout>
