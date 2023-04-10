<?php

namespace Database\Seeders;

use File;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/users.json');
        $users = json_decode($json);

        foreach($users as $user){
            User::create([
                'name' => $user->name,
                'username' => $user->username,
                'password' => $user->password,
                'login_date' => $user->login_date,
            ]);
        }
    }
}
