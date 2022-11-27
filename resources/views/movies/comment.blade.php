@extends('layouts.master')

@section('title', 'Comment')

@section('content')
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

<form method="POST" action="{{route('movie-comments')}}">

    @csrf

    <div class="justAnotherDiv">
        <label for="newFormControlTextarea1" class="form-label">
            Leave a comment:
        </label>
        <textarea name ="content" class="form-control" id="newFormControlTextarea1" rows="5" >
        </textarea>
        @error('content')
            @include('partials.error')
        @enderror
        <label for="newFormControlTextarea1" class="form-label">
            Movie:
        </label>
        <select name="movie_id" class="form-control" size="Number_of_options" id="newFormControlSelect1">
            @foreach($movies as $add)
                <option value={{$add->comments[0]->movie_id}}>
                    {{$add->title}}
                </option>
            @endforeach
        </select>
        @error('movie_id')
            @include('partials.error')
        @enderror
    </div>

   

    <button type="submit">
        Post comment
    </button>
</form>
@endsection