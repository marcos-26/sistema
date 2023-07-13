<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public static function factory(): Sale
    {
        return app()->make(Sale::class);
    }

    public function populate(array $data): self
    {
        $this->id = $data['id'] ?? null;
        $this->relatorio = $data['relatorio'];
        $this->relatorio = $data['cliente'];
        return $this;
    }
}
