@extends('layouts.app')

@section('content')
    <div class="overlay">
        <div class="artists-con">
            <div class="con">
                <img src='/images/profilePhoto/{{$users->img_path}}'/>
                <h2>{{ $users->first_name }} {{ $users->last_name }}</h2>
                <div>
                    @if (!$users->website == 0)
                        <a href="{{$users->website}}">Website</a>
                    @endif
                    @if (!$users->twitter == 0)
                        <a href=" {{$users->twitter}}">
                            <i class="fa fa-twitter"></i>
                        </a>
                    @endif
                    @if (!$users->instagram == 0)
                        <a href=" {{$users->instagram}}">
                            <i class="fa fa-instagram"></i>
                        </a>
                    @endif
                    @if (!$users->facebook == 0)
                        <a href=" {{$users->facebook}}">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    @endif
                </div>
            </div>
            <p>{{$users->profile}}</p>
        </div>
    </div>
@endsection
