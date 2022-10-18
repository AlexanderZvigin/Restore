@extends('app')
@section('title')Страница текущего фильма@endsection
@section('content')
<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">

						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul>

					</div>

					<div class="details col-md-6">
						<h3 class="product-title">{{$film->title}}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>

							<span class="review-no">Сюда вставить количество ревью</span>
						</div>
						<p class="product-description"></p>
						<p class="vote"><strong>Рейтинг:</strong></strong></p>
            	<p class="vote"><strong>Режиссер:</strong>{{$film->Director}} </strong></p>
                <p class="vote"><strong>Дата выхода:</strong>{{$film->Date}} </strong></p>
                  <p class="vote"><strong>Описание:</strong>{{$film->Description}} </strong></p>
 <img src="..." alt="Здесь могла быть ваша реклама">

						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="inline">

		<section class="gradient-custom">
		  <div class="container my-5 py-5">

		    <div class="row d-flex justify-content-center">
		      <div class="col-md-12 col-lg-10 col-xl-8">
		        <div class="card">
		          <div class="card-body p-4">
		            <h4 class="text-center mb-4 pb-2">Отзывы пользователей</h4>

		            <div class="row">
		              <div class="col">
		                <div class="d-flex flex-start">
								@foreach($FilmComments as $comment)
		                  <div class="flex-grow-1 flex-shrink-1">
		                    <div>
		                      <div class="d-flex justify-content-between align-items-center">
		                        <p class="mb-1">
		                         <strong>{{$comment->username}}</strong>
		                        </p>
		                      </div>
													<div class="text-break">
		                      <p class="small mb-0">
		                       {{$comment->comment}}
		                      </p>
												</div>
													<p class="small mb-0">
		                       <strong>Моя оценка фильму:{{$comment->score}}</strong>
		                      </p>
		                    </div>
	<br>
	@endforeach
	<div align="center">
		@if(!Auth::user())
		Оставлять свои отзывы могут только авторизованные пользователи,пожалуйста
		войдите в свой аккаунт или зарегистрируйтесь
		@endif
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
	@if(Auth::user())
	<form action="{{route('CommentSave',$film->id)}}" method="post">
		@csrf
<p>Оставить отзыв:</p>
		<textarea name="comment" style="width:100%"></textarea>
	Ваша оценка фильму:	<select name="rating">Ваша оценка фильму:
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		</select>
  <button  type="submit"class="btn btn-primary">Отправить</a>
</form>
	@endif
	</div>
		  </div>

		</section>

	</div>

  </body>
</html>
@endsection
