<?php
namespace App\Domain\Repository;

use Illuminate\Database\Eloquent\Model;

class ConfigRepository extends Model
{
    protected $private;

    protected $table = 'configuracao';
}
