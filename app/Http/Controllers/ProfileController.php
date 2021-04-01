<?php

namespace App\Http\Controllers;

use App\Models\tweets;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($username)
    {
        $user = User::where('username', $username)->firstOrFail();

        $followers_count =  $user->followers()->count();

        $is_edit_profile = false;
        $is_following = false;

        $tweets = tweets::all();
        
        $tweet_count = tweets::all()->count();      
        
        if (Auth::check()) {
            $is_edit_profile = (Auth::id() == $user->id);
            $me = Auth::user();
            $is_follow_button = !$is_edit_profile && !$me->isFollowing($user);
            $following_count = $is_edit_profile ? $me->following()->count() : 0;
            $is_following = !$is_edit_profile && $me->isFollowing($user);
        }
    
        return view('profile', [
        'user' => $user, 
        'followers_count' => $followers_count,
        'is_edit_profile' => $is_edit_profile, 
        'following_count' => $following_count,
        'is_following' => $is_following,
        'tweet_count' => $tweet_count,
        'is_follow_button' => $is_follow_button,
        'tweets' => $tweets
        ]);
    }
    
    public function profiles(){
        $users = User::all();
        return view('tweets.show', ['users' => $users]);
    }

    public function getIndex()
    {
        $tweets = tweets::all();
        return view('tweets.discover', ['tweets'=> $tweets]);
    }

    public function following()
    {
        $me = Auth::user();
        $followers_count = $me->followers()->count();

        $tweet_count = tweets::all()->count();

        $following_count = $me->following()->count();

        $list = $me->following()->orderBy('username')->get();

        $is_edit_profile = true;
        $is_following = false;

        return view('following', [
            'user' => $me,
            'followers_count' => $followers_count,
            'is_edit_profile' => $is_edit_profile,
            'following_count' => $following_count,
            'is_following' => $is_following,
            'list' => $list,
            'tweet_count' => $tweet_count
        ]);
    }

    public function followers($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        $followers_count =  $user->followers()->count();

        $list = $user->followers()->orderBy('username')->get();
        
        
        $tweet_count = tweets::all()->count();

        $is_edit_profile = false;
        $is_following = false;

        if (Auth::check()) {
            $is_edit_profile = (Auth::id() == $user->id);
            $me = Auth::user();
            $is_follow_button = !$is_edit_profile && !$me->isFollowing($user);
            $following_count = $is_edit_profile ? $me->following()->count() : 0;
            $is_following = !$is_edit_profile && $me->isFollowing($user);
        }

        return view('followers', [
            'user' => $user,
            'followers_count' => $followers_count,
            'is_edit_profile' => $is_edit_profile,
            'following_count' => $following_count,
            'is_follow_button' => $is_follow_button,
            'is_following' => $is_following,
            'list' => $list,
            'tweet_count' => $tweet_count
            ]);
        }
}
