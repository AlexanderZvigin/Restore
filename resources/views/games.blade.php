@extends('app')
@section('title')Страница игр@endsection
@section('content')
@foreach($data as $game)
<div class="inline">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$game->name}}</h5>
    <p class="card-text">Описание</p>
    {{$game->id}}
    <a href="{{route('currentGame',$game->id)}}" class="btn btn-primary">Переход куда-нибудь</a>
  </div>
</div>
</div>
@endforeach

@endsection
