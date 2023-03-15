@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">МБОУ СОШ №7</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route ('Documents')}}">Документы</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route ('Documents')}}">Новости</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route ('Documents')}}">Учеба</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route ('Documents')}}">Обратная связь</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route ('Documents')}}">Доп.информация</a>
      </li>
      @if(Auth::user())
      <li class="nav-item">
        <a class="nav-link" href="{{route ('profile')}}">Профиль</a>
      </li>
      @endif
        @if(!Auth::user())
      <li class="nav-item">
        <a class="nav-link" href="login">Войти</a>
      </li>
  @endif

    </ul>
  </div>
</nav>
