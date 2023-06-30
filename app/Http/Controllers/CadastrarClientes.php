<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;

class CadastrarClientes extends Controller
{

    public function Dados(Request $request)
    {
        $base64 = $request->toArray();

        Log::debug(json_encode($base64));
        dd($base64);

    }

}
