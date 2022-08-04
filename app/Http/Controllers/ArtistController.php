<?php

namespace App\Http\Controllers;

use App\Model\Album;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users = User::all();
        $users = User::has('albums', '>', 0)->get();
        return view('artists.index',['users' => $users]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $artists)
    {
        //$artists пользователь для которого отображается страница(исполнитель)
        $albums = $artists->albums;
        return view('artists.artist', ['users' => $artists, 'albums' => $albums]);//ключ users сменить artist
    }
}
