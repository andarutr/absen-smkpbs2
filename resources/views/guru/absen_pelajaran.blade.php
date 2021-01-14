@extends('layouts.guru')

<?php $pelajaran = str_replace('-', ' ', $pelajaran); ?>
@section('title', "Absen Mata Pelajaran $pelajaran")

@section('content')
<div class="main-content">
  <section class="section">
    @include('partials.guru.breadcrumb')        
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <form class="form-inline my-2 my-lg-0" action="/guru/cari/{{ $kelas }}/{{ $jurusan }}/{{ $pelajaran }}" method="GET">
          <input class="form-control mr-sm-2 mb-4" type="search" placeholder="Cari Data..." aria-label="Search" name="cari">
        </form>
        <div class="card">
          <div class="card-header">
            <h4>List Absen Kelas {{ strtoupper($kelas) }} {{ str_replace('-', ' ', ucwords($jurusan)) }} - {{ str_replace('-', ' ', $pelajaran) }}</h4>
            <center>
              <a href="/guru/preview/{{ $kelas }}/{{ $jurusan }}/{{ str_replace(' ', '-', $pelajaran) }}" class="btn btn-info mb-4 ml-3">Preview</a>
              <a href="/guru/download/absen/{{ $kelas }}/{{ $jurusan }}/{{ str_replace(' ', '-', $pelajaran) }}" class="btn btn-success mb-4 ml-2">Download</a>
            </center>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped mb-0">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Absen</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Guru</th>
                    <th scope="col">Foto</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($absensi as $absen)
                    <tr>
                      <td>{{ ($absensi->currentpage()-1)*$absensi->perpage()+$loop->index+1 }}</td>
                      <td>{{ $absen->waktu }}</td>
                      <td>{{ $absen->nama }}</td>
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