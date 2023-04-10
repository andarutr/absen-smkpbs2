<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Preview Absen Kelas {{ strtoupper($kelas) }} {{ str_replace('-', ' ', ucwords($jurusan)) }} - SMK Islam PB. Soedirman 2</title>
    <link rel="icon" type="image/png" href="/img/pbs2.png"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    
    <!-- Videojs -->
    <link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" />
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary pt-3 pb-3">
      <a class="navbar-brand" href="/admin/preview/{{ $kelas }}/{{ $jurusan }}">
        <img src="/img/pbs2.png" width="35" height="35" class="d-inline-block align-top mr-2" alt="" loading="lazy">Preview Absen Kelas {{ strtoupper($kelas) }} {{ str_replace('-', ' ', ucwords($jurusan)) }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0">
          <a href="/admin/dashboard" class="text-light" style="text-decoration: none;"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
        </form>
      </div>
    </nav>
    <!-- End Navbar -->
    
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
                <th scope="col">Foto</th>
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
                  <td>
                    <a data-fancybox href="/img/absensi/{{ $absen->jurusan }}/{{ $absen->kelas }}/{{ $absen->foto }}">
                      <img src="/img/absensi/{{ $absen->jurusan }}/{{ $absen->kelas }}/{{ $absen->foto }}" width="100" height="100">
                    </a>
                  </td>
                </tr>
              <?php $i++; ?>
              @endforeach
            </tbody>
          </table>
          </div>
          <style type="text/css">
          @media print {
              #printbtn {
                  display :  none;
              }
              #ftr_pbs2 {
                  display :  none;
              }
          }
          </style>
          <center>
            <input class="btn btn-success mb-4" id ="printbtn" type="button" value="Cetak Dokumen" onclick="window.print();" >
          </center>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="container mt-5 mb-5" id="ftr_pbs2">
      <p style="text-align: center;">Copyright &copy; 2020 SMK Islam PB. Soedirman 2 </p>
    </footer>
    <!-- End Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8c6749049e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>