<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Cast;

class MovieController extends Controller
{
        function index(){
//            $movies = Movie::with('cast','copy')->get();
//            $cast = Cast::with('actor','movie')->get();
            $movies = Movie::all();
            $cast = Cast::all();
            return view('movies.index',['movies' => $movies,'cast'=>$cast]);
        }

        function show($title){

        }


}
