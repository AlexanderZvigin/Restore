@extends('layouts.adminLayout')
@section('title')Страница добавления критика@endsection
@section('content')
<div class="center">
<form method="post" action="{{route('CriticSave')}}">
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
    <label for="exampleInputEmail1">Псевдоним:</label>
    <input name="username"  class="form-control"  >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль:</label>
    <input type="password" name="password" class="form-control"  placeholder="Пароль">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Электронная почта:</label>
    <input name="email"  class="form-control" placeholder="Электронная почта">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
