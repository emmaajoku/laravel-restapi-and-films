<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Movies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function store(Request $request )
    {
        $movie = Movies::findOrFail($request->movie_id);

        Comment::create([
            'body' => $request->body,
            'user_id' => Auth::id(),
            'movie_id' => $movie->id
        ]);
        return redirect()->route('movies.show', $movie->id);
    }
}