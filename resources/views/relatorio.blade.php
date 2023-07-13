<x-app-layout>
    @include('menu.bootstrap')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Relatório') }}
        </h2>
    </x-slot>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">EnviarRelatórios</h5>
                        <p class="card-text">Envie seu relátorio com aqui.</p>
                        <a href="#" class="btn btn-primary">Visualizar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="table-responsive">
                <table class="table" id="search">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Nascimento</th>
                            <th scope="col">Cpf</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">UF</th>
                            <th></th>
                          </tr>
                    </thead>
                    <tbody>
                        @if (isset($search))
                        @foreach ($search as $cliente)
                        <tr>
                            <td data-label="Job Title">
                            <a class="text-heading font-semibold" href="#">
                                {{$cliente->nome}}
                            </a>
                            </td>
                            <td data-label="Nascimento">
                            <span>{{$cliente->nascimento}}</span>
                            </td>
                            <td data-label="Cpf">
                            <a class="text-current">{{$cliente->cpf}}</a>
                            </td>
                            <td data-label="Email">
                            <a class="text-current">{{$cliente->email}}</a>
                            </td>
                            <td data-label="Telefone">
                            <span class="badge bg-soft-success text-success">{{$cliente->telefone}}</span>
                            </td>
                            <td data-label="Endereço">
                            <a class="text-current">{{$cliente->endereco}}</a>
                            </td>
                            <td data-label="Uf">
                            <a class="text-current">{{$cliente->uf}}</a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                         @foreach ($clientes as $cliente)
                         <tr>
                             <td data-label="Job Title">
                             <a class="text-heading font-semibold" href="#">
                                 {{$cliente->nome}}
                             </a>
                             </td>
                             <td data-label="Nascimento">
                             <span>{{$cliente->nascimento}}</span>
                             </td>
                             <td data-label="Cpf">
                             <a class="text-current">{{$cliente->cpf}}</a>
                             </td>
                             <td data-label="Email">
                             <a class="text-current">{{$cliente->email}}</a>
                             </td>
                             <td data-label="Telefone">
                             <span class="badge bg-soft-success text-success">{{$cliente->telefone}}</span>
                             </td>
                             <td data-label="Endereço">
                             <a class="text-current">{{$cliente->endereco}}</a>
                             </td>
                             <td data-label="Uf">
                             <a class="text-current">{{$cliente->uf}}</a>
                             </td>
                         </tr>
                         @endforeach
                       @endif
                    </tbody>
                  </table>
              </div>
        </div>
    </div>

</x-app-layout>
