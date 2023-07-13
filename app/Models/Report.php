<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends ReportRepository
{
    use HasFactory;

     /** @attributes -
     * $id
     * $relatorio
     * $cliente
     */

    public static function factory(): Report
    {
        return app()->make(Report::class);
    }

    public function populate(array $data): self
    {
        $this->id = $data['id'] ?? null;
        $this->relatorio = $data['relatorio'];
        $this->relatorio = $data['cliente'];
        return $this;
    }

     /**
      * Get the value of id
      */
     public function getId()
     {
          return $this->id;
     }

     /**
      * Set the value of id
      *
      * @return  self
      */
     public function setId($id)
     {
          $this->id = $id;

          return $this;
     }

     /**
      * Get the value of relatorio
      */
     public function getRelatorio()
     {
          return $this->relatorio;
     }

     /**
      * Set the value of relatorio
      *
      * @return  self
      */
     public function setRelatorio($relatorio)
     {
          $this->relatorio = $relatorio;

          return $this;
     }

     /**
      * Get the value of cliente
      */
     public function getCliente()
     {
          return $this->cliente;
     }

     /**
      * Set the value of cliente
      *
      * @return  self
      */
     public function setCliente($cliente)
     {
          $this->cliente = $cliente;

          return $this;
     }
}
