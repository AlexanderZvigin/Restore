@extends('layouts.adminLayout')
@section('title')Страница администрирования фильмов@endsection
@section('content')
@if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
@endif
@foreach($data as $film)
<div class="card">
  <div class="card-header">
    {{$film->title}}
  </div>
  <div class="card-body">
    <h5 class="card-title">Режиссер:{{$film->Director}}</h5>
    <p class="card-text">{{$film->title}}</p>
    <p class="card-text">Дата выхода:{{$film->Date}}</p>
    <a href="{{route('filmEdit',$film->id)}}" class="btn btn-primary">Редактировать</a>
    <a href="{{route('FilmDelete',$film->id)}}" class="btn btn-danger">Удалить</a>
    <img src="...." alt="здесь могла быть ваша реклама">
  </div>
</div>
@endforeach
@endsection
