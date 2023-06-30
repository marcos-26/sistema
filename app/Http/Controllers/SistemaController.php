<?php

namespace App\Http\Controllers;

use App\Models\Clientes;

class SistemaController extends Controller
{

    public function Index()
    {
        return view('home');
    }

    public function Projetos()
    {
        return view('projetos');
    }

    public function Produtos()
    {
        return view('produtos');
    }

    public function Clientes()
    {
        $clientes = Clientes::all();
        return view('clientes', ['clientes' => $clientes]);
    }

}
