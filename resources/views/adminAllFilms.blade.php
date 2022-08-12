@extends('layouts.adminLayout')
@section('title')Страница администрирования фильмов@endsection
@section('content')
@foreach($data as $film)
<div class="card">
  <div class="card-header">
    {{$film->title}}
  </div>
  <div class="card-body">
    <h5 class="card-title">Режиссер:{{$film->Director}}</h5>
    <p class="card-text">{{$film->Description}}</p>
    <p class="card-text">Дата выхода:{{$film->Date}}</p>
    <a href="{{route('filmEdit',$film->id)}}" class="btn btn-primary">Редактировать</a>
  </div>
</div>
@endforeach
@endsection
