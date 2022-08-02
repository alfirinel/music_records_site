@extends('layouts.app')

@section('content')
   @foreach($albums as $album)
       <div class="container mt-3">
           <div class="card" style="width:400px">
               <div class="card-body">
                   <a href="{{ route('album.show', $album) }}" class="btn btn-primary">
                   <img class="card-img-bottom" src="{{ $album->img_path }}" alt="Card image" style="width:100%">
                   </a>
                   <h4 class="card-title">{{ $album->name }}</h4>
                   <h4 class="card-title">{{ $album->user->login }}</h4>
                   <p class="card-text">Data release: {{ $album->date_release }}</p>
               </div>
           </div>
       </div>
   @endforeach

@endsection
