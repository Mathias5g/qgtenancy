<?php

use App\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name' => 'Milsim Brasil',
            'image' => 'naotem',
            'communications' => "[['Discord' => 'discord.com']]",
            'paid' => 'paid'
        ]);
    }
}
