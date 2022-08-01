@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="edit-form">
            <ul>
                <li>
                        <a href="{{route('user.profile.index')}}"><button type="submit" class="btn btn-success">Preferences</button></a>
                </li>
                <li>
                    <button type="submit" class="btn btn-success">Add an album</button>
                </li>
                <li>
                    <a href="{{url('user/profile/close-account')}}"><button type="submit" class="btn btn-success">Close Account</button></a>
                </li>
            </ul>

        </div>
            <div class="profile">
                <h2>Hello, {{ Auth::user()->first_name }}</h2>
                    <form action="{{ route('user.profile.update', $user->id) }}" method="POST" >
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="con">
                            <div class="field-set">
                                <div>
                                    <label for="profile">Bio</label>
                                    <textarea id="profile" name="profile" placeholder="Write something..">{{ $user->profile }}</textarea>
                                </div>

                                <div>
                                    <label for="website">Website</label>
                                    <input class="profile-input" type="text" id="website" name="website"  value="{{ $user->website }}">
                                </div>

                                <div>
                                    <label for="twitter">Twitter</label>
                                    <input class="profile-input" type="text" id="twitter" name="twitter" value="{{ $user->twitter }}">
                                </div>
                                <div>
                                    <label for="instagram">Instagram</label>
                                    <input class="profile-input" type="text" id="instagram" name="instagram" value="{{ $user->instagram }}">
                                </div>
                                <div>
                                    <label for="facebook">Facebook</label>
                                    <input class="profile-input" type="text" id="facebook" name="facebook" value="{{ $user->facebook }}">
                                </div>


                                <button> Save </button>
                            </div>
                        </div>
                    </form>
            </div>
    </div>
@endsection
