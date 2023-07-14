<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function config()
    {
        $configuracao = Config::all();
        return view('configuracao', ['configuracao' => $configuracao]);
        return view('configuracao');
    }
}
