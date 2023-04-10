<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;

class ListAbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/list_absensi.json');
        $list_absensi = json_decode($json);

        foreach($list_absensi as $lab){
            \DB::table('list_absensi')->insert([
                'nama_guru' => $lab->nama_guru,
                'nrp' => $lab->nrp,
                'link' => $lab->link,
            ]);
        }
    }
}
