<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Absen Kelas {{ strtoupper($kelas) }} {{ str_replace('-', ' ', ucwords($jurusan)) }} - SMK Islam PB. Soedirman 2</title>
    <link rel="icon" type="image/png" href="/img/pbs2.png"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h4 class="mt-5 mb-4 text-center">Absen Kelas {{ strtoupper($kelas) }} {{ str_replace('-', ' ', ucwords($jurusan)) }}</h4>
          <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Absen</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Mata Pelajaran</th>
                <th scope="col">Guru</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              @foreach($absensi as $absen)
                <tr>
                  <td><?= $i; ?></td>
                  <td>{{ $absen->waktu }}</td>
                  <td>{{ $absen->nama }}</td>
                  <td>{{ $absen->mata_pelajaran }}</td>
                  <td>{{ $absen->guru }}</td>
                </tr>
              <?php $i++; ?>
              @endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>