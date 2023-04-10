<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/img/pbs2.png"/>
    <title>ABSENSI - List</title>
    <!-- Compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 mb-5">
      <div class="row">
        <h4 class="text-center mb-4">LIST ABSEN</h4>
        @foreach($guru as $gr)
        <div class="col-lg-3 mb-4">
          <div class="card">
            <img src="/img/e_absen.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $gr->nama_guru }}</h5><br>
              <a href="{{ url('/absensi/'.$gr->link) }}" class="btn btn-primary">Absen</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{ $guru->links() }}
    </div>


  
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>