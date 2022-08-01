@extends('layouts.app')

@section('content')
    <a href="{{ route('album.create') }}">
        <button type="submit" class="btn btn-outline-secondary">Add album</button>
    </a>

    <div class="container mt-3">
        <div class="card" style="width:400px">
            <div class="card-body">
                <img class="card-img-bottom" src="/{{ $album->img_path }}" alt="Card image" style="width:100%">
                <h4 class="card-title">{{ $album->name }}</h4>
                <p class="card-text">Data release: {{ $album->date_release }}</p>
            </div>
            <div class="d-flex flex-row-reverse">
                <form action="{{ route('album.edit', $album) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('GET') }}
                    <button type="submit" class="btn btn-edit btn-outline-warning">
                        <i class="fa fa-btn fa-edit"></i>Edit
                    </button>
                </form>
                <form action="{{ route('album.destroy', $album) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-delete btn-outline-danger">
                        <i class="fa fa-btn fa-trash"></i>Delete
                    </button>
                    <button type="button" class="btn btn-default"><a href="{{ url()->previous() }}">Cancel</a> </button>
                </form>
            </div>
        </div>
    </div>

    @include('audio.track.show')
@endsection
