<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class DownloadController extends Controller
{
  public function downloadAbsen()
  {
      $menu = 'Download';
      $waktu = Carbon::now()->locale('id')->isoFormat('LL');

      return view('pages.admin.download', compact('menu','waktu'));
  }

  public function XAnimasi()
  {
      return Excel::download(new \App\Exports\XAnimasiExport, 'Data Absen X Animasi.xlsx');
  }

  public function XIAnimasi()
  {
      return Excel::download(new \App\Exports\XIAnimasiExport, 'Data Absen XI Animasi.xlsx');
  }

  public function XIIAnimasi()
  {
      return Excel::download(new \App\Exports\XIIAnimasiExport, 'Data Absen XII Animasi.xlsx');
  }

  public function XAkuntansi()
  {
      return Excel::download(new \App\Exports\XAkuntansiExport, 'Data Absen X Akuntansi.xlsx');
  }

  public function XIAkuntansi()
  {
      return Excel::download(new \App\Exports\XIAkuntansiExport, 'Data Absen XI Akuntansi.xlsx');
  }

  public function XIIAkuntansi()
  {
      return Excel::download(new \App\Exports\XIIAkuntansiExport, 'Data Absen XII Akuntansi.xlsx');
  }

  public function XPerbankanSyariah()
  {
      return Excel::download(new \App\Exports\XPerbankanSyariahExport, 'Data Absen X Perbankan Syariah.xlsx');
  }

  public function XIPerbankanSyariah()
  {
      return Excel::download(new \App\Exports\XIPerbankanSyariahExport, 'Data Absen XI Perbankan Syariah.xlsx');
  }

  public function XIIPerbankanSyariah()
  {
      return Excel::download(new \App\Exports\XIIPerbankanSyariahExport, 'Data Absen XII Perbankan Syariah.xlsx');
  }

  public function XOTKPSatu()
  {
      return Excel::download(new \App\Exports\XOTKPSatuExport, 'Data Absen X OTKP 1.xlsx');
  }

  public function XIOTKPSatu()
  {
      return Excel::download(new \App\Exports\XIOTKPSatuExport, 'Data Absen XI OTKP 1.xlsx');
  }

  public function XIIOTKPSatu()
  {
      return Excel::download(new \App\Exports\XIIOTKPSatuExport, 'Data Absen XII OTKP 1.xlsx');
  }

  public function XOTKPDua()
  {
      return Excel::download(new \App\Exports\XOTKPDuaExport, 'Data Absen X OTKP 2.xlsx');
  }

  public function XIOTKPDua()
  {
      return Excel::download(new \App\Exports\XIOTKPDuaExport, 'Data Absen XI OTKP 2.xlsx');
  }

  public function XIIOTKPDua()
  {
      return Excel::download(new \App\Exports\XIIOTKPDuaExport, 'Data Absen XII OTKP 2.xlsx');
  }
}
