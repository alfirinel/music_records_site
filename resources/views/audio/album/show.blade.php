@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.profileMenu')
        <div class="profile">
            <div class="album-con">
                <div class="card-body">
                    <img class="cover" src="/{{ $album->img_path }}" alt="cover">
                    <h4 class="card-title">{{ $album->name }}</h4>
                    <p class="card-text">{{ $album->getDateRelease() }}</p>
                    <div class="d-flex flex-row-reverse">
                        <form action="{{ route('album.edit', $album) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('GET') }}
                            <button type="submit">
                                <i class="fa fa-btn fa-edit"></i>Edit
                            </button>
                        </form>
                        <form action="{{ route('album.destroy', $album) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit">
                                <i class="fa fa-btn fa-trash"></i>Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('track.store') }}"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $album->id }}">

                <div class="form-group{{ $errors->has('audio') ? ' has-error' : '' }}">
                    <label for="file" class="col-md-4 control-label">Select a music track:</label>

                    <div class="col-md-6">
                        <input id="file" type="file" class="form-control" name="audio">

                        @if ($errors->has('audio'))
                            <span class="help-block">
                                <strong>{{ $errors->first('audio') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-music"></i> Add track
                        </button>
                    </div>
                </div>
            </form>
            @include('audio.track.show')
        </div>
    </div>
    </div>

@endsection
