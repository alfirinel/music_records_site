<?php

namespace App\Http\Controllers\Audio;

use App\Model\Album;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class AlbumController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::paginate(10);
        \Auth::user()->albums;
        return view('audio.album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('audio.album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\FormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\FormRequest $request)
    {
        if(!$request->hasFile('img_cover')){
            return redirect()->route('album.create');
        };

        $name = $request->file('img_cover')->getClientOriginalName();
        $path = $request->file('img_cover')
                ->move("images\cover\\".date('Y-m-d'), $name);

        $album = $request->user()->albums()->create([
            'name'=> (trim($request['name'])),
            'img_path'=>$path->getPathname(),
            'date_release'=>$request['date'],
        ]);

        return redirect()->route('album.show', $album );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        $tracks = $album->tracks;
        return view('audio.album.show', compact('album', 'tracks'));
    }

    /**
     * @param Album $album
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function edit(Album $album)
    {
        return view('audio.album.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Requests\FormRequest $request
     * @param Album $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        if($request->hasFile('img_path')){
            $name = $request->file('img_path')->getClientOriginalName();
            $path = $request->file('img_path')->move("images\cover\\".date('Y-m-d'), $name);
        };
        $album->name = $request->name;
        $album->img_path = $path->getPathname();
        $album->date_release = $request->date_release;
        $album->save();
        return redirect()->route('album.show', $album);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $this->authorize('destroy', $album);
        $album->delete();
        return redirect()->route('album.index');
    }
}
