<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = [
        'name',
        'track',
    ];

    public function user(){
        return $this->belongsTo(Album::class);
    }
}
