<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name' => 'Milsim Brasil',
            'image' => 'naotem',
            'communications' => "[['Discord' => 'discord.com']]",
            'paid' => 'paid',
            'iduser' => 1,
        ]);
    }
}
