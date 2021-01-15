<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Pesan</div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="javascript:;" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="/img/andarutr.jpg" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Andaru</b>
                    <p>Selamat datang di panel admin. Silahkan hubungi saya lebih lanjut, jika mengalami kendala.</p>
                    <div class="time">{{ date('d F Y') }}</div>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Pemberitahuan
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="javascript:;" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Selamat Datang Admin!
                    <div class="time">{{ date('d F Y') }}</div>
                  </div>
                </a>
                <a href="javascript:;" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Sistem Panel Admin Updated!
                    <div class="time text-primary">12 January 2021</div>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="/img/admin.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Selamat Datang</div>
              <div class="dropdown-divider"></div>
              <a href="/admin/aktivitas" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Aktivitas
              </a>
              <a href="/admin/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>