<x-app-layout>
    @include('menu.bootstrap')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leads') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" class="row g-3" action="/cadastrarleads">
                        <div class="col-md-3">
                          <label for="inputPassword4" class="form-label">Nome</label>
                          <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="col-md-3">
                          <label for="inputEmail4" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-3">
                          <label for="inputAddress" class="form-label">Telefone</label>
                          <input type="text" class="form-control" id="telefone" name="telefone" required>
                        </div>
                        <div class="col-md-6">
                          <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                      </form>
                      <br>
                    <div class="table-responsive">
                        <table class="table table-white table-hover" id="search">
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
                                @foreach ($leads as $lead)
                                <tr>
                                    <td data-label="Id">
                                    <a class="text-heading font-semibold" href="#">
                                        {{$lead->id}}
                                    </a>
                                    </td>
                                    <td data-label="Nome">
                                    <span>{{$lead->nome}}</span>
                                    </td>
                                    <td data-label="Email">
                                    <a class="text-current">{{$lead->email}}</a>
                                    </td>
                                    <td data-label="Telefone">
                                    <a class="text-current">{{$lead->telefone}}</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                {{ $paginate->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
