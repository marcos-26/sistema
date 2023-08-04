<x-app-layout>
    @include('menu.bootstrap')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contato') }}
        </h2>
    </x-slot>
    <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <form method="POST" action="/enviacontato">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email do contato</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" required>
                  <div id="emailHelp" class="form-text">email do contato obrigatorio.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Diga-nos como entrou em contato</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
              <br>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
