<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials.guru.header')
</head>
<body>
  @include('partials.guru.navbar')
  @include('partials.guru.sidebar')
  
  @yield('content')
  
  @include('partials.guru.footer')
</body>
</html>