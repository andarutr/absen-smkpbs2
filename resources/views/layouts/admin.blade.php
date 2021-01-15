<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials.admin.header')
</head>
<body>
  @include('partials.admin.navbar')
  @include('partials.admin.sidebar')
  
  @yield('content')
  
  @include('partials.admin.footer')
</body>
</html>