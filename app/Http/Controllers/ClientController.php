<?php

namespace App\Http\Controllers;

use App\Domain\Integration\ViaCepIntegration;
use App\Http\Requests\ValidationRequest;
use App\Models\Client;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends Controller
{
    public function cadastrarClientes(ValidationRequest $request)
    {
        $base64 = $request->toArray();

        Log::debug(json_encode($base64));

        $nome = $base64['nome'];
        $nascimento = $base64['nascimento'];
        $cpf = $base64['cpf'];
        $email = $base64['email'];
        $telefone = $base64['telefone'];
        $uf = $base64['uf'];

        $clienteRepository = Client::factory();
        $clienteRepository->saveOne([
            'nome' => $nome,
            'nascimento' => $nascimento,
            'cpf' => $cpf,
            'email' => $email,
            'telefone' => $telefone,
        ]);

        return back()->with('message', 'Cliente Cadastrado com Sucesso!');
    }

    public function clientes()
    {
        // todos os clientes
        $clientes = Client::all();

        // paginação
        $paginate = Client::paginate(1);

        // search
        $name = request('search');
        $search = $this->procurarClientes($name);

        return view('cliente', compact('clientes', 'paginate', 'search'));
    }

    private function procurarClientes($name)
    {
        $search = Client::factory()->getCustomerByName($name);
        return $search;
    }

    public function consultaCep($cep)
    {
        $consultaCep = ViaCepIntegration::consultarCEP($cep);

        Log::debug('Save biometry ' . $cep);

        if (strlen($cep) != 8) {
            return response()->json([
                'Mensagem' => 'Falta Caracteres No Campo Cep',
            ], 400);
        }

        $cepRepository = Cep::factory();
        $cepRepository->saveOne([
            'cep' => $cep,
            'logradouro' => $consultaCep['logradouro'],
            'complemento' => $consultaCep['complemento'],
            'bairro' => $consultaCep['bairro'],
            'uf' => $consultaCep['uf'],
        ]);

        if (empty($consultaCep)) {
            return response()->json([
                'Mensagem' => 'Cep Inexistente ',
            ], 400);
        }

        return response()->json([
            'cep' => $cepRepository->getCep(),
            'logradouro' => $cepRepository->getlogradouro(),
            'complemento' => $cepRepository->getComplemento(),
            'bairro' => $cepRepository->getBairro(),
            'localidade' => $cepRepository->getLocalidade(),
            'uf' => $cepRepository->getUf(),
            'ddd' => $cepRepository->getDdd(),
        ], 200);
    }

}
