<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function follows($username)
    {
        // Find the User. Redirect if the User doesn't exist
        $user = User::where('username', $username)->firstOrFail();
    // Find logged in User
        // $id = Auth::id();
        $id = Auth::id();
        $me = User::find($id);
        $me->following()->attach($user->id);
        return redirect('/profile/' . $username);
    }
    public function unfollows($username)
    {
        // Find the User. Redirect if the User doesn't exist
        $user = User::where('username', $username)->firstOrFail();
    // Find logged in User
        $id = Auth::id();
        $me = User::find($id);
        $me->following()->detach($user->id);
        return redirect('/profile/' . $username);
    }

}
