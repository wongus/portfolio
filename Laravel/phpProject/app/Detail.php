<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function grade(){
        $this->belongsTo(Grade::Class);
    }
}
