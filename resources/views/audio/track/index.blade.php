@extends('layouts.app')

@section('content')
    <a href="{{ route('album.create') }}"><button type="submit"  class="btn btn-outline-secondary">Add album</button></a>
   @foreach($albums as $album)
       <div class="container mt-3">
           <div class="card" style="width:400px">
               <div class="card-body">
                   <img class="cover" src="{{ $album->img_path }}" alt="Card image">
                   <h4 class="card-title">{{ $album->name }}</h4>
                   <p class="card-text">{{ $album->date_release }}</p>
                   <a href="{{ route('album.show', $album) }}">See album</a>
               </div>
           </div>
       </div>
   @endforeach

@endsection