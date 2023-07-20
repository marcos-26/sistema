<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;

class LeadController extends Controller
{
    public function cadastrarLeads(Request $request)
    {
        $base64 = $request->toArray();

        Log::debug(json_encode($base64));

        $nome = $base64['nome'];
        $email = $base64['email'];
        $telefone = $base64['telefone'];

        $leadRepository = Lead::factory();
        $leadRepository->saveOne([
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone,
        ]);

        return back()->with('message', 'Contato Enviado com Sucesso!');
    }

    public function lead()
    {
        $leads = Lead::all();
        $paginate = Lead::paginate(1);
        return view('lead', compact('leads', 'paginate'));
    }
}
