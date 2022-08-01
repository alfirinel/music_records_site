@extends('layouts.app')

@section('content')
    <div class="overlay">
        @if (count($users) > 0)
            <div class="artists-con">
                @foreach ($users as $user)
                    <div class="con">
                        <a href="{{route('artists.show', $user->id)}}">{{ $user->first_name }} {{$user->last_name}}/</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
