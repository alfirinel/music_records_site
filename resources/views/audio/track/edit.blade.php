@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.profileMenu')
        <div class="profile">
            <div class="panel-heading">Edit track</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('track.update', $track) }}"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Track name:</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name"
                                   value="{{ $track->name }}" required>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-music"></i> Update
                            </button>
                        </div>
                    </div>
                </form>
                <a href="{{ route('album.show', $track->id) }}">
                    <button type="reset" class="btn btn-light">Cancel</button>
                </a>
            </div>
        </div>
    </div>
@endsection

