<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

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
    public function show($artists)
    {
        $users = User::find($artists);
        return view('artists.artist', ['users' => $users])->with('user', $artists);
    }
}
