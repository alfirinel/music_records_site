@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.profileMenu')
        <div class="profile">
            <form class="form-horizontal" role="form" method="POST"
                  action="{{ route('album.update', $album->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">{{trans('index.title')}}:</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name"
                               value="{{ $album->name }}" required>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('date_release') ? ' has-error' : '' }}">
                    <label for="date" class="col-md-4 control-label">{{trans('index.release_date')}}:</label>

                    <div class="col-md-6">
                        <input id="date" type="date" class="form-control" name="date_release"
                               value="{{ old('date_release', $album->date_release) }}">

                        @if ($errors->has('date_release'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('date_release') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('img_path') ? ' has-error' : '' }}">

                    <label class="col-md-4 control-label">{{trans('index.cover')}}:</label>
                    <div class="col-md-6">
                        <div class="card">
                            <img class="cover" src="\{{ $album->img_path }}" alt="Card image">
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>

                <div class="form-group{{ $errors->has('img_path') ? ' has-error' : '' }}">
                    <label for="file" class="col-md-4 control-label"></label>
                    <div class="col-md-6">
                        <input id="file" type="file" class="form-control" name="img_path"
                               value="\{{ old('img_path', $album->img_path) }}">

                        @if ($errors->has('img_path'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('img_path') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button class="profileButton">
                            <i class="fa fa-btn fa-music"></i> {{trans('index.update')}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

