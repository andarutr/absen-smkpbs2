<?php

namespace App\Exports;

use App\Absensi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class XPerbankanSyariahExport implements FromView
{
    public function view(): View
    {
    	$absensi = Absensi::where(['kelas' => 'X', 'jurusan' => 'Perbankan-Syariah'])->get();
    	
        return view('admin.absensi_excel', compact('absensi'));
    }
}