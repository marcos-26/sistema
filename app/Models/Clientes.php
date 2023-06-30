<?php

namespace App\Models;

use App\models\Endereco;
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
        'endereco' => null,
    ];
    public function save(array $options = [])
    {
        parent::save();
        ($this->endereco) ? $this->Endereco()->save($this->endereco) : null;
    }
    public function Endereco()
    {
        return $this->hasOne(Endereco::class);
    }

    /**
     * Get the value of Endereco
     */
    public function getEndereco():  ? Endereco
    {
        return $this->endereco;
    }

    /**
     * Set the value of Endereco
     *
     * @return  self
     */
    public function setEndereco(Enderecos $endereco)
    {
        unset($this->endereco);
        $this->endereco = $endereco->toArray();

        return $this;
    }
}
