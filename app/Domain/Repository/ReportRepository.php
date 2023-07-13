<?php
namespace App\Domain\Repository;

use Illuminate\Database\Eloquent\Model;

class ReportRepository extends Model
{
    protected $private;

    protected $table = 'relatorios';
}
