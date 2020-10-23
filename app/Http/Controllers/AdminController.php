<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\User;
use App\Absensi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function dashboard()
  {
      $menu = 'Dashboard';
      $absensi = Absensi::withTrashed()->orderBy('id','desc')->paginate(25);
      $animasi = Absensi::where('jurusan', 'Animasi')->count();
      $akuntansi = Absensi::where('jurusan', 'Akuntansi')->count();
      $perbankan_syariah = Absensi::where('jurusan', 'Perbankan-Syariah')->count();
      $ap1 = Absensi::where('jurusan', 'otkp-1')->count();
      $ap2 = Absensi::where('jurusan', 'otkp-2')->count();
      $administrasi_perkantoran = $ap1 + $ap2;

      return view('admin.dashboard', compact('menu','absensi','animasi','akuntansi','perbankan_syariah','administrasi_perkantoran'));
  }

  public function data_guru()
  {
      $menu = 'Data Guru';
      $guru = User::paginate(10);

      return view('admin.data_guru', compact('menu','guru'));
  }

  public function storeData()
  {
      \DB::table('absensi')->update(array('deleted_at' => 1));
      \DB::table('store_absensi')->insert([
          'nama'      => \Auth::user()->name,
          'username'  => \Auth::user()->username,
          'waktu'     => Carbon::now()->locale('id')->isoFormat('LLLL')
      ]);

      return redirect('/admin/dashboard');
  }

  public function showAbsen($kelas, $jurusan)
  {
      $menu = str_replace('-', ' ', ucwords($jurusan));
      $kelas = $kelas;
      $jurusan = $jurusan;
      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan])->withTrashed()->paginate(25);

      return view('admin.absen', compact('menu','absensi','kelas','jurusan'));
  }

  public function search(Request $request, $kelas, $jurusan)
  {
      $menu = str_replace('-', ' ', ucwords($jurusan));
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

      return view('admin.absen', compact('menu','absensi','kelas','jurusan'));
  }

  public function previewAbsen($kelas, $jurusan)
  {
      $kelas = $kelas;
      $jurusan = $jurusan;
      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan])->get();

      return view('admin.preview', compact('absensi','kelas','jurusan'));
  }

  public function downloadAbsen()
  {
      $menu = 'Download';
      $waktu = Carbon::now()->locale('id')->isoFormat('LL');

      return view('admin.download', compact('menu','waktu'));
  }

  public function downloadDataAbsen($kelas, $jurusan)
  {
      $kelas = $kelas;
      $jurusan = $jurusan;

      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan])->get();
      $download = PDF::loadView('absen.datapdf_admin', compact('kelas','jurusan','absensi'));

      return $download->download("absen $kelas $jurusan.pdf");
  }
}
