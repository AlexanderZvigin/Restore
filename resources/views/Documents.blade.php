@extends('app')
@section('title')Документы школы@endsection
@section('content')
<h2>Документы ОГЭ/ЕГЭ:</h2>
<div class="list-group">
  <a href="{{route('getDocument',$name='reglamentEGE.docx')}}" class="list-group-item list-group-item-action">
    Правила проведения ЕГЭ
  </a>
  <a href="{{route('getDocument',$name='OGE.docx')}}" class="list-group-item list-group-item-action">Правила проведения ОГЭ</a>
  <a href="{{route('getDocument',$name='reglamentOGE.docx')}}" class="list-group-item list-group-item-action">Регламент ОГЭ</a>
  <a href="{{route('getDocument',$name='reglamentEGE.docx')}}" class="list-group-item list-group-item-action">Регламент ЕГЭ</a>
  <a href="{{route('getDocument',$name='important.docx')}}" class="list-group-item list-group-item-action">Постановление администрации города курорта о правилах проведения ЕГЭ в 2023-2024</a>
</div>
@endsection
