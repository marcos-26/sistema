<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
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
}
