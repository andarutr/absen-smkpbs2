<?php

namespace App\Exports;

use App\Models\Absensi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class XIIOTKPDuaExport implements FromView
{
    public function view(): View
    {
    	$absensi = Absensi::where(['kelas' => 'XII', 'jurusan' => 'OTKP-2'])->get();
    	
        return view('admin.absensi_excel', compact('absensi'));
    }
}