@extends('layouts.guru')

@section('title', 'Dashboard')

@section('content')
<div class="main-content">
  <section class="section">
    @include('partials.guru.breadcrumb')        
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Aktivitas Absen Terbaru</h4>
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