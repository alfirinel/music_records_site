@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal"
                              method="POST" action="{{ route('track.store') }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('audio') ? ' has-error' : '' }}">
                                <label for="file" class="col-md-4 control-label">Add track:</label>

                                <div class="col-md-6">
                                    <input id="file" type="file" class="form-control" name="audio"
                                           value="{{ old('audio') }}">

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
                                        <i class="fa fa-btn fa-music"></i> Add
                                    </button>
                                    <button type="button" class="btn btn-default"><a href="{{ url()->previous() }}">Cancel</a>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

