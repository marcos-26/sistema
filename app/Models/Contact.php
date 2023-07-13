<?php

namespace App\Models;

use App\Domain\Repository\ContactRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends ContactRepository
{
    use HasFactory;

    /** @attributes -
     * $id
     * $nome
     * $msg
     */

    public static function factory(): Contact
    {
        return app()->make(Contact::class);
    }

    public function populate(array $data): self
    {
        $this->id = $data['id'] ?? null;
        $this->nome = $data['nome'];
        $this->msg = $data['msg'];

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
      * Get the value of nome
      */
     public function getNome()
     {
          return $this->nome;
     }

     /**
      * Set the value of nome
      *
      * @return  self
      */
     public function setNome($nome)
     {
          $this->nome = $nome;

          return $this;
     }

     /**
      * Get the value of msg
      */
     public function getMsg()
     {
          return $this->msg;
     }

     /**
      * Set the value of msg
      *
      * @return  self
      */
     public function setMsg($msg)
     {
          $this->msg = $msg;

          return $this;
     }
}
