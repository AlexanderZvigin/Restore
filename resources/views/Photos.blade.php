@extends('app')
@section('title')Страница Фоток@endsection
@section('content')
<div class="row">
   <div class="col">
       @foreach($photos as $photo)
  <img style="margin-top:10px" width="400px" height="200px" src="storage/images/{{$photo->Filename}}">
  @endforeach
   </div>


</div>


    <!-- Modal 2 -->

    <!-- Modal 3 -->

<!--<img width="" src="storage/images/{{$photo->Filename}}">!-->

@endsection
