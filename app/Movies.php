<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $movie = 'titulos';
    protected $hidden = array('id','created_at', 'updated_at');
    protected $fillable = ['IdMovie','TitleMovie','salas_id'];

}
