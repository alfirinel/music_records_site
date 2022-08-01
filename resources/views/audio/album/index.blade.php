@extends('layouts.app')

@section('content')
    <a href="{{ route('album.create') }}"><button type="submit"  class="btn btn-outline-secondary">Add album</button></a>
   @foreach($albums as $album)
       <div class="container mt-3">
           <div class="card" style="width:400px">
               <div class="card-body">
                   <img class="card-img-bottom" src="{{ $album->img_path }}" alt="Card image" style="width:100%">
                   <h4 class="card-title">{{ $album->name }}</h4>
                   <h4 class="card-title">{{ $album->user->login }}</h4>
                   <p class="card-text">Data release: {{ $album->date_release }}</p>
                   <a href="{{ route('album.show', $album) }}" class="btn btn-primary">See album</a>
               </div>

           </div>
       </div>
   @endforeach

@endsection
{{--<ul class="pagination">--}}
{{--    <!-- Ссылка на предыдущую страницу -->--}}
{{--    @if ($paginator->onFirstPage())--}}
{{--        <li class="disabled"><span>&laquo;</span></li>--}}
{{--    @else--}}
{{--        <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>--}}
{{--    @endif--}}

{{--<!-- Элементы страничной навигации -->--}}
{{--    @foreach ($elements as $element)--}}
{{--    <!-- Разделитель "Три точки" -->--}}
{{--        @if (is_string($element))--}}
{{--            <li class="disabled"><span>{{ $element }}</span></li>--}}
{{--        @endif--}}

{{--    <!-- Массив ссылок -->--}}
{{--        @if (is_array($element))--}}
{{--            @foreach ($element as $page => $url)--}}
{{--                @if ($page == $paginator->currentPage())--}}
{{--                    <li class="active"><span>{{ $page }}</span></li>--}}
{{--                @else--}}
{{--                    <li><a href="{{ $url }}">{{ $page }}</a></li>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        @endif--}}
{{--    @endforeach--}}

{{--<!-- Ссылка на следующую страницу -->--}}
{{--    @if ($paginator->hasMorePages())--}}
{{--        <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>--}}
{{--    @else--}}
{{--        <li class="disabled"><span>&raquo;</span></li>--}}
{{--    @endif--}}
{{--</ul>--}}