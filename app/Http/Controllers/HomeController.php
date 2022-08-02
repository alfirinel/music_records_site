<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Model\Album;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = \Auth::user()->albums()->orderBy('updated_at','desc')->get();
        return view('user.album', ['albums'=>$albums]);
    }

    public function artists()
    {
        $users = User::all();
        return view('artists.artists',['users' => $users]);
    }

    public function news()
    {
        return view('news');
    }

}
