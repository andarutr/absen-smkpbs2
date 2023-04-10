<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jurusan.json');
        $jurusan = json_decode($json);

        foreach($jurusan as $jrs){
            \DB::table('jurusan')->insert([
                'id' => $jrs->id,
                'jurusan' => $jrs->jurusan,
            ]);
        }
    }
}
