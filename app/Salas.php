<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salas extends Model
{
    protected $hidden = ['id', 'created_at', "updated_at"];
    
    public function movies()
    {
        return $this->hasOne('App\Movies','movies','salas_id');
    }

    public function cinemas()
    {
        return $this->belongsToMany('App\Cinemas');
    }

    public function positions()
    {
        return $this->hasOne('App\Positions','positions','salas_id');
    }
}
