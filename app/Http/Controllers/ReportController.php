<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        $relatorio = Report::all();
        return view('relatorio', ['relatorio' => $relatorio]);
    }
}
