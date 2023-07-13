<?php

namespace App\Models;

use App\Domain\Repository\SaleRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends SaleRepository
{
    use HasFactory;

    /** @attributes -
     * $id
     * $vendas
     * $vendedor
     */

    public static function factory(): Sale
    {
        return app()->make(Sale::class);
    }

    public function populate(array $data): self
    {
        $this->id = $data['id'] ?? null;
        $this->relatorio = $data['vendas'];
        $this->relatorio = $data['vendedor'];
        return $this;
    }

     /**
      * Get the value of vendas
      */
     public function getVendas()
     {
          return $this->vendas;
     }

     /**
      * Set the value of vendas
      *
      * @return  self
      */
     public function setVendas($vendas)
     {
          $this->vendas = $vendas;

          return $this;
     }

     /**
      * Get the value of vendedor
      */
     public function getVendedor()
     {
          return $this->vendedor;
     }

     /**
      * Set the value of vendedor
      *
      * @return  self
      */
     public function setVendedor($vendedor)
     {
          $this->vendedor = $vendedor;

          return $this;
     }
}
