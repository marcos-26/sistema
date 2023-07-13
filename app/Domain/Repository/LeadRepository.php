<?php
namespace App\Domain\Repository;

use Illuminate\Database\Eloquent\Model;

class LeadRepository extends Model
{
    protected $private;

    protected $table = 'leads';
}
