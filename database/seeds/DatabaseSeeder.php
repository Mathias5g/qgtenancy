<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'leandroabmathias@gmail.com',
            'password' => bcrypt('admin'),
            'permissions' => 'admin'
        ]);

        DB::table('groups')->insert([
            'name' => 'Milsim Brasil',
            'image' => 'naotem',
            'communications' => "[['Discord' => 'discord.com']]",
            'paid' => 'paid'
        ]);

        DB::table('user_groups')->insert([
            'iduser' => 1,
            'idgroup' => 1,
        ]);
        $slotsArray = ['Tenente', 'Sargento'];
        DB::table('missoes')->insert([
            'title' => 'Missão Demo',
            'image' => 'https://milsimbrasil.com/uploads/set_resources_19/9ec0040e8b1b93c105d065b85a6bd289_logofacebook.png',
            'description' => 'Localizar os inimigos',
            'slots' => serialize($slotsArray),
            'type' => 'Oficial',
            'start' => '2020-07-15 20:00:00',
            'groupid' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('missoes')->insert([
            'title' => 'Missão Demo',
            'image' => 'https://milsimbrasil.com/uploads/set_resources_19/9ec0040e8b1b93c105d065b85a6bd289_logofacebook.png',
            'description' => 'Localizar os inimigos',
            'slots' => serialize($slotsArray),
            'type' => 'Oficial',
            'start' => '2020-07-15 20:00:00',
            'groupid' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('missoes')->insert([
            'title' => 'Missão Demo',
            'image' => 'https://milsimbrasil.com/uploads/set_resources_19/9ec0040e8b1b93c105d065b85a6bd289_logofacebook.png',
            'description' => 'Localizar os inimigos',
            'slots' => serialize($slotsArray),
            'type' => 'Oficial',
            'start' => '2020-07-15 20:00:00',
            'groupid' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

    }
}
