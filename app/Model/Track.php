<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'path',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
