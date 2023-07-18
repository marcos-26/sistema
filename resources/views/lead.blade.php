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
                    <form class="row g-3">
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Email</label>
                          <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Password</label>
                          <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                          <label for="inputAddress" class="form-label">Address</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                          <label for="inputAddress2" class="form-label">Address 2</label>
                          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-md-6">
                          <label for="inputCity" class="form-label">City</label>
                          <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                          <label for="inputState" class="form-label">State</label>
                          <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="col-md-2">
                          <label for="inputZip" class="form-label">Zip</label>
                          <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                              Check me out
                            </label>
                          </div>
                        </div>
                        <div class="col-12">
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
