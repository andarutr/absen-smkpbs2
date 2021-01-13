@extends('layouts.admin')

@section('title', 'Admin - Dashboard')

@section('content')
<div class="main-content">
  <section class="section">
    @include('partials.admin.breadcrumb')
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Animasi</h4>
            </div>
            <div class="card-body">
              {{ $animasi }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-clipboard-list"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Akuntansi</h4>
            </div>
            <div class="card-body">
              {{ $akuntansi }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-home"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Perbankan Syariah</h4>
            </div>
            <div class="card-body">
              {{ $perbankan_syariah }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Administrasi Perkantoran</h4>
            </div>
            <div class="card-body">
              {{ $administrasi_perkantoran }}
            </div>
          </div>
        </div>
      </div>
    </div>          
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Aktivitas Absen Terbaru</h4>
            <center>
              <a href="/admin/store-data" class="btn btn-info mb-4" onclick="return confirm('Yakin ingin store data absen hari ini?')">Store Absen</a>
            </center>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped mb-0">
                <thead>
                  <tr>
                    <th scope="col">Absen</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Guru</th>
                    <th scope="col">Foto</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($absensi as $absen)
                  <tr>
                    <td>{{ $absen->waktu }}</td>
                    <td>{{ $absen->nama }}</td>
                    <td>{{ $absen->kelas }}</td>
                    <td>{{ str_replace('-', ' ', $absen->jurusan) }}</td>
                    <td>{{ str_replace('-', ' ', $absen->mata_pelajaran) }}</td>
                    <td>{{ $absen->guru }}</td>
                    <td>
                      <a data-fancybox href="/img/absensi/{{ $absen->jurusan }}/{{ $absen->kelas }}/{{ $absen->foto }}">
                        <img src="/img/absensi/{{ $absen->jurusan }}/{{ $absen->kelas }}/{{ $absen->foto }}" width="50" height="50">
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
        <div class="mt-3"> 
          {{ $absensi->links() }}
        </div>
      </div>
    </div>
  </section>
</div>
@endsection