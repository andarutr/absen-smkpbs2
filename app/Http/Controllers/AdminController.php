<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use App\Models\Absensi;
use Carbon\Carbon;
use App\Models\Aktivitas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function aktivitas()
  {
      $menu = 'Aktivitas';
      $aktivitas = Aktivitas::simplePaginate(10);

      return view('pages.admin.aktivitas', compact('menu','aktivitas'));
  }

  public function dashboard()
  {
      $menu = 'Dashboard';
      $absensi = Absensi::withTrashed()->orderBy('id','desc')->simplePaginate(10);
      $animasi = Absensi::where('jurusan', 'Animasi')->count();
      $akuntansi = Absensi::where('jurusan', 'Akuntansi')->count();
      $perbankan_syariah = Absensi::where('jurusan', 'Perbankan-Syariah')->count();
      $ap1 = Absensi::where('jurusan', 'otkp-1')->count();
      $ap2 = Absensi::where('jurusan', 'otkp-2')->count();
      $administrasi_perkantoran = $ap1 + $ap2;

      return view('pages.admin.dashboard', compact('menu','absensi','animasi','akuntansi','perbankan_syariah','administrasi_perkantoran'));
  }

  public function data_guru()
  {
      $menu = 'Data Guru';
      $guru = User::paginate(10);

      return view('pages.admin.data_guru', compact('menu','guru'));
  }

  public function storeData()
  {
      \DB::table('absensi')->update(array('deleted_at' => 1));

      Aktivitas::create([
        'id_user' => auth()->user()->id,
        'aktivitas' => "ADMIN Stored Data!",
        'icon' => 'fas fa-save',
        'date' => Carbon::now()->locale('id')->isoFormat('LLLL')
      ]);

      return redirect('/admin/dashboard');
  }

  public function showAbsen($kelas, $jurusan)
  {
      $menu = str_replace('-', ' ', ucwords($jurusan));
      $kelas = $kelas;
      $jurusan = $jurusan;
      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan])->withTrashed()->paginate(25);

      return view('pages.admin.absen', compact('menu','absensi','kelas','jurusan'));
  }

  public function search(Request $request, $kelas, $jurusan)
  {
      $menu = str_replace('-', ' ', ucwords($jurusan));
      $kelas = $kelas;
      $jurusan = $jurusan;
      $cari = $request->cari;
      
      Aktivitas::create([
        'id_user' => auth()->user()->id,
        'aktivitas' => "Mencari Data ".ucwords($kelas)." ".str_replace('-', ' ', ucwords($jurusan)),
        'icon' => 'fas fa-eye',
        'date' => Carbon::now()->locale('id')->isoFormat('LLLL')
      ]);

      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan])
                            ->where('nama','like',"%".$cari."%")
                            ->orWhere('kelas','like',"%".$cari."%")
                            ->orWhere('jurusan','like',"%".$cari."%")
                            ->orWhere('mata_pelajaran','like',"%".$cari."%")
                            ->orWhere('guru','like',"%".$cari."%")
                            ->orWhere('waktu','like',"%".$cari."%")
                            ->withTrashed()
                            ->paginate(25);

      return view('pages.admin.absen', compact('menu','absensi','kelas','jurusan'));
  }

  public function previewAbsen($kelas, $jurusan)
  {
      $kelas = $kelas;
      $jurusan = $jurusan;
      $absensi = Absensi::where(['kelas' => $kelas, 'jurusan' => $jurusan])->get();
      
      Aktivitas::create([
        'id_user' => auth()->user()->id,
        'aktivitas' => "Preview Data ".ucwords($kelas)." ".str_replace('-', ' ', ucwords($jurusan)),
        'icon' => 'fas fa-eye',
        'date' => Carbon::now()->locale('id')->isoFormat('LLLL')
      ]);

      return view('pages.admin.preview', compact('absensi','kelas','jurusan'));
  }
}
