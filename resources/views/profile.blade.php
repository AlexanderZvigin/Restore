@extends('app')
@section('title')Страница текущей игры@endsection
@section('content')
{{ Auth::user()->name }}
{{ Auth::user()->email}}
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{Auth::user()->name}}</span><span class="text-black-50"></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Профиль</h4>
                </div>
                <form action="{{route('profileChange')}}" method="post">
                  @csrf
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Никнейм:</label><input type="text" name="username" class="form-control" placeholder="first name" value="{{Auth::user()->name}}"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Адрес электронной почты:</label><input name="email"  type="text" class="form-control" placeholder="enter phone number" value="{{Auth::user()->email}}"></div>

                </div>

                <div class="mt-5 text-center"><button type="submit" class="btn btn-primary profile-button" type="button">Сохранить изменения</button></div>
              </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Последение комментарии:</span><span class="border px-3 p-1 add-experience"></span></div><br>
                сюда комменты пользователя
        </div>
    </div>
</div>
</div>
</div>
<a class="dropdown-item" href="{{ route('logout') }}"
   onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
@endsection
