@extends('layouts.adminLayout')
@section('title')Страница добавления фильма@endsection
@section('content')
<div class="center">
<form method="post" action="{{route('FilmSave')}}" enctype='multipart/form-data'>
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
    <label for="exampleInputEmail1">Название фильма:</label>
    <input name="title"  class="form-control"  >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Дата выхода:</label>
    <input name="outdate" class="form-control"  placeholder="Дата выхода">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Режиссер</label>
    <input name="director"  class="form-control" placeholder="Режиссер">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Описание:</label>
    <textarea  name="description" class="form-control" placeholder="Описание">
</textarea>
<input type='file' name='image' >
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
