@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.profileMenu')
        <div class="profile">
            <table class="album">
                <thead>
                <tr>
                    <th>Cover</th>
                    <th>Name</th>
                    <th>Release date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($albums as $album)
                    <tr>
                        <td><img class="cover" src="{{ $album->img_path }}" alt="cover"></td>
                        <td><h4>{{ $album->name }}</h4></td>
                        <td><p>{{ $album->getDateRelease() }}</p></td>
                        <td><a href="{{ route('album.show', $album) }}" class="btn btn-primary">See album</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
