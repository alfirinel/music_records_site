<div class="edit-form">
    <ul>
        <li>
            <a href="{{route('user.profile.index')}}"><button type="submit" class="btn btn-success">{{trans('index.preferences')}}</button></a>
        </li>
        <li>
            <a href="{{route('album.create')}}"><button type="submit" class="btn btn-success">{{trans('index.album')}}</button></a>
        </li>
        <li>
            <a href="{{route('album.index', $user->id)}}"><button type="submit" class="btn btn-success">{{trans('index.myAlbum')}}</button></a>
        </li>
        <li>
            <a href="{{url('user/profile/close-account')}}"><button type="submit" class="btn btn-success">{{trans('index.closeAccount')}}</button></a>
        </li>
    </ul>
</div>