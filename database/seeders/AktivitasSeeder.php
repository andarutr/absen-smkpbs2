<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;

class AktivitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/aktivitas.json');
        $aktivitas = json_decode($json);

        foreach($aktivitas as $act){
            \DB::table('aktivitas')->insert([
                'id' => $act->id,
                'id_user' => $act->id_user,
                'aktivitas' => $act->aktivitas,
                'icon' => $act->icon,
                'date' => $act->date,
            ]);
        }
    }
}
