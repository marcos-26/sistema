<?php

namespace App\Models;

use App\Domain\Repository\LeadRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lead extends LeadRepository
{
    use HasFactory;

    /** @attributes -
     * $id
     * $nome
     * $email
     * $telefone
     */

    public static function factory(): Lead
    {
        return app()->make(Lead::class);
    }

    public function populate(array $data): self
    {
        $this->id = $data['id'] ?? null;
        $this->nome = $data['nome'];
        $this->email = $data['email'];
        $this->telefone = $data['telefone'];
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
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telefone
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }
}
