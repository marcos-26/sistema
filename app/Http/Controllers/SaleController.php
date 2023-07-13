<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function sale()
    {
        $venda = Sale::all();
        return view('venda', ['vendas' => $venda]);
    }
}
