<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;

class CadastrarClientes extends Controller
{

    public function cadastrarClientes(Request $request)
    {
        $base64 = $request->toArray();

        Log::debug(json_encode($base64));
        dd($base64);

    }

    public function busca_detalhe(Request $request)
    {
        $dados = $request->except('_token');
        $cars = DB::table('cars')->select('*')->where('parametro', '=', $dados['parametro'])->get();
        return view('car.detalhes', compact('cars')); //Crie a view para mostrar os resultados
    }

}
