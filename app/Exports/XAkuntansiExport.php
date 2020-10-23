<?php

namespace App\Exports;

use App\Absensi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class XAkuntansiExport implements FromView
{
    public function view(): View
    {
    	$absensi = Absensi::where(['kelas' => 'X', 'jurusan' => 'Akuntansi'])->get();
    	
        return view('admin.absensi_excel', compact('absensi'));
    }
}