<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use App\Positions;
use App\Salas;
use DB;

class jsonController extends Controller
{
   public function getInfoCinema($key){
        $jsonMovie = Movies::get()->toArray();
        $jsonPositions = Positions::get()->toArray();
        $jsonSalas = Salas::get()->toArray(); 
        
        $verifykey = DB::table('keys')->where('keys', $key)->first();
        if(isset($verifykey)){
        $arrayjson = ['data' =>['Movies' => $jsonMovie, 'Seats' => $jsonPositions, 'Salas'=> $jsonSalas]];
        return $arrayjson;
        }else {return redirect('/');}
   }
}
