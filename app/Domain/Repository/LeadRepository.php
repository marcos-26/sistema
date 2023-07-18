<?php
namespace App\Domain\Repository;

use Illuminate\Database\Eloquent\Model;

class LeadRepository extends Model
{
    protected $private;

    protected $table = 'leads';

    public function saveOne($data)
    {
        $keys = array_keys($data);
        $this->fillable = $keys;
        $this->fill($data);
        $this->save();
    }
}
