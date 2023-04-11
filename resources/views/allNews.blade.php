@extends('app')
@section('title')Страница текущих новостей@endsection
@section('content')

<div>
  @foreach($data as $news)
<div class="row mb-2">
   <div class=" w-35 col-md-10">
     <div class=" w-100 row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
       <div class="col p-4 d-flex flex-column position-static">
         <h3 class="mb-0">{{$news->header}}</h3>
         <div class="mb-1 text-muted">{{$news->updated_at}}</div>
         <a href="{{route('getCurrentNews',$news->id)}}" class="stretched-link">Продолжить чтение</a>
       </div>
       <div class="col-auto d-none d-lg-block">
         <svg class="bd-placeholder-img" width="200" height="250"   preserveaspectratio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title>

       </div>
     </div>
   </div>
 </div>
   @endforeach
    {{$data->links()}}

   @endsection
