<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends ContactRepository
{
    use HasFactory;

    /** @attributes -
     * $id
     */

    public static function factory(): Contact
    {
        return app()->make(Contact::class);
    }

    public function populate(array $data): self
    {
        $this->_id = $data['id'] ?? null;

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
