<?php

namespace App\Exports;

use App\Absensi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class XIAkuntansiExport implements FromView
{
    public function view(): View
    {
    	$absensi = Absensi::where(['kelas' => 'XI', 'jurusan' => 'Akuntansi'])->get();
    	
        return view('admin.absensi_excel', compact('absensi'));
    }
}