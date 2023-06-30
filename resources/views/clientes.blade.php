
<x-app-layout>
    @include('menu.bootstrap')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="nav-link" href="">Cadastrar Clintes</a>
              <form class="d-flex" {{ url('/dashboard') }}>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                          <thead class="table-light">
                            <tr>
                              <th scope="col">Nome</th>
                              <th scope="col">Nascimento</th>
                              <th scope="col">Cpf</th>
                              <th scope="col">Email</th>
                              <th scope="col">Telefone</th>
                              <th scope="col">Endereço</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($clientes as $cliente)
                            <tr>
                              <td data-label="Job Title">
                                <img alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
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
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadastarClientes">
    Cadastrar Clintes
  </button>

  <!-- Modal -->
  <div class="modal fade" id="cadastarClientes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" class="row g-3" action="/cadastrarclientes">
                <div class="col-md-4">
                  <label for="validationServer01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationServer01" value="" required>

                </div>
                <div class="col-md-4">
                  <label for="validationServer02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationServer02" value="" required>

                </div>
                <div class="col-md-4">
                  <label for="validationServerUsername" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    <input type="text" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>

                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationServer03" class="form-label">City</label>
                  <input type="text" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                </div>
                <div class="col-md-3">
                  <label for="validationServer04" class="form-label">State</label>
                  <select class="form-select" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label for="validationServer05" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                    <label class="form-check-label" for="invalidCheck3">
                      Agree to terms and conditions
                    </label>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" type="submit">Cadastrar Cliente</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
