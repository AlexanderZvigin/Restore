@extends('app')
@section('title')Страница Регистрации@endsection
@section('content')
<main class="form-signin w-50 m-auto">
  <form action="{{route('reg-form')}}" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Адрес электронной почты</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="пароль">
      <label for="floatingPassword">Пароль</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Регистрация</button>
      <div class="form-floating">
        <a href="auth">Авторизация</a>
      </div>

  </form>
</main>

<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js?v=52" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

@endsection
