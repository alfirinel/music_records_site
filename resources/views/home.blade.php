@extends('layouts.app')

@section('content')
    <div class="panel-body">
        @foreach($albums as $album)
            <a href="{{route('artists.show', $album->user_id)}}"><img class="cover" src="\{{ $album->img_path }}" alt="cover"></a>
        @endforeach
    </div>
@endsection
