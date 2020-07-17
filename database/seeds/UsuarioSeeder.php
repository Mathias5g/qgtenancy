<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'Joao',
            'email' => 'mathiaseap@gmail.com',
            'password' => bcrypt('admin'),
            'permissions' => 'member'
        ]);
    }
}
