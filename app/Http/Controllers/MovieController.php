<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
        function index(){
            $movie_data = Movie::join('categories','categories.id','=','movies.category_id')
//                                    ->join('cast', 'cast.id_movie','=','movies.id')
//                                   ->join('actors', 'actors.id','=','cast.id_actor')
                                    ->orderBy('title')
                                    ->get();
//            dd($movie_data);
            return view('movies', compact('movie_data'));
        }

        function show($title){
//
//            $movie = Movie::join('categories','categories.id_category','=','movies.category')
//                ->where('movies.title', $title)
//                ->get();

            $movie = Movie::with('category')
//                ->where('movies.title', $title)
                ->get();
            dd($movie);

            return view('movie', compact('movie'));

        }


}
