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
<form action="{{url('/user/profile/language')}}" method="post">
    <select name="locale">
        <option value="en">English</option>
        <option value="ru">Русский</option>
    </select>
    {{csrf_field()}}
    <input type="submit" value="Submit">
</form>
@if (Auth::guest())
    <div class="nav">
        <a href="{{url('/')}}" class="logo"><img src="/images/logo.png" alt="logo" class="logo"/></a>
        <div class=nav-right">
            <a class="active" href="{{url('/')}}">{{trans('index.releases')}}</a>
            <a href="{{ url('artists') }}">{{trans('index.artists')}}</a>
            <a href="{{ route('user.profile.index') }}">{{trans('auth.signIn')}}</a>
        </div>
    </div>
        @yield('content')
@else
    <div class="nav">
        <a href="{{url('/')}}" class="logo"><img src="/images/logo.png" alt="logo" class="logo"/></a>
        <div class="nav-right">
            <a class="active" href="{{url('/')}}">{{trans('index.releases')}}</a>
            <a href="{{ url('artists') }}">{{trans('index.artists')}}</a>
            <a href="{{ route('user.profile.index')}}">{{trans('index.personal_account')}}</a>
            <a href="{{ url('/logout') }}">{{trans('index.logout')}}</a>
        </div>
    </div>
@yield('content')
@endif
