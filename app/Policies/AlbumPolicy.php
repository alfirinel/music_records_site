<?php

namespace App\Policies;

use App\Model\Album;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AlbumPolicy
{
    use HandlesAuthorization;


    public function destroy(User $user, Album $album){

        return $user->id === $album->user_id;
    }

}
