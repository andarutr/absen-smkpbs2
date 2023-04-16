<?php

namespace Database\Seeders;

use File;
use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/mata_pelajaran.json');
        $mata_pelajaran = json_decode($json);

        foreach($mata_pelajaran as $matpel){
            MataPelajaran::create([
                'nrp' => $matpel->nrp,
                'nama' => $matpel->nama,
                'pelajaran' => $matpel->pelajaran,
            ]);
        }
    }
}
