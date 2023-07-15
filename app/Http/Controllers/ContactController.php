<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        $contact = Contact::all();
        return view('contato', ['contato' => $contact]);
    }

    public function recebeContato(Request $request)
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
    }
}
