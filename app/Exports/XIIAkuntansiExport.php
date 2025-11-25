<?php

namespace App\Exports;

use App\Models\Absensi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class XIIAkuntansiExport implements FromView
{
    public function view(): View
    {
    	$absensi = Absensi::where(['kelas' => 'XII', 'jurusan' => 'Akuntansi'])->get();
    	
        return view('pages.admin.absensi_excel', compact('absensi'));
    }
}