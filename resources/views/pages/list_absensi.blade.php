<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/img/pbs2.png"/>
  <title>ABSENSI - List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5 mb-5">
    <!-- Form Pencarian -->
    <div class="row mb-4">
      <div class="col-md-6 offset-md-3">
        <form method="GET" action="{{ url('/') }}">
          <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari nama/nrp" value="{{ request('search') }}">
            <button class="btn btn-outline-primary" type="submit">Cari</button>
            <a href="/" class="btn btn-outline-success">Reset</a>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
      <h4 class="text-center mb-4">LIST ABSEN</h4>
      @if($guru->count() > 0)
        @foreach($guru as $gr)
        <div class="col-lg-3 mb-4">
          <div class="card">
            <img src="/img/e_absen.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $gr->nama_guru }}</h5><br>
              <p>NRP: {{ $gr->nrp }}</p>
              <a href="{{ url('/absensi/'.$gr->link) }}" class="btn btn-primary">Absen</a>
            </div>
          </div>
        </div>
        @endforeach
      @else
        <div class="col-12">
          <p class="text-center">Data tidak ditemukan.</p>
        </div>
      @endif
    </div>
    {{ $guru->appends(request()->query())->links() }}
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>