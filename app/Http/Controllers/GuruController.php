<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class GuruController extends Controller
{
  public function dashboard()
  {
      $menu = 'Dashboard';
      $absensi = Absensi::where(['nrp' => \Auth::user()->username, 'guru' => \Auth::user()->name])
                            ->orderBy('id','desc')
                            ->paginate(25);

      return view('guru.dashboard', compact('menu','absensi'));
  }

  public function showAbsenPelajaran($kelas, $jurusan, $pelajaran)
  {
      $menu = strtoupper($kelas)." ".str_replace('-', ' ', ucwords($jurusan));
      $kelas = $kelas;
      $jurusan = $jurusan;
      $pelajaran = $pelajaran;
      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan,'mata_pelajaran' => $pelajaran, 'guru' => \Auth::user()->name])->paginate(25);

      return view('guru.absen_pelajaran', compact('menu','absensi','kelas','jurusan','pelajaran'));
  }

  public function search(Request $request, $kelas, $jurusan, $pelajaran)
  {
      $menu = str_replace('-', ' ', ucwords($jurusan));
      $kelas = $kelas;
      $jurusan = $jurusan;
      $pelajaran = $pelajaran;
      $cari = $request->cari;

      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan, 'guru' => \Auth::user()->name])
                            ->where('nama','like',"%".$cari."%")
                            ->orWhere('kelas','like',"%".$cari."%")
                            ->orWhere('jurusan','like',"%".$cari."%")
                                        ->orWhere('mata_pelajaran','like',"%".$cari."%")
                                        ->orWhere('guru','like',"%".$cari."%")
                            ->orWhere('waktu','like',"%".$cari."%")
                            ->paginate(25);

      return view('guru.absen_pelajaran', compact('menu','absensi','kelas','jurusan','pelajaran'));
  }

  public function waliKelas($kelas, $jurusan)
  {
      $menu = 'Wali Kelas';
      $kelas = $kelas;
      $jurusan = $jurusan;
      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan, 'guru' => \Auth::user()->name, 'mata_pelajaran' => 'Wali Kelas'])->paginate(25);

      return view('guru.absen', compact('menu','absensi','kelas','jurusan'));
  }

  public function searchAbsenKelas(Request $request, $kelas, $jurusan)
  {
      $menu = 'Wali Kelas';
      $kelas = $kelas;
      $jurusan = $jurusan;
      $cari = $request->cari;

      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan])
                          ->where('nama','like',"%".$cari."%")
                          ->orWhere('kelas','like',"%".$cari."%")
                          ->orWhere('jurusan','like',"%".$cari."%")
                          ->orWhere('mata_pelajaran','like',"%".$cari."%")
                          ->orWhere('guru','like',"%".$cari."%")
                          ->orWhere('waktu','like',"%".$cari."%")
                          ->withTrashed()
                          ->paginate(25);

      return view('guru.absen', compact('menu','absensi','kelas','jurusan'));
  }

  public function previewAbsenWalas($kelas, $jurusan)
  {
      $kelas = $kelas;
      $jurusan = $jurusan;
      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan, 'guru' => \Auth::user()->name, 'mata_pelajaran' => 'Wali Kelas'])->get();

      return view('guru.preview_walas', compact('absensi','kelas','jurusan'));
  }

  public function previewAbsen($kelas, $jurusan, $pelajaran)
  {
      $kelas = $kelas;
      $jurusan = $jurusan;
      $pelajaran = $pelajaran;
      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan, 'mata_pelajaran' => $pelajaran, 'guru' => \Auth::user()->name])->get();

      return view('guru.preview', compact('absensi','kelas','jurusan','pelajaran'));
  }

  public function downloadDataAbsenWalas($kelas, $jurusan)
  {
      $kelas = $kelas;
      $jurusan = $jurusan;

      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan, 'guru' => \Auth::user()->name, 'mata_pelajaran' => 'Wali Kelas'])->get();
      $download = \PDF::loadview('absen.datapdf_admin', compact('kelas','jurusan','absensi'));

      return $download->download("absen $kelas $jurusan.pdf");
  }

  public function downloadDataAbsen($kelas, $jurusan, $pelajaran)
  {
      $kelas = $kelas;
      $jurusan = $jurusan;
      $pelajaran = $pelajaran;
      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan, 'mata_pelajaran' => $pelajaran, 'guru' => \Auth::user()->name])->get();
      $download = \PDF::loadview('absen.datapdf', compact('kelas','jurusan','pelajaran','absensi'));

      return $download->download("absen $kelas $jurusan.pdf");
  }
}
