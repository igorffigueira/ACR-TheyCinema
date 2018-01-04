<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    protected $hidden = array('id','created_at', 'updated_at', 'salas_id');
}
