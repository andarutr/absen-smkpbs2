@extends('layouts.admin')

@section('title', 'Admin - Download Absen')

@section('content')
<div class="main-content">
  <section class="section">
    @include('partials.admin.breadcrumb')       
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Download</h4>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped mb-0"> 
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Kelas X</th>
                    <th scope="col">Kelas XI</th>
                    <th scope="col">Kelas XII</th>
                    <th scope="col">Keterangan Waktu</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Animasi</td>
                    <td><a href="/admin/download/absen/x/animasi" class="btn btn-success">Download</a></td>
                    <td><a href="/admin/download/absen/xi/animasi" class="btn btn-success">Download</a></td>
                    <td><a href="/admin/download/absen/xii/animasi" class="btn btn-success">Download</a></td>
                    <td>{{ $waktu }}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Akuntansi</td>
                    <td><a href="/admin/download/absen/x/akuntansi" class="btn btn-success">Download</a></td>
                    <td><a href="/admin/download/absen/xi/akuntansi" class="btn btn-success">Download</a></td>
                    <td><a href="/admin/download/absen/xii/akuntansi" class="btn btn-success">Download</a></td>
                    <td>{{ $waktu }}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Perbankan Syariah</td>
                    <td><a href="/admin/download/absen/x/perbankan-syariah" class="btn btn-success">Download</a></td>
                    <td><a href="/admin/download/absen/xi/perbankan-syariah" class="btn btn-success">Download</a></td>
                    <td><a href="/admin/download/absen/xii/perbankan-syariah" class="btn btn-success">Download</a></td>
                    <td>{{ $waktu }}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>OTKP 1</td>
                    <td><a href="/admin/download/absen/x/otkp-1" class="btn btn-success">Download</a></td>
                    <td><a href="/admin/download/absen/xi/otkp-1" class="btn btn-success">Download</a></td>
                    <td><a href="/admin/download/absen/xii/otkp-1" class="btn btn-success">Download</a></td>
                    <td>{{ $waktu }}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>OTKP 2</td>
                    <td><a href="/admin/download/absen/x/otkp-2" class="btn btn-success">Download</a></td>
                    <td><a href="/admin/download/absen/xi/otkp-2" class="btn btn-success">Download</a></td>
                    <td><a href="/admin/download/absen/xii/otkp-2" class="btn btn-success">Download</a></td>
                    <td>{{ $waktu }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection