@extends('layouts.admin')

@section('title', 'Admin - Absen')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>List Absen Kelas {{ strtoupper($kelas) }} {{ str_replace('-', ' ', ucwords($jurusan)) }}</h4>
        <center>
          <a href="/admin/preview/{{ $kelas }}/{{ $jurusan }}" class="btn btn-success mb-4">Preview</a>
        </center>
      </div>
      <div class="card-body">
        <form class="form-inline my-2 my-lg-0" action="/admin/cari/{{ $kelas }}/{{ $jurusan }}" method="GET">
          <input class="form-control mr-sm-2 mb-4" type="search" placeholder="Cari Data..." aria-label="Search" name="cari">
        </form>
        <div class="table-bordered table-responsive">
        <table class="table table-hover">
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
       	<div class="mt-3">
       		{{ $absensi->links() }}
       	</div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
</div>
@endsection