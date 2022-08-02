@extends('app')
@section('title')Страница фильмов@endsection
@section('content')
@foreach($data as $film)
<div class="inline">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$film->Name}}</h5>
    <p class="card-text">{{$film->Director}}</p>
      <p class="card-text">Дата выхода:{{$film->Date}}</p>
    <a href="{{route('currentFilm',$film->id)}}" class="btn btn-primary">Переход куда-нибудь</a>
  </div>
</div>
</div>
@endforeach
@endsection
