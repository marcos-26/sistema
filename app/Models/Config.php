<?php

namespace App\Models;

use App\Domain\Repository\ConfigRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends ConfigRepository
{
    use HasFactory;
     /** @attributes -
     * $id
     */

     public static function factory(): Config
     {
         return app()->make(Config::class);
     }

     public function populate(array $data): self
     {
         $this->id = $data['id'] ?? null;
         return $this;
     }

     /**
      * Get the value of id
      */
     public function getId()
     {
          return $this->id;
     }

     /**
      * Set the value of id
      *
      * @return  self
      */
     public function setId($id)
     {
          $this->id = $id;

          return $this;
     }
}
