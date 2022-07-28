@extends('layouts.app')

@section('content')
    <div class="overlay">

        <form action="{{ route('user.profile.update', $user->id) }}" method="POST" >
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="con">
                <div class="field-set">
                    <h2>Profile</h2>
            <textarea class="form-input" id="profile" name="profile" placeholder="Write something.." style="height:200px">{{ $user->profile }}</textarea>


            <input class="form-input" type="text" id="website" name="website"  value="{{ $user->website }}" placeholder="Website">


            <input class="form-input" type="text" id="twitter" name="twitter" value="{{ $user->twitter }}" placeholder="Twitter">


            <input class="form-input" type="text" id="instagram" name="instagram" value="{{ $user->instagram }}" placeholder="Instagram">


            <input class="form-input" type="text" id="facebook" name="facebook" value="{{ $user->facebook }}" placeholder="Facebook">

                    <button class="log-in"> Edit </button>
            </div>
            </div>
        </form>

    </div>
@endsection
