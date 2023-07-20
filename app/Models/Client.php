<?php

namespace App\Models;

use App\Domain\Repository\ClientRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends ClientRepository
{
    use HasFactory;

    /** @attributes -
     * $id
     * $nome
     * $nascimento
     * $cpf
     * $email
     * $telefone
     * $cep
     * $logradouro
     * $complemento
     * $bairro
     * $uf
     */

    public static function factory(): Client
    {
        return app()->make(Client::class);
    }

    public function populate(array $data): self
    {
        $this->id = $data['id'] ?? null;
        (isset($data['nome'])) ? $this->nome = $data['nome'] ?? '' : null;
        (isset($data['nascimento'])) ? $this->nascimento = $data['nascimento'] ?? '' : null;
        (isset($data['cpf'])) ? $this->cpf = $data['cpf'] ?? '' : null;
        (isset($data['email'])) ? $this->email = $data['email'] ?? '' : null;
        (isset($data['telefone'])) ? $this->telefone = $data['telefone'] ?? '' : null;
        (isset($data['cep'])) ? $this->cep = $data['cep'] ?? '' : null;
        (isset($data['logradouro'])) ? $this->logradouro = $data['logradouro'] ?? '' : null;
        (isset($data['complemento'])) ? $this->complemento = $data['complemento'] ?? '' : null;
        (isset($data['bairro'])) ? $this->bairro = $data['bairro'] ?? '' : null;
        (isset($data['uf'])) ? $this->uf = $data['uf'] ?? '' : null;

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
     * Get the value of nascimento
     */
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * Set the value of nascimento
     *
     * @return  self
     */
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

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

    /**
     * Get the value of uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     *
     * @return  self
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get the value of cep
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     *
     * @return  self
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of logradouro
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set the value of logradouro
     *
     * @return  self
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get the value of complemento
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set the value of complemento
     *
     * @return  self
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get the value of bairro
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set the value of bairro
     *
     * @return  self
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }
}
