@extends('layouts.app')

@section('content')
<div id="card">
    <div id="card-content">
      <div id="card-title">
        <img src="/img/smkbisa.png">
        <h3>ABSENSI</h3>
        <div class="underline-title"></div>
        <x-form.absen nrp="{{$username}}" />
      </div>
    </div>
</div>
@endsection