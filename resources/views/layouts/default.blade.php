<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', '招聘') - Laravel 新手入门教程</title>

    <link rel="stylesheet" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

    @include('layouts._header')

    <div class="container">
      <div class="offset-md-1 col-md-10">
        @yield('content')
      </div>
    </div>

    @include('layouts._footer')
  </body>
</html>
