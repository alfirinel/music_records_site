@if (count($tracks)>0)
    <div class="container mt-3">
        <div class="card" style="width:400px">
            <div class="card-body">
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <tr>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($tracks as $track)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $track->name}}</div>
                                    </td>
                                    <td>
                                        <audio controls muted>
                                            <source src="\{{ $track->path }}" type="audio/mpeg">
                                        </audio>
                                    </td>

                                    <td>
                                        <form action="{{ route('track.edit', $track->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('GET') }}

                                            <button type="submit" class="btn btn-edit btn-outline-warning">
                                                <i class="fa fa-btn fa-edit"></i>Edit
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('track.destroy', $track->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Удалить
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endif