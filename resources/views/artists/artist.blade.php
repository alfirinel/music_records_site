@extends('layouts.app')

@section('content')
    <div class="overlay">
        <div class="artists-con">
            <div class="con">
                <h2>{{ $users->first_name }} {{ $users->last_name }}</h2>
                <div>
                    <a href="{{$users->website}}">Website</a>
                    <a href=" {{$users->twitter}}">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="{{$users->instagram}}">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="{{$users->facebook}}">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </div>
            </div>
            <p>{{$users->profile}}</p>
        </div>
    </div>
@endsection
