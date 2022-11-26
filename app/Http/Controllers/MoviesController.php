<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();

        return view('movies.movies', compact('movies'));
    }

    public function show($id){
        $movie = Movie::with('comments')->find($id);

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
