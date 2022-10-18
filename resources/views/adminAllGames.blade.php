@extends('layouts.adminLayout')
@section('title')Страница администрирования игр@endsection
@section('content')
@if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
@endif
@foreach($data as $game)
<div class="card">
  <div class="card-header">
    {{$game->name}}
  </div>
  <div class="card-body">
    <h5 class="card-title">Дата выхода:{{$game->OutDate}}</h5>
    <p class="card-text">{{$game->Developers}}</p>
    <p class="card-text">Дата выхода:{{$game->Platform}}</p>
    <a href="" class="btn btn-primary">Редактировать</a>
    <a href="" class="btn btn-danger">Удалить</a>
    <img src="...." alt="здесь могла быть ваша реклама">
  </div>
</div>
@endforeach
@endsection
