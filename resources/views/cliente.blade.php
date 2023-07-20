
<x-app-layout>
    @include('menu.bootstrap')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>
    <div class="py-12">
         <!-- Button trigger modal -->
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <nav class="navbar">
                <div class="container-fluid">
                  {{-- <a class="nav-link" href=""></a> --}}
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadastarClientes">
                    Cadastrar Clintes
                </button>
                  <form class="d-flex">
                    <input class="form-control me-2" name="search" id="search" type="search" placeholder="Pesquisa" aria-label="Search">
                    <button class="btn btn-outline-success" type="Pesquisa">Search</button>
                  </form>
                </div>
              </nav>
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
                                    <th scope="col">Bairro</th>
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
                                    <td data-label="Bairro">
                                    <a class="text-current">{{$cliente->bairro}}</a>
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
            <div class="d-flex justify-content-center">
                {{ $paginate->links() }}
            </div>
            <br>
            @if ($errors->any())
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
            @endif
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
        </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="cadastarClientes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar-Se</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" class="row g-3" action="/cadastrarclientes">
                <div class="col-md-4">
                  <label for="validationServer01" class="form-label">NOME</label>
                  <input type="text" class="form-control" name="nome" id="validationServer01" @error('name') @enderror value="" required>
                  @error('name')
                  <div class= 'invalid-feedback'>
                  {{$message}}
                  </div>
                  @enderror
                </div>
                <div class="col-md-4">
                  <label for="validationServer02" class="form-label">NASCIMENTO</label>
                  <input type="date" class="form-control" name="nascimento" id="nascimento" value="" required>
                </div>
                <div class="col-md-4">
                    <label for="validationServer03" class="form-label">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" value="" required>
                  </div>
                <div class="col-md-6">
                    <label for="validationServer04" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" name="email" id="email" value="" required>
                  </div>
                <div class="col-md-6">
                  <label for="validationServer05" class="form-label">TELEFONE</label>
                  <input type="text" class="form-control" name="telefone" id="telefone" required>
                </div>
                <div class="col-md-6">
                    <label for="validationServer07" class="form-label">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep" onblur="completeAddress()" required>
                  </div>
                <div class="col-md-6">
                  <label for="validationServer07" class="form-label">RUA</label>
                  <input type="text" class="form-control" name="logradouro" id="rua" aria-describedby="validationServer07Feedback" required>
                </div>
                <div class="col-md-4">
                  <label for="validationServer07" class="form-label">COMPLEMENTO</label>
                  <input type="text" class="form-control" name="complemento" id="complemento" aria-describedby="validationServer07Feedback" placeholder="referência">
                </div>
                <div class="col-md-4">
                  <label for="validationServer07" class="form-label">BAIRRO</label>
                  <input type="text" class="form-control" name="bairro" id="bairro" aria-describedby="validationServer07Feedback" required>
                </div>
                <div class="col-md-3">
                    <label for="validationServer07" class="form-label">UF</label>
                    <input type="text" class="form-control" name="uf" id="uf" aria-describedby="validationServer07Feedback" required>
                  </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                    <label class="form-check-label" for="invalidCheck3">
                      Concordo com os termos.
                    </label>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button class="btn btn-primary" type="submit">Cadastrar Cliente</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>

<script>
    function completeAddress() {
        const cep = document.getElementById('cep').value;

        fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('rua').value = data.logradouro;
                document.getElementById('complemento').value = data.complemento;
                document.getElementById('bairro').value = data.bairro;
                document.getElementById('uf').value = data.uf;
            })
            .catch(error => console.error('Erro:', error));
    }
</script>
