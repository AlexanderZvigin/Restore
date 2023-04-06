@extends('layouts.adminLayout')
@section('title')Страница загрузки фото @endsection
@section('content')
<form method="post" enctype="multipart/form-data" action="{{route('FileSave')}}">
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
    <label for="exampleInputEmail1">Выберите файл:</label>
    <input type="file" name="file"  class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
