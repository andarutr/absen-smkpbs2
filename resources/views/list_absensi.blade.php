<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="/img/pbs2.png"/>
    <title>ABSENSI - List</title>
  </head>
  <body>
    <div class="container mt-5 mb-5">
      <div class="row">
          <div class="col-md-8 mx-auto">
          <h5>List Absensi</h5>
          <div class="table-responsive">
          <table class="table table-bordered border-primary">
              <thead>
                  <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Guru</th>
                  <th scope="col">NRP</th>
                  <th scope="col">Link</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($guru as $gr)
                  <tr>
                      <th scope="row">{{ ($guru->currentpage()-1)*$guru->perpage()+$loop->index+1 }}</th>
                      <td>{{ $gr->nama_guru }}</td>
                      <td>{{ $gr->nrp }}</td>
                      <td><a href="{{ url($gr->link) }}" style="text-decoration: none;">{{ url($gr->link) }}</a></td>
                  </tr>
                  @endforeach
              </tbody>
              </table>
              {{ $guru->links() }}
              </div>
          </div>
      </div>
  </div>


    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>