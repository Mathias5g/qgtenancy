<?php

use Illuminate\Database\Seeder;

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

    }
}
