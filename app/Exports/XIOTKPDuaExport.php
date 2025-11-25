<?php

namespace App\Exports;

use App\Models\Absensi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class XIOTKPDuaExport implements FromView
{
    public function view(): View
    {
    	$absensi = Absensi::where(['kelas' => 'XI', 'jurusan' => 'OTKP-2'])->get();
    	
        return view('pages.admin.absensi_excel', compact('absensi'));
    }
}