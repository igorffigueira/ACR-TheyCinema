<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class localizacaoController extends Controller
{
    public function index(){
        return view('localizacao');
    }
}
