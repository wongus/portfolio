<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function insert($EC) {
        $this->score = $EC;
        $this->save();
        $this->pass();
    }

    public function pass() {
        if($this->EC === $this->score) {
            $this->passed = true;
            $this->save();
        }
    }
}
