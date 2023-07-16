<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;

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
        $email = $base64['email'];
        $msg = $base64['msg'];

        $clienteRepository = Contact::factory();
        $clienteRepository->saveOne([
            'nome' => $nome,
            'email' => $email,
            'msg' => $msg,
        ]);

        return back()->with('message', 'Contato Enviado com Sucesso!');
    }
}
