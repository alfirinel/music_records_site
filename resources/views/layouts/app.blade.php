<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Laravel</title>
</head>
@if (Auth::guest())
    <div class="nav">
        <a href="{{url('/')}}" class="logo"><img src="/images/logo.png" alt="logo" class="logo"/></a>
        <div class=nav-right">
            <a class="active" href="{{url('/')}}">Releases</a>
            <a href="{{ url('artists') }}">Artists</a>
            <a href="{{ url('news') }}">News</a>
            <a href="{{ route('user.profile.index') }}">Personal account</a>
        </div>
    </div>
        @yield('content')
@else
    <div class="nav">
        <a href="{{url('/')}}" class="logo"><img src="/images/logo.png" alt="logo" class="logo"/></a>
        <div class="nav-right">
            <a class="active" href="{{url('/')}}">Releases</a>
            <a href="{{ url('artists') }}">Artists</a>
            <a href="{{ url('news') }}">News</a>
            <a href="{{ route('user.profile.index')}}">Personal account</a>
            <a href="{{ url('/logout') }}">Logout</a>
        </div>
    </div>

@yield('content')
@endif
