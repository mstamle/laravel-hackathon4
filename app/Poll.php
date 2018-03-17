<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $table = "polls";
    public function options() {
        return $this->hasMany('App\Option', 'poll_code', 'code');
    }
}
