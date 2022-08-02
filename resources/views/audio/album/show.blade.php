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
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#trackModal">
                <button type="button" class="btn btn-outline-light text-dark">
                    <i class="fa fa-btn fa-plus"></i>Add track
                </button>
            </a>
        </div>
        <!-- The Modal -->
        <div class="modal" id="trackModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">

                    </div>

                    <!-- Modal body -->

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('track.store') }}"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $album->id }}">

                        <div class="form-group{{ $errors->has('audio') ? ' has-error' : '' }}">
                            <label for="file" class="col-md-4 control-label">Choice a music track:</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="audio">

                                @if ($errors->has('audio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('audio') }}</strong>
                                    </span>
                                    <script>
                                        $(function() {
                                            $('#trackModal').modal('modal');
                                        });
                                    </script>
                                @endif
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-music"></i> Add track
                                    </button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    @include('audio.track.show')
@endsection
