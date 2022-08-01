@extends('layouts.app')

@section('content')
    {{ dump($errors->all()) }}
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ route('album.update', $album->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Title album:</label>

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
                                <label for="date" class="col-md-4 control-label">Year issue:</label>

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

                                <label class="col-md-4 control-label">Album cover:</label>
                                <div class="col-md-6">
                                    <div class="card">
                                        <img class="card-img-bottom" src="\{{ $album->img_path }}" alt="Card image"
                                             style="width:100%">
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
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-music"></i> Update
                                    </button>
                                    <a href="{{ url()->previous() }}"><button type="button" class="btn btn-default">Cancel</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

{{--        <div class="container mt-3">--}}
{{--            <div class="card-body">--}}
{{--                <a data-bs-toggle="modal" data-bs-target="#trackModal">--}}
{{--                    <button type="button" class="btn btn-outline-light text-dark">--}}
{{--                        <i class="fa fa-btn fa-plus"></i>Add track--}}
{{--                    </button>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <!-- The Modal -->--}}
{{--            <div class="modal" id="trackModal">--}}
{{--                <div class="modal-dialog modal-dialog-centered">--}}
{{--                    <div class="modal-content">--}}

{{--                        <!-- Modal Header -->--}}
{{--                        <div class="modal-header">--}}

{{--                        </div>--}}

{{--                        <!-- Modal body -->--}}

{{--                        <form class="form-horizontal" role="form" method="POST" action="{{ route('track.store') }}"--}}
{{--                              enctype="multipart/form-data">--}}
{{--                            {{ csrf_field() }}--}}
{{--                            <input type="hidden" name="id" value="{{ $album->id }}">--}}

{{--                            <div class="form-group{{ $errors->has('audio') ? ' has-error' : '' }}">--}}
{{--                                <label for="file" class="col-md-4 control-label">Choice a music track:</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="file" type="file" class="form-control" name="audio">--}}

{{--                                    @if ($errors->has('audio'))--}}
{{--                                        <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('audio') }}</strong>--}}
{{--                                    </span>--}}
{{--                                        <script>--}}
{{--                                            $(function() {--}}
{{--                                                $('#trackModal').modal('modal');--}}
{{--                                            });--}}
{{--                                        </script>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Modal footer -->--}}
{{--                            <div class="modal-footer">--}}
{{--                                <div class="form-group">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <button type="submit" class="btn btn-primary">--}}
{{--                                            <i class="fa fa-btn fa-music"></i> Add track--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div> </div>--}}