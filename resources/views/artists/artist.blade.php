@extends('layouts.app')

@section('content')
    <div class="overlay">
        <div class="artists-con">
            @if (!$artist->img_path == 0)
                <img src='/images/profilePhoto/{{$artist->img_path}}' class="artistPhoto"/>
            @endif
            <div class="con">
                <h2>{{ $artist->first_name }} {{ $artist->last_name }}</h2>
                <div>
                    @if (!$artist->website == 0)
                        <a href="{{$artist->website}}">Website</a>
                    @endif
                    @if (!$artist->twitter == 0)
                        <a href=" {{$artist->twitter}}">
                            <i class="fa fa-twitter"></i>
                        </a>
                    @endif
                    @if (!$artist->instagram == 0)
                        <a href=" {{$artist->instagram}}">
                            <i class="fa fa-instagram"></i>
                        </a>
                    @endif
                    @if (!$artist->facebook == 0)
                        <a href=" {{$artist->facebook}}">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    @endif
                </div>
            </div>
            <p>{{$artist->profile}}</p>
            <div>
                @foreach($albums as $album)

                        <div>
                            <img class="cover" src="/{{ $album->img_path }}" alt="cover">
                            <h4 class="card-title">{{ $album->name }}</h4>
                            <p class="card-text">{{ $album->date_release }}</p>
                            @foreach($album->tracks as $track)
                            <div>
                                <p>{{ $track->name }}</p>
                                <audio controls muted>
                                    <source src="\{{ $track->path }}" type="audio/mpeg">
                                </audio>
                            </div>
                            @endforeach
                        </div>
                    @endforeach


            </div>
        </div>
    </div>
@endsection
