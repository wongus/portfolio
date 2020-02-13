<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function details() {
        return $this->hasMany(Detail::class);
    }
}
