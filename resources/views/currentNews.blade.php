@extends('app')
@section('title')Страница текущих новостей@endsection
@section('content')
<article class="blog-post">
        <h2 class="blog-post-title fs-1">{{$News->header}}</h2>
        <p class="blog-post-meta">{{$News->created_at}}</p>
        <p class="fs-2">{{$News->text}}</p>
        <hr>
@endsection
