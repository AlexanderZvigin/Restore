@extends('layouts.adminLayout')
@section('title')Страница администрирования новостей@endsection
@section('content')
@if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
@endif
@foreach($data as $datastring)
<div class="card">
  <div cWWlass="card-header">
    <h3>{{$datastring->header}}</h3>
  </div>
  <div class="card-body">
    <h6 class="card-title">Дата:</h6>     
    <p class="card-text">Создана:{{$datastring->created_at}}</p>
    <p class="card-text">Последнее обновление:{{$datastring->updated_at}}</p>
    <a href="{{route('ChangeNews',$datastring->id)}}" class="btn btn-primary">Редактировать</a>
    <a href="{{route('DeleteNews',$datastring->id)}}" class="btn btn-danger">Удалить</a>
    <img src="...." alt="здесь могла быть ваша реклама">
  </div>
</div>
@endforeach
@endsection