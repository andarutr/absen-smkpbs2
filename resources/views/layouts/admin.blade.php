<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials.admin.header')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      @include('partials.admin.navbar')
      @include('partials.admin.sidebar')
      
      @yield('content')
      
      @include('partials.admin.footer')
</body>
</html>