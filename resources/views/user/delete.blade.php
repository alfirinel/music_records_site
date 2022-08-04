@extends('layouts.app')
@section('content')
    @if (count($users) > 0)
        @foreach ($users as $user)
        @endforeach
    @endif
    <div class="container">
        @include('includes.profileMenu')
        <div class="profile">
            <h2>{{trans('index.closeAccount')}}</h2>
            <form action="{{ route('user.profile.destroy', $user->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="con">
                    <div class="field-set">
                        <div>
                            <p>{{trans('index.closeAccountInfo')}}</p>
                            <br>
                            <p>{{trans('index.permanently_delete')}}</p>
                            <input class="profile-input" type="text" id="closeAccount" name="closeAccount">
                        </div>

                        <input type="submit" id="closeButton" value="{{trans('index.closeAccount')}}" disabled>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(function () {
            var button = $('#closeButton');

            $('#closeAccount').bind('input', function (e) {
                var $this = $(this);

                if ($this.val() == 'permanently delete' || $this.val() == 'удалить навсегда') {
                    console.log($this.val());
                    button.removeAttr('disabled');
                } else {
                    button.attr('disabled', true);
                }
            });

            button.bind('click', function (e) {
                var $this = $(this);

            });
        });
    </script>
@endsection
