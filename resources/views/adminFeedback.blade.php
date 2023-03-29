@extends('layouts.adminLayout')
@section('title')Страница администрирования обратной связи@endsection
@section('content')
@if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
@endif
@foreach($data as $datastring)
<div class="card">
  <div cWWlass="card-header">
    <h3>email пользователя:{{$datastring->email}}</h3>
  </div>
  <div class="card-body">
    <p class="card-text">Обращение создано:{{$datastring->created_at}}</p>
    <p class="card-text">Последнее обновление:{{$datastring->updated_at}}</p>
    <p class="card-text">Текст обращения::{{$datastring->message}}</p>
    <a href="{{route('ChangeNews',$datastring->id)}}" class="btn btn-primary">Ответить</a>
    <a href="{{route('DeleteFeedback',$datastring->id)}}" class="btn btn-danger">Удалить</a>
    <img src="...." alt="здесь могла быть ваша реклама">
  </div>
</div>
@endforeach
@endsection
