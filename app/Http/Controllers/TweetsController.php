<?php

namespace App\Http\Controllers;

use App\Models\tweets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('tweets.index');
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::check()){
            return redirect('/login');
        }
        $user = Auth::user();
        return view('tweets.create',['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();


        $request-> validate([
            'text' => 'required|max:25'
        ]);
        tweets::create([
            'text' => $request->text,
            'user_id' => Auth::id(),
            'name' => $user->name
        ]);
       
        return redirect('/profile/'.$user->username);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tweet= tweets::find($id);
        $user = Auth::user();
        return view('tweets.edit', ['tweet' => $tweet, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request-> validate([
            'text' => 'required|max:25'
        ]);

        $tweet = Tweets::find($id);
        $tweet->text = $request->text;
        $tweet->save();

        return redirect("/home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tweets::where(['id' => $id])->delete();
        $user = Auth::user();
        return redirect('/profile/'.$user->username);
    }

}
