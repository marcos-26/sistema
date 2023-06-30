<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
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

    protected $fillable = [
        'numero',
        'rua',
        'complemento',
        'bairro',
        'uf',
        'cidade',
    ];

}
