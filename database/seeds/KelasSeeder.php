<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/kelas.json');
        $kelas = json_decode($json);

        foreach($kelas as $kls){
            \DB::table('kelas')->insert([
                'id' => $kls->id,
                'kelas' => $kls->kelas,
            ]);
        }
    }
}
