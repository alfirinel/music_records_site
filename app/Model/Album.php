<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name',
        'cover',
        'year',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function track(){
        return $this->hasMany(Track::class);
    }
}
