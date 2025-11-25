<?php

namespace App\Exports;

use App\Models\Absensi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class XAnimasiExport implements FromView
{
    public function view(): View
    {
    	$absensi = Absensi::where(['kelas' => 'X', 'jurusan' => 'Animasi'])->get();
    	
        return view('admin.absensi_excel', compact('absensi'));
    }
}