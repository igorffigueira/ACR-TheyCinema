<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinemas extends Model
{
    public function salas()
    {
        return $this->belongsToMany('App\Sala','salasCinema','cinemas_id','salas_id');
    }
}
