<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $profile)
    {
        return view('user.index')->with('user', $profile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $profile)
    {
        $this->validate($request, [
            'profile'=>'min:5',
            'website'=>'min:5',
            'twitter'=>'min:5',
            'instagram'=>'min:5',
            'facebook'=>'min:5',

        ]);

        $profile->profile = $request->profile;
        $profile->website = $request->website;
        $profile->twitter = $request->twitter;
        $profile->instagram = $request->instagram;
        $profile->facebook = $request->facebook;

        $profile->save();
        return redirect(route('user.profile.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $profile)
    {
        $profile->delete();
        return redirect(url('/'));
    }

    public function delete()
    {
        $users = User::all();
        return view('user.delete', ['users' => $users]);
    }
}
