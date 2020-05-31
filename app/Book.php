<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public function payment()
    {
        return $this->hasOne('App\Payment');
    }
}
