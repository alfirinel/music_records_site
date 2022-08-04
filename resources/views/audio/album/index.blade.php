@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.profileMenu')
        <div class="profile">
            <table class="album">
                <thead>
                <tr>
                    <th>{{trans('index.cover')}}</th>
                    <th>{{trans('index.name_album')}}</th>
                    <th>{{trans('index.release_date')}}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($albums as $album)
                    <tr>
                        <td><img class="cover" src="{{ $album->img_path }}" alt="cover"></td>
                        <td><h4>{{ $album->name }}</h4></td>
                        <td><p>{{ $album->date_release }}</p></td>
                        <td><a href="{{ route('album.show', $album) }}" class="btn btn-primary">{{trans('index.see_album')}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
