<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;

class ClientesController extends Controller
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

        $clienteRepository = Clientes::factory();
        $clienteRepository->saveOne([
            'nome' => $nome,
            'nascimento' => $nascimento,
            'cpf' => $cpf,
            'email' => $email,
            'telefone' => $telefone,
            'endereco' => $endereco,
            'uf' => $uf,
        ]);

        return response()->json(array(
            'mensagem' => 'salvo com sucesso',
        ), 200);

    }

    public function busca_detalhe(Request $request)
    {
        $dados = $request->except('_token');
        $cars = DB::table('cars')->select('*')->where('parametro', '=', $dados['parametro'])->get();
        return view('car.detalhes', compact('cars')); //Crie a view para mostrar os resultados
    }

    public function Clientes()
    {
        $clientes = Clientes::all();
        return view('clientes', ['clientes' => $clientes]);
    }

}
