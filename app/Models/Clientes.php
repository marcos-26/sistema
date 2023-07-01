<?php

namespace App\Models;

use App\Domain\Repository\ClientesRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clientes extends ClientesRepository
{
    use HasFactory;

    /** @attributes -
     * $id
     * $nome
     * $nascimento
     * $cpf
     * $email
     * $telefone
     * $endereco
     * $uf
     */

    public static function factory(): Clientes
    {
        return app()->make(Clientes::class);
    }

    public function populate(array $data): self
    {
        $this->_id = $data['id'] ?? null;
        $this->nome = $data['nome'];
        $this->nascimento = $data['nascimento'];
        $this->cpf = $data['cpf'];
        $this->email = $data['email'];
        $this->telefone = $data['telefone'];
        $this->endereco = $data['endereco'];
        $this->uf = $data['uf'];

        return $this;
    }

}
