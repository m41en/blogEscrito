<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
    /*
        $user = new User();
        $user -> username = 'lola';
        $user -> email = 'lola@gmail.com';
        $user -> password = 'lolita';
        $user -> save();

        $user2 = new User();
        $user2 -> username = 'juan';
        $user2 -> email = 'juaaaan@gmail.com';
        $user2 -> password = 'juanita';
        $user2 -> save();

        $user3 = new User();
        $user3 -> username = 'pepitopepon';
        $user3 -> email = 'pepitopepon@gmail.com';
        $user3 -> password = 'pp';
        $user3 -> save();
    */
        User::factory(10)->create();
    }
}
