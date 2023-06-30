<?php
namespace App\Domain\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CepRepository extends Model
{
    use SoftDeletes;

    protected $private;

    protected $table = 'cep';

    public function saveOne($data)
    {
        $keys = array_keys($data);
        $this->fillable = $keys;
        $this->fill($data);
        $this->save();
    }
}
