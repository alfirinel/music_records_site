<?php

namespace App\Http\Controllers\Audio;

use App\Model\Album;
use App\Model\Track;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TrackController extends Controller
{

    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * @param Requests\TrackRequest $request
     */
    public function store(Requests\TrackRequest $request)
    {
        $album = Album::findOrFail($request->input('id'));
        $this->authorize('destroy', $album);
        $name = $request->file('audio')->getClientOriginalName();
        $path = $request->file('audio')->move("audio".DIRECTORY_SEPARATOR.date('Y-m-d'), $name);
        $name = pathinfo($name, PATHINFO_FILENAME);

        $album->tracks()->create([
            'name'=> (trim($name)),
            'path'=>$path,
        ]);
        return redirect()->route('album.show', $album);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Track $track
     * @return \Illuminate\Http\Response
     */
    public function edit(Track $track)
    {
        $user = Auth::user();
        return view('audio.track.edit', ['user' => $user], compact('track'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Track $track
     * @return \Illuminate\Http\RedirectResponse
     */

    public function update(Request $request, Track $track)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

//        dd($track->name,$request->name);
        $track->name = $request->name;
        $track->save();
        return redirect()->route('album.show', $track);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Track $track)
    {
        $this->authorize('destroy', $track);
        $track->delete();
        return redirect()->route('album.show' , $track->album_id);
    }
}
