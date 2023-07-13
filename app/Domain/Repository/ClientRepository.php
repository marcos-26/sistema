<?php
namespace App\Domain\Repository;

use Illuminate\Database\Eloquent\Model;

class ClientRepository extends Model
{
    protected $private;

    protected $table = 'clientes';

    public function saveOne($data)
    {
        $keys = array_keys($data);
        $this->fillable = $keys;
        $this->fill($data);
        $this->save();
    }

    public function getCustomerByName($name)
    {

        return self::where('nome', 'like', '%' . $name . '%')->get();

    }
}
