@if (count($tracks)>0)
    <div class="container mt-3">
        <div class="card" style="width: 460px">
            <div class="card-body">
                <div class="panel-body">
                    <table class="table-con">
                        <thead>
                        <tr>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tracks as $track)
                            <tr>
                                <td>
                                    <div class="table-text">{{ $track->name}}</div>
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


                                        <i class="fa fa-btn fa-edit"></i>Edit

                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('track.destroy', $track->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}


                                        <i class="fa fa-btn fa-trash"></i>Удалить

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