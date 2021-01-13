<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <center>
              <img class="img-fluid mt-4" src="/img/pbs2.png" alt="Logo PBS2" width="120">
            </center>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/admin/dashboard">PBS2</a>
          </div>
          <ul class="sidebar-menu">
              <br><br>
              <li class="menu-header">ADMIN</li>
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
        </aside>
      </div>