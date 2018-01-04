<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class MoviesController extends Controller
{
    public function formateid($idmovie){
        
        return view('infomovie')->with('IdMovie', $idmovie);
        
    }
}
