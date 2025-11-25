<?php

namespace App\Exports;

use App\Models\Absensi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class XIIAnimasiExport implements FromView
{
    public function view(): View
    {
    	$absensi = Absensi::where(['kelas' => 'XII', 'jurusan' => 'Animasi'])->get();
    	
        return view('pages.admin.absensi_excel', compact('absensi'));
    }
}