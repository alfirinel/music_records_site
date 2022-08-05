<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Model\Album;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        $users = User::all();
        return view('home', ['albums' => $albums],['users' => $users]);
    }

    public function artists()
    {
        $users = User::all();
        return view('artists.artists',['users' => $users]);
    }

}
