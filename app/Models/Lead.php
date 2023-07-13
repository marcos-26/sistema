<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    public static function factory(): Lead
    {
        return app()->make(Lead::class);
    }

    public function populate(array $data): self
    {
        $this->id = $data['id'] ?? null;
        $this->nome = $data['nome'];
        $this->nascimento = $data['nascimento'];
        return $this;
    }
}
