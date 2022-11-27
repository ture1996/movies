@extends('layouts.master')

@section('title', $movie->title)

@section('content')
        <h2>
            {{$movie->title}} movie from {{$movie->release_date}} by {{$movie->director}}
        </h2>
        <p>
        <br>
            <h3>
                Storyline
            </h3>
            {{$movie->storyline}}
        </p>
        <br>

        <h5>Comments:</h5>
        <br>
        <br>
        <dl>
            @foreach($movie->comments as $comment)
                <dt>
                    <p style="font-size:20px">
                        {{$comment->content}}
                    </p>
                </dt>
                <dd>
                    <h6>
                        {{$comment->created_at}}
                    </h6>
                </dd>
                <br>
                <br>
            @endforeach
        </dl>
        
        <h5>
            Genres: 
            @foreach(explode(', ',($movie->genre),100) as $genre)
                <a href = "{{route('genre-movies', ['genre' => $genre])}}">{{$genre}}</a>
            @endforeach
        </h5>
@endsection