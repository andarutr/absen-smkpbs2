@extends('layouts.admin')

@section('title', 'Admin - Data Guru')

@section('content') 
<div class="main-content">
  <section class="section">
    @include('partials.admin.breadcrumb')       
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Aktivitas Guru Terbaru</h4>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped mb-0">
                <thead>
                  <tr>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Terakhir Login</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($guru as $gr)
                  @if($loop->first) @continue @endif
                  <tr>
                    <td>{{ $gr->name }}</td>
                    <td>{{ $gr->username }}</td>
                    <td>{{ $gr->login_date }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
        <div class="mt-3"> 
          {{ $guru->links() }}
        </div>
      </div>
    </div>
  </section>
</div>
@endsection