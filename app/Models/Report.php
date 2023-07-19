<?php

namespace App\Models;

use App\Domain\Repository\ReportRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends ReportRepository
{
    use HasFactory;

    /** @attributes -
     * $id
     * $funcionario
     * $relatorio
     * $comentario
     */

    public static function factory(): Report
    {
        return app()->make(Report::class);
    }

    public function populate(array $data): self
    {
        $this->id = $data['id'] ?? null;
        $this->funcionario = $data['funcionario'];
        $this->relatorio = $data['relatorio'];
        $this->comentario = $data['comentario'];
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
     * Get the value of funcionario
     */
    public function getFuncionario()
    {
        return $this->funcionario;
    }

    /**
     * Set the value of funcionario
     *
     * @return  self
     */
    public function setFuncionario($funcionario)
    {
        $this->funcionario = $funcionario;

        return $this;
    }

    /**
     * Get the value of comentario
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set the value of comentario
     *
     * @return  self
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }
}
