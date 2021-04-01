<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request -> validate([
            'text'=> 'required|max:25',
            'tweetid' => 'required|numeric'
        ]);

        comments::create([
            'user_id' => Auth::id(),
            'text'=> $request->text,
            'tweets_id' => $request->tweetid
        ]);

        return redirect("/home");
    }
}
