<!DOCTYPE html>
<html>
<head>
  <title>Main Layout</title>
  <link rel="stylesheet" media="all" href="/css/app.css">
</head>
<body>
  <div class="container">
    @include('layout.header')
  </div>
  <div class="container">
    @yield('content')
  </div>
  <div class="container">
    @include('layout.footer')
  </div>
</body>
</html>
