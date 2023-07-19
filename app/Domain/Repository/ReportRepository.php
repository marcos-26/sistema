<?php
namespace App\Domain\Repository;

use Illuminate\Database\Eloquent\Model;

class ReportRepository extends Model
{
    protected $private;

    protected $table = 'relatorios';

    public function saveOne($data)
    {
        $keys = array_keys($data);
        $this->fillable = $keys;
        $this->fill($data);
        $this->save();
    }

}
