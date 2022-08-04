@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.profileMenu')
        <div class="profile">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('album.store') }}"
                  enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">{{trans('index.title')}}:</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name"
                               value="{{ old('name') }}" required>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                    <label for="date" class="col-md-4 control-label">{{trans('index.release_date')}}:</label>

                    <div class="col-md-6">
                        <input id="date" type="date" class="form-control" name="date"
                               value="{{ old('date') }}">

                        @if ($errors->has('date'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('img_cover') ? ' has-error' : '' }}">
                    <label for="file" class="col-md-4 control-label">{{trans('index.cover')}}:</label>

                    <div class="col-md-6">
                        <input id="file" type="file" class="form-control" name="img_cover"
                               value="{{ old('img_cover') }}">

                        @if ($errors->has('img_cover'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('img_cover') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button class="profileButton">
                            <i class="fa fa-btn fa-music"></i> {{trans('index.create')}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

