@extends('layouts.master')

@section('title', 'Create movie')

@section('content')
    <form method="POST" action="/movies">

        @csrf

        <div class="justAnotherDiv">
            <label for="newFormControlInput1" class="form-label">
                Title
            </label>
            <input type="text" name ="title" class="form-control" id="newFormControlInput1" placeholder="Title">
        </div>
        
        @error('title')
            @include('partials.error')
        @enderror

        <div class="justAnotherDiv">
            <label for="newFormControlInput2" class="form-label">
                Genre
            </label>
            <input type="text" name ="genre" class="form-control" id="newFormControlInput2" placeholder="Genre">
        </div>

        @error('genre')
            @include('partials.error')
        @enderror

        <div class="justAnotherDiv">
            <label for="newFormControlInput3" class="form-label">
                Director
            </label>
            <input type="text" name ="director" class="form-control" id="newFormControlInput3" placeholder="Director">
        </div>

        @error('director')
            @include('partials.error')
        @enderror

        <div class="justAnotherDiv">
            <label for="newFormControlInput4" class="form-label">
                Release_date
            </label>
            <input type="number" name ="release_date" class="form-control" id="newFormControlInput4">
        </div>
    
        @error('release_date')
            @include('partials.error')
        @enderror

        <div class="justAnotherDiv">
            <label for="newFormControlTextarea1" class="form-label">
                Storyline
            </label>
            <textarea name ="storyline" class="form-control" id="newFormControlTextarea1" rows="5" >
            </textarea>
        </div>

        @error('storyline')
            @include('partials.error')
        @enderror

        <button type="submit">
            Create movie
        </button>
    </form>
@endsection