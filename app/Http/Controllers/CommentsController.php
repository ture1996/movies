<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Movie;
use App\Http\Requests\StoreCommentRequest;

class CommentsController extends Controller
{
    
    public function store(StoreCommentRequest $request){

        $validated=$request->validated();
        
        Movie::find($validated['movie_id'])->addComment($validated['content']);

        return redirect('/movies/'.$validated['movie_id']);
    }

}
