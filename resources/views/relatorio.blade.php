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
                    <div class="p-6 text-gray-900">
                    <form method="POST" class="row g-3" action="/cadastrarrelatorio">
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"name= "funcionario">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Comentário</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea2" class="form-label">Relatório</label>
                        <input type="file" class="form-control" aria-label="file example" name="relatorio"required>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                      </div>
                    </form>
                    <br>
                        <div class="table-responsive">
                            <table class="table" id="search">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Comentário</th>
                                        <th scope="col">Relatório</th>
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
                                        <td data-label="Nome">
                                            <a class="text-current">{{$relatorios->funcionario}}</a>
                                        </td>
                                        <td data-label="Comentario">
                                            <span>{{$relatorios->comentario}}</span>
                                        </td>
                                        <td data-label="Relatorio">
                                            <span>{{$relatorios->relatorio}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $paginate->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
