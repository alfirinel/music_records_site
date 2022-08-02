<div class="edit-form">
    <ul>
        <li>
            <a href="{{route('user.profile.index')}}"><button type="submit" class="btn btn-success">Preferences</button></a>
        </li>
        <li>
            <a href="{{route('album.create')}}"><button type="submit" class="btn btn-success">Add an album</button></a>
        </li>
        <li>
            <a href="{{route('album.index', $user->id)}}"><button type="submit" class="btn btn-success">My albums</button></a>
        </li>
        <li>
            <a href="{{url('user/profile/close-account')}}"><button type="submit" class="btn btn-success">Close Account</button></a>
        </li>
    </ul>
</div>