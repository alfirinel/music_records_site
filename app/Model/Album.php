<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name',
        'img_path',
        'date_release',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tracks(){
        return $this->hasMany(Track::class);
    }
}
