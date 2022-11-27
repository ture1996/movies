<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();

        return view('movies.movies', compact('movies'));
    }

    public function show($id){
        $movies = Movie::all();
        $movie = Movie::with('comments')->find($id);
        $currentPath= Route::getFacadeRoot()->current()->uri();
        if ($currentPath=="movies/{id}/comments"){
            return view('movies.comment', compact('movie', 'movies'));
        }
        return view('movies.movie', compact('movie'));
    }

    public function create(){

        return view('movies.create');

    }

    public function store(){

        $this->validate(
            request(),
            [
                'title' => 'required',
                'genre' => 'required',
                'director' => 'required',
                'release_date' => 'nullable|integer|min:1900|max:'.date('Y'),
                'storyline' => 'max:1000'
            ]
            );

        Movie::create(
            [
                'title' => request('title'),
                'genre' => request('genre'),
                'director' => request('director'),
                'release_date' => request('release_date'),
                'storyline' => request('storyline')
            ]
            );

        return redirect('/movies');    

    }

}
