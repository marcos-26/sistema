<?php

namespace App\Models;

use App\Domain\Repository\SaleRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends SaleRepository
{
    use HasFactory;

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
}
