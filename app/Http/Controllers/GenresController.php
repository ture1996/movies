<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Controllers\MoviesController;
class GenresController extends Controller
{
    
    public function show($genre){
        $movies = Movie::all();
        $genreMovies = [];
        foreach($movies as $movie){
            foreach(explode(', ',($movie->genre),100) as $genres)
            {
                if($genres == $genre){
                    array_push($genreMovies,$movie);
                }
            }
        }
        $movies = $genreMovies;
        return view('movies.movies', compact('movies'));
    }

}
