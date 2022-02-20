<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
        function index(){
            $movies = Movie::with('cast','category','copy')->get();
            return view('movies.index',['movies' => $movies]);
        }

        function show($title){

        }


}
