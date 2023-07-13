<?php
namespace App\Domain\Repository;

use Illuminate\Database\Eloquent\Model;

class SaleRepository extends Model
{
    protected $private;

    protected $table = 'vendas';
}
