@extends('app')
@section('title')Обратная связь @endsection
  @section('content')
<h1>Cтраница обратной связи</h1>

<form method="post" action="{{route('feedback')}}">
@csrf
</div>
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
<div class="container">
  <div class="row">
    <div class="col">
    <form>
    <div class="col">
  <div class="form-group">
    <label for="exampleInputEmail1">Ваш email:</label>
    <input type="text" class="form-control w-75" name="name" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Текст обращения:</label>
    <textarea name="message" type="text" class="form-control w-75"></textarea>
  </div>
  <button type="submit" class=" w-75 btn btn-primary">Отправить</button>
</div>
</form>
    </div>
    <div class="col">
    <img class="rounded-circle" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"></div>
    </div>
    <div class="col">
        Мы постараемся ответить в самые ближайшие сроки!
    </div>
  </div>

            @endsection
