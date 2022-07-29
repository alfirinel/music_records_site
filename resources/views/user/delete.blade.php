@extends('layouts.app')

@section('content')
    @if (count($users) > 0)
        @foreach ($users as $user)
        @endforeach
    @endif
    <div class="container">

            <div class="edit-form">

                    <ul>
                        <li>
                            <a href="{{route('user.profile.index')}}">
                                <button type="submit" class="btn btn-success">Preferences</button>
                            </a>
                        </li>
                        <li>
                            <button type="submit" class="btn btn-success">Add an album</button>
                        </li>
                        <li>
                            <a href="{{url('user/profile/close-account')}}">
                                <button type="submit" class="btn btn-success">Close Account</button>
                            </a>
                        </li>
                    </ul>

            </div>
            <div class="profile">
                <h2>Close Account</h2>
                <form action="{{ route('user.profile.destroy', $user->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="con">
                        <div class="field-set">
                            <div>
                                <p>This action is irreversible. All of your information, albums, photos will be erased
                                    entirely. This does not affect your ability to re-create a brand new account in
                                    future.</p>
                                <br>
                                <p>
                                    Enter the words "permanently delete" to confirm you have acknowledged this and
                                    proceed
                                </p>
                                <input class="profile-input" type="text" id="closeAccount" name="closeAccount">
                            </div>

                            <input type="submit" id="closeButton" value="Delete Account" disabled>
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

                if ($this.val() == 'permanently delete') {
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
