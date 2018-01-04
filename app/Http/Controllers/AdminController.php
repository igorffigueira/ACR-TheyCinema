<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use App\Salas;
use DB;

class AdminController extends Controller
{

    public function index()
    {
        return view('adminpage')
            ->with('movies', movies::all())
            ->with('salas', salas::all());
    }
    public function savemovies(Request $request){
        $movie = new Movies;
        $movie->IdMovie = $request['dataIdMovie'];
        $movie->TitleMovie = $request['dataTitleMovie'];
        $movie->salas_id = $request['dataIdSala'];
        $movie->UrlMovie = $request['dataUrlMovie'];
        $movie->save();
        }
    public function deletemovies(Request $request){
        $IdMovie = $request['dataIdMovie'];
        DB::table("movies")->where('IdMovie', $IdMovie)->delete();
    }
    public function conectMS(Request $request){
        $IdMovie = $request['dataIdMovie'];
        DB::table('movies')->where('IdMovie', $IdMovie)->update(array('salas_id' => $request['dataIdSala']));
    }

    public function clearsala(Request $request){
        $IdSala = $request['dataIdSala'];
        DB::table('positions')->where('salas_id', $IdSala)->update(
          array('a1' =>'0',
                'a2' =>'0',
                'a3' =>'0',
                'b1' =>'0',
                'b2' =>'0',
                'b3' =>'0',
                'c1' =>'0',
                'c2' =>'0',
                'c3' =>'0',
            ));            
            }

}
