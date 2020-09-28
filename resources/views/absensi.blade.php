@extends('layouts.app')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
Swal.fire(
  '{{ $username->name }}',
  'Silahkan absen sesuai dengan jadwal masing-masing!',
  'success'
)
</script>
@if(session('message'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
Swal.fire(
  'Berhasil Absen',
  '{{ session("message") }}',
  'success'
)
</script>
@endif
@if(session('failed'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
Swal.fire(
  'Sudah Absen',
  '{{ session("failed") }}',
  'info'
)
</script>
@endif

<div id="card">
    <div id="card-content">
      <div id="card-title">
        <img src="img/smkbisa.png">
        <h3>ABSENSI</h3>
        <div class="underline-title"></div>
        <form action="/absensi/{{ $username->username }}" method="POST" enctype="multipart/form-data">
        @csrf
            <input type="text" name="nama" class="form-content" placeholder="Nama Lengkap" value="{{ old('nama') }}">
            <div class="form-border"></div>
            <small style="color: red;">@error('nama'){{ $message }}@enderror</small>
            <select name="mata_pelajaran">
              <option value="">Pilih Mata Pelajaran</option>
              <option value="Wali Kelas">Wali Kelas</option>
              @foreach($matpel as $mp)
                <option value="{{ $mp->pelajaran }}">{{ str_replace('-', ' ', $mp->pelajaran) }}</option>
              @endforeach
            </select>
            <div class="form-border"></div>
            <small style="color: red;">@error('mata_pelajaran'){{ $message }}@enderror</small>
            <select name="kelas">
              <option value="">Pilih Kelas</option>
              <option value="X">X</option>
              <option value="XI">XI</option>
              <option value="XII">XII</option>
            </select>
            <div class="form-border"></div>
            <small style="color: red;">@error('kelas'){{ $message }}@enderror</small>
            <select name="jurusan">
              <option value="">Pilih Jurusan</option>
              <option value="Animasi">Animasi</option>
              <option value="Akuntansi">Akuntansi</option>
              <option value="Perbankan-Syariah">Perbankan Syariah</option>
              <option value="OTKP-1">OTKP 1</option>
              <option value="OTKP-2">OTKP 2</option>
            </select>
            <div class="form-border"></div>
            <small style="color: red;">@error('jurusan'){{ $message }}@enderror</small>
            <input type="file" class="form-content" name="foto">
            <div class="form-border"></div>
            <small style="color: red;">@error('foto'){{ $message }}@enderror</small>
            <button id="submit-btn" type="submit">ABSEN</button>
        </form>
      </div>
    </div>
</div>
@endsection