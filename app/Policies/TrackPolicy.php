<?php

namespace App\Policies;

use App\Model\Track;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TrackPolicy
{
    use HandlesAuthorization;


    public function destroy(User $user, Track $track)
    {
        return $user->id === $track->album->user_id;
    }

}
