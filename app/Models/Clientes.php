<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    /** @attributes -
     * $numero
     * $rua
     * $complemento
     * $bairro
     * $uf
     * $cidade
     */

    protected $attributes = [
        'nome',
        'nascimento',
        'cpf',
        'email',
        'telefone',
        'endereco',
        'uf',
    ];

    public static function factory(): Clientes
    {
        return app()->make(Clientes::class);
    }

    public function populate(array $data): self
    {
        $this->cep = $data['nome'] ?? null;
        $this->logradouro = $data['nascimento'];
        $this->complemento = $data['cpf'];
        $this->bairro = $data['email'];
        $this->localidade = $data['telefone'];
        $this->ddd = $data['endereco'];
        $this->uf = $data['uf'];

        return $this;
    }

}
