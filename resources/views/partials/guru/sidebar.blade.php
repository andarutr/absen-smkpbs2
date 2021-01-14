<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <img src="/img/pbs2.png" width="80" class="mt-4"><br>
      <a href="/guru/dashboard">{{ Auth::user()->name }}</a>
    </div><br><br>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/guru/dashboard">Guru</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Guru</li>
      <li class="@if($menu == 'Dashboard'){{ 'active' }}@endif"><a class="nav-link" href="/guru/dashboard"><i class="fas fa-rocket"></i> <span>Dashboard</span></a></li>
      
      @include('layouts.menu.'.Auth::user()->username)                
    </ul>
  </aside>
</div>