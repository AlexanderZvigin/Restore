@extends('layouts.adminLayout')
@section('title')Страница добавления новостей@endsection
@section('content')
<form method="post" action="{{route('AddNews')}}">
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
    <label for="exampleInputEmail1">Заголовок</label>
    <input name="header" type="text" class="form-control"   placeholder="Заголовок">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Текст</label>
    <textarea name="text" rows="25" type="textarea" class="form-control" id="" placeholder="Текст"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
@endsection