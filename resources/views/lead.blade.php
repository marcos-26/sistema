<x-app-layout>
    @include('menu.bootstrap')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leads') }}
        </h2>
    </x-slot>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="table-responsive">
                <table class="table" id="search">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th></th>
                          </tr>
                    </thead>
                    <tbody>
                        @foreach ($lead as $leads)
                        <tr>
                            <td data-label="Id">
                            <a class="text-heading font-semibold" href="#">
                                {{$leads->id}}
                            </a>
                            </td>
                            <td data-label="Nome">
                            <span>{{$leads->nome}}</span>
                            </td>
                            <td data-label="Email">
                            <a class="text-current">{{$leads->email}}</a>
                            </td>
                            <td data-label="Telefone">
                            <a class="text-current">{{$leads->telefone}}</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
              </div>
        </div>
    </div>
</x-app-layout>
