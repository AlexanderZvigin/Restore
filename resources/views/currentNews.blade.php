@extends('app')
@section('title')Страница текущих новостей@endsection
@section('content')
<article class="blog-post">
        <h2 class="blog-post-title">{{$News->header}}</h2>
        <p class="blog-post-meta">{{$News->created_at}}</p>
        <p>{{$News->text}}</p>
        <hr>
@endsection
