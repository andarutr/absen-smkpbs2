<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="shortcut icon" type="img/x-icon" href="/img/pbs2.png">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Template CSS -->
  <link rel="stylesheet" href="/css/style2.css">
  <link rel="stylesheet" href="/css/components.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.23.0/slimselect.min.css" rel="stylesheet"></link>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>

        <ul class="navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img src="/img/pbs2.png" class="rounded-circle mr-1" width="30" height="30">
              <div class="d-sm-none d-lg-inline-block">Admin</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="/admin/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <img src="/img/pbs2.png" width="80" class="mt-4"><br>
            <a href="/admin/dashboard">Admin</a>
          </div><br><br>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/admin/dashboard">Admin</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Admin</li>
              <li class="@if($menu == 'Dashboard'){{ 'active' }}@endif"><a class="nav-link" href="/admin/dashboard"><i class="fas fa-rocket"></i> <span>Dashboard</span></a></li>
              <li class="@if($menu == 'Data Guru'){{ 'active' }}@endif"><a class="nav-link" href="/admin/data-guru"><i class="fas fa-user"></i> <span>Data Guru</span></a></li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown active" data-toggle="dropdown"><i class="fas fa-clipboard-list"></i> <span>Kelas X</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="/admin/kelas/x/animasi/">Animasi</a></li>
                  <li><a class="nav-link" href="/admin/kelas/x/akuntansi/">Akuntansi</a></li>
                  <li><a class="nav-link" href="/admin/kelas/x/perbankan-syariah/">Perbankan Syariah</a></li>
                  <li><a class="nav-link" href="/admin/kelas/x/otkp-1/">OTKP 1</a></li>
                  <li><a class="nav-link" href="/admin/kelas/x/otkp-2/">OTKP 2</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown active" data-toggle="dropdown"><i class="fas fa-clipboard-list"></i> <span>Kelas XI</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="/admin/kelas/xi/animasi/">Animasi</a></li>
                  <li><a class="nav-link" href="/admin/kelas/xi/akuntansi/">Akuntansi</a></li>
                  <li><a class="nav-link" href="/admin/kelas/xi/perbankan-syariah/">Perbankan Syariah</a></li>
                  <li><a class="nav-link" href="/admin/kelas/xi/otkp-1/">OTKP 1</a></li>
                  <li><a class="nav-link" href="/admin/kelas/xi/otkp-2/">OTKP 2</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown active" data-toggle="dropdown"><i class="fas fa-clipboard-list"></i> <span>Kelas XII</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="/admin/kelas/xii/animasi/">Animasi</a></li>
                  <li><a class="nav-link" href="/admin/kelas/xii/akuntansi/">Akuntansi</a></li>
                  <li><a class="nav-link" href="/admin/kelas/xii/perbankan-syariah/">Perbankan Syariah</a></li>
                  <li><a class="nav-link" href="/admin/kelas/xii/otkp-1/">OTKP 1</a></li>
                  <li><a class="nav-link" href="/admin/kelas/xii/otkp-2/">OTKP 2</a></li>
                </ul>
              </li>
              <li class="@if($menu == 'Download'){{ 'active' }}@endif"><a class="nav-link" href="/admin/download/absen"><i class="fas fa-download"></i> <span>Download</span></a></li>                
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://wa.me/6289517119943" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-fire"></i> Hubungi Developer
              </a>
            </div>
        </aside>
      </div>

      <!-- BREADCRUMB -->
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{ $menu }}</h1>
            <div class="section-header-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-primary text-white-all">
                  <li class="breadcrumb-item"><a href="#" style="text-decoration: none;"><i class="fas fa-tachometer-alt"></i> Panel</a></li>
                  <li class="breadcrumb-item"><a href="#" style="text-decoration: none;"><i class="far fa-user"></i>
                    Admin
                  </a></li>
                  <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i>{{ $menu }}</li>
                </ol>
              </nav>
            </div>
          </div>

          <!-- Content -->
          @yield('content')
          <!-- End Content -->

          <footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
      </div>
      <div class="footer-right">
        2.3.0
      </div>
    </footer>
  </div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="/js/stisla.js"></script>
<script src="/js/scripts.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/page/index-0.js"></script>
</body>
</html>