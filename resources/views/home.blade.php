@extends('layouts.app')

@section('content')
    @foreach($albums as $album)
        <div class="gallery">
            <a href="{{route('artists.show', $album->user_id)}}">
                <img class="cover" src="\{{ $album->img_path }}" alt="cover">
            </a>
        </div>
    @endforeach
@endsection
