@extends('layouts.master')

@section('title', 'Movies')

@section('content')
    <dl>
    @foreach($movies as $movie)
        <dt>
            <h2>
                <a href = "{{route('single-movie' , ['id' => $movie->id])}}">
                    {{$movie->title}}
                </a>
            </h2>
        </dt>
        <dd>
            <p>
                {{$movie->storyline}}
            </p>
            <br>
        </dd>
    @endforeach
    </dl>
@endsection