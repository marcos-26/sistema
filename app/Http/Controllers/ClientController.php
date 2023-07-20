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
        $data = $request->toArray();

        Log::debug(json_encode($data));

        $nome = $data['nome'];
        $nascimento = $data['nascimento'];
        $cpf = $data['cpf'];
        $email = $data['email'];
        $telefone = $data['telefone'];
        $cep = $data['cep'];
        $logradouro = $data['logradouro'];
        $complemento = $data['complemento'];
        $bairro = $data['bairro'];
        $uf = $data['uf'];

        $clienteRepository = Client::factory();
        $clienteRepository->saveOne([
            'nome' => $nome,
            'nascimento' => $nascimento,
            'cpf' => $cpf,
            'email' => $email,
            'telefone' => $telefone,
            'cep' => $cep,
            'logradouro' => $logradouro,
            'complemento' => $complemento,
            'bairro' => $bairro,
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
