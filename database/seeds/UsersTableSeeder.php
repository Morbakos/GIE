<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'id_user' => 1,
            'user_pseudo' => 'Morbakos',
            'user_mdp' => bcrypt('monmdp'),
            'email' => 'morbakos@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
        
    }
}