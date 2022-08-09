@extends('layouts.adminLayout')
@section('title')Страница добавления игры@endsection
@section('content')
<div class="center">
<form method="post" action="{{route('GameSave')}}">
  @csrf
  @if($errors->any())
  @foreach($errors->all() as $error)
  <div class="alert alert-danger">
    {{$error}}
</div>
  @endforeach
  @endif
  @if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
  @endif
  <div class="form-group">
    <label for="exampleInputEmail1">Название игры:</label>
    <input name="name"  class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Дата выхода:</label>
    <input name="outdate" class="form-control"  placeholder="Дата выхода">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Разработчики:</label>
    <input name="Developers"  class="form-control" placeholder="Дата выхода">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Платформа:</label>
    <input name="platform" class="form-control" placeholder="Платформа">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Описание:</label>
    <textarea  name="description" class="form-control" placeholder="Описание">
</textarea>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
