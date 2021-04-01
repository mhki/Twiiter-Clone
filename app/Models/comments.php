<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    public function tweets(){
        return $this->belongsTo('\App\Models\tweets');
    }

    public function user(){
        return $this->belongsTo('\App\Models\User');
    }

    protected $fillable = [
        'user_id',
        'text',
        'tweets_id'
    ];

}
