<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="/img/pbs2.png"/>
    <title>List Absensi</title>
  </head>
  <body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
            <h5>List Absensi</h5>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Link</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    @foreach($guru as $gr)
                    @if ($loop->first) @continue @endif
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $gr->name }}</td>
                        <td>{{ $gr->username }}</td>
                        <td><a href="{{ url($gr->username) }}">{{ url($gr->username) }}</a></td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>