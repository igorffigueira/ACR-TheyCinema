<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Positions;
use DB;

class buyticketController extends Controller
{
            public function __construct()
    {
        $this->middleware('auth');
    }
    function buy($idmovie){
        $getIdSala = DB::table('movies')->where('IdMovie',$idmovie)->value('salas_id');
        $getPosition = DB::table('positions')->where('salas_id', $getIdSala)->get()->toArray();
        return view('buyticked')
            ->with ('position', $getPosition);
    }


    function served(Request $request){
        $idSala = $request['dataIdSala'];
        $idPosicao = $request['dataPosition'];
        if($idPosicao === "a1"){
            DB::table('positions')->where('salas_id',$idSala)->update(array('a1' => '1'));
        }
        else if($idPosicao === "a2"){
            DB::table('positions')->where('salas_id','=',$idSala)->update(array('a2' => '1'));
        }
        else if($idPosicao === "a3"){
            DB::table('positions')->where('salas_id','=',$idSala)->update(array('a3' => '1'));
        }
        else if($idPosicao === "a4"){
            DB::table('positions')->where('salas_id','=',$idSala)->update(array('b1' => '1'));
        }
        else if($idPosicao === "a5"){
            DB::table('positions')->where('salas_id','=',$idSala)->update(array('b2' => '1'));
        }
        else if($idPosicao === "a6"){
            DB::table('positions')->where('salas_id','=',$idSala)->update(array('b3' => '1'));
        }
        else if($idPosicao === "a7"){
            DB::table('positions')->where('salas_id','=',$idSala)->update(array('c1' => '1'));
        }
        else if($idPosicao === "a8"){
            DB::table('positions')->where('salas_id','=',$idSala)->update(array('c2' => '1'));
        }
        else if($idPosicao === "a9"){
            DB::table('positions')->where('salas_id','=',$idSala)->update(array('c3' => '1'));
        }
    }
}
