<?php

use Illuminate\Support\Facades\Route;
use App\Movie;
use App\Actor;
use App\Http\Controllers\MovieController;




Route::get('/',  [MovieController::class,'index']);
Route::get('/{movie:title}', [MovieController::class,'show']);

//Route::get('/{movie}', function(Movie $movie){
//    return view('movie',[
//        'movie' => $movie,
//    ]);
//});
