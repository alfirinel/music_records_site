<?php

namespace App\Http\Controllers\Audio;

use App\Model\Album;
use App\Model\Track;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


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
        $albums = \Auth::user()->albums()->orderBy('updated_at','desc')->get();
        return view('user.album', ['albums'=>$albums]);
//        $user = Auth::user();
//        $albums = Auth::user()->albums;
//        return view('audio.album.index', ['user' => $user], compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('audio.album.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\FormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "string|required|max:80",
            "date" => "string|date|required",
            "img_path" => 'required|image|max:20000',
        ]);

//        dd($validator->errors());
        if ($validator->errors()) {
            return redirect()->route('album.create',[
                'errors'=>$validator->errors(),
            ]);
//                ->withErrors($validator->errors())
//                ->withInput();
        }

//        if(!$request->hasFile('img_path')){
//            return redirect()->route('album.create');
//        };

        $name = $request->file('img_path')->getClientOriginalName();
        $path = $request->file('img_path')
                ->move("images\cover\\".date('Y-m-d'), $name);

        $album = $request->user()->albums()->create([
            'name'=> (trim(strtolower($request['name']))),
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
        $user = Auth::user();
        $tracks = $album->tracks;
        return view('audio.album.show', ['user' => $user], compact('album', 'tracks'));
    }

    /**
     * @param Album $album
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function edit(Album $album)
    {
        $user = Auth::user();
        return view('audio.album.edit', ['user' => $user], compact('album'));
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
        $this->validate($request, [
            'name' => 'string| max:255',
            "date" => "string| date",
            "img_path" => 'image|max:20000',
        ]);

        if($request->hasFile('img_path')){
            $name = $request->file('img_path')->getClientOriginalName();
            $path = $request->file('img_path')
                ->move("images\cover\\".date('Y-m-d'), $name);
            $album->img_path = $path->getPathname();
        };


        $album->name = $request->name;
        $album->date_release = $request->date_release;
//        dd($request->all(), $album);
        $album->save();
        return redirect()->route('album.show', $album);

//        dd($request->file(), $album);
//        $user = Auth::user();
//        $data = $request->all();
//        $album->update($data);
//        return redirect()->route('album.index', ['user' => $user], $album);
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
