<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReportController extends Controller
{

    public function cadastrarRelatorio(Request $request)
    {
        $base64 = $request->toArray();

        Log::debug(json_encode($base64));

        $funcionario = $base64['funcionario'];
        $comentario = $base64['comentario'];
        $relatorio = $base64['relatorio'];

        $reportRepository = Report::factory();
        $reportRepository->saveOne([
            'funcionario' => $funcionario,
            'comentario' => $comentario,
            'relatorio' => $relatorio,
        ]);

        return back()->with('message', 'Contato Enviado com Sucesso!');
    }

    public function report()
    {
        $relatorio = Report::all();
        $paginate = Report::paginate(1);
        return view('relatorio', compact('relatorio', 'paginate'));
    }
}
