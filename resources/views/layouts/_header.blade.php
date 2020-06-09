<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('home') }}"><img alt="Brand" src="{{ asset('img/img-017.png') }}"></a>
    </div>
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('signup') }}">注册</a></li>
    </ul>
  </div>
</nav>
