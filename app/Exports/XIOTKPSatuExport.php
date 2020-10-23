<?php

namespace App\Exports;

use App\Absensi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class XIOTKPSatuExport implements FromView
{
    public function view(): View
    {
    	$absensi = Absensi::where(['kelas' => 'XI', 'jurusan' => 'OTKP-1'])->get();
    	
        return view('admin.absensi_excel', compact('absensi'));
    }
}