@extends('layouts.adminLayout')
@section('title')Страница редактирования фильма@endsection
@section('content')
<div class="center">
<form method="post" action="{{route('filmChange',$film->id)}}">
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
    <input value="{{$film->title}}" name="title"  class="form-control"  >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Дата выхода:</label>
    <input name="outdate" value="{{$film->Date}}" class="form-control"  placeholder="Дата выхода">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Режиссер</label>
    <input name="director" value="{{$film->Director}}" class="form-control" placeholder="Режиссер">
  </div>
<div class="form-group">
  <label for="exampleInputPassword1">Описание</label>
  <textarea style="height:100px;" name="description" value="{{$film->Description}}" class="form-control" placeholder="Дата выхода">
    {{$film->Description}}
</textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
