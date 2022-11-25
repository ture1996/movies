@extends('layouts.master')

@section('title', 'Create movie')

@section('content')
    <form action="/movies">
        <div class="justAnotherDiv">
            <label for="newFormControlInput1" class="form-label">
                Title
            </label>
            <input type="text" name ="title" class="form-control" id="newFormControlInput1" placeholder="Title">
        </div>
        
        <div class="justAnotherDiv">
            <label for="newFormControlInput2" class="form-label">
                Genres
            </label>
            <input type="text" name ="genres" class="form-control" id="newFormControlInput2" placeholder="Genres">
        </div>

        <div class="justAnotherDiv">
            <label for="newFormControlInput3" class="form-label">
                Director
            </label>
            <input type="text" name ="director" class="form-control" id="newFormControlInput3" placeholder="Director">
        </div>

        <div class="justAnotherDiv">
            <label for="newFormControlInput4" class="form-label">
                Release date
            </label>
            <input type="number" name ="release-date" class="form-control" id="newFormControlInput4">
        </div>
    
        <div class="justAnotherDiv">
            <label for="newFormControlTextarea1" class="form-label">
                Storyline
            </label>
            <textarea name ="storyline" class="form-control" id="newFormControlTextarea1" rows="5" placeholder="Storyline">
            </textarea>
        </div>

        <button type="submit">
            Create movie
        </button>
    </form>
@endsection