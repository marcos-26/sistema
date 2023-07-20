<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use App\Models\Client;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends Controller
{
    public function cadastrarClientes(ValidationRequest $request)
    {
        $base64 = $request->toArray();

        Log::debug(json_encode($base64));

        $nome = $base64['nome'];
        $nascimento = $base64['nascimento'];
        $cpf = $base64['cpf'];
        $email = $base64['email'];
        $telefone = $base64['telefone'];
        $endereco = $base64['endereco'];
        $uf = $base64['uf'];

        $clienteRepository = Client::factory();
        $clienteRepository->saveOne([
            'nome' => $nome,
            'nascimento' => $nascimento,
            'cpf' => $cpf,
            'email' => $email,
            'telefone' => $telefone,
            'endereco' => $endereco,
            'uf' => $uf,
        ]);

        return back()->with('message', 'Cliente Cadastrado com Sucesso!');
    }

    public function clientes()
    {
        // todos os clientes
        $clientes = Client::all();

        // paginação
        $paginate = Client::paginate(1);

        // search
        $name = request('search');
        $search = $this->procurarClientes($name);

        return view('cliente', compact('clientes', 'paginate', 'search'));
    }

    private function procurarClientes($name)
    {
        $search = Client::factory()->getCustomerByName($name);
        return $search;
    }

}
