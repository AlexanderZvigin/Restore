@extends('app')
@section('title')Страница авторизации@endsection
@section('content')


<main class="form-signin w-50 m-auto">
  <form action="auth/submit">
    <h1 class="h3 mb-3 fw-normal">Авторизация</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Адрес электронной почты</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="пароль">
      <label for="floatingPassword">Пароль</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
      <div class="form-floating">
        <a href="reg">Регистрация</a>  
      </div>

  </form>
</main>

<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js?v=52" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

@endsection
