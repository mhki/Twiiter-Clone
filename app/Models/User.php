<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
 
    
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'about',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



/**
 * The following that belong to the user.
 */
    public function following()
    {
        return $this->belongsToMany('App\Models\User', 'followers', 'follower_user_id', 'user_id')->withTimestamps();
    }
    
    public function isFollowing(User $user)
    {
        return !is_null($this->following()->where('user_id', $user->id)->first());
    }

    /**
  * The followers that belong to the user.
  */
    public function followers()
    {
        return $this->belongsToMany('App\Models\User', 'followers', 'user_id', 'follower_user_id')->withTimestamps();
    }

    public function comments(){
        return $this->hasMany('\App\Models\comments');
    }

    public function tweets(){
        return $this->hasMany('\App\Models\tweets');
    }
    
}
