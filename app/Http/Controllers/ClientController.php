<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends Controller
{
    public function cadastrarClientes(Request $request)
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

        return redirect('/clientes');
    }

    public function Clientes()
    {
        $clientes = Client::all();
        return view('cliente', ['clientes' => $clientes]);
    }

    public function procurarClientes()
    {
        $name = request('search');
        $search = Client::factory()->getCustomerByName($name);
        return view('cliente', ['search' => $search]);
    }

}
