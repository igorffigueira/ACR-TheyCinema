<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use DB;

class HomeController extends Controller
{
    //     public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        return View('homepage')
        ->with('movies', Movies::all());
                    
    }
}
