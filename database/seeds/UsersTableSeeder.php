<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'id_user' => 1,
            'user_pseudo' => 'Morbakos',
            'user_mdp' => bcrypt('GIEMorbakos1'),
            'email' => 'morbakos@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
		
		DB::table('users')->insert([
            'id_user' => 2,
            'user_pseudo' => 'Pippermint',
            'user_mdp' => bcrypt('GIEPippermint2'),
            'email' => 'pippermint@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
		
		DB::table('users')->insert([
            'id_user' => 3,
            'user_pseudo' => 'LeDoc',
            'user_mdp' => bcrypt('GIELeDoc3'),
            'email' => 'ledoc@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
		
		DB::table('users')->insert([
            'id_user' => 4,
            'user_pseudo' => 'Kaddosh',
            'user_mdp' => bcrypt('GIEKaddosh4'),
            'email' => 'kaddosh@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
		
		DB::table('users')->insert([
            'id_user' => 5,
            'user_pseudo' => 'Jack Smith',
            'user_mdp' => bcrypt('GIEJackS5'),
            'email' => 'jack.smith@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
		
		DB::table('users')->insert([
            'id_user' => 6,
            'user_pseudo' => 'Stians',
            'user_mdp' => bcrypt('GIEStians6'),
            'email' => 'stians@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
		
		DB::table('users')->insert([
            'id_user' => 7,
            'user_pseudo' => 'Seemann',
            'user_mdp' => bcrypt('GIESeemann7'),
            'email' => 'seemann@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
		
		DB::table('users')->insert([
            'id_user' => 8,
            'user_pseudo' => 'Amau',
            'user_mdp' => bcrypt('GIEAmau8'),
            'email' => 'amau@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
		
		DB::table('users')->insert([
            'id_user' => 9,
            'user_pseudo' => 'Xoranoj',
            'user_mdp' => bcrypt('GIEXoranoj9'),
            'email' => 'xoranoj@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
		
		DB::table('users')->insert([
            'id_user' => 10,
            'user_pseudo' => 'Madness',
            'user_mdp' => bcrypt('GIEMadness10'),
            'email' => 'madness@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
		
		DB::table('users')->insert([
            'id_user' => 11,
            'user_pseudo' => 'Kathlyes',
            'user_mdp' => bcrypt('GIEKathlyes11'),
            'email' => 'kathlyes@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
		
		DB::table('users')->insert([
            'id_user' => 12,
            'user_pseudo' => 'Tisma',
            'user_mdp' => bcrypt('GIETisma12'),
            'email' => 'tisma@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
		
		DB::table('users')->insert([
            'id_user' => 13,
            'user_pseudo' => 'Baal',
            'user_mdp' => bcrypt('GIEBaal13'),
            'email' => 'baal@team-gie.com',
            'user_avatar' => '',
            'user_valide' => 1,
            'user_rang' => 4,
            'user_post' => 0
        ]);
        
    }
}