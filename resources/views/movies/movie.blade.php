@extends('layouts.master')

@section('title', $movie->title)

@section('content')
        <h2>
            {{$movie->title}} movie from {{$movie["release date"]}} by {{$movie->director}}
        </h2>
        <p>
        <br>
            <h3>
                Storyline
            </h3>
            {{$movie->storyline}}
        </p>
        <br>
        <h5>
            Genres: @foreach(explode(',',($movie->genre),100) as $genre)
                {{$genre}}
            @endforeach
        </h5>
@endsection