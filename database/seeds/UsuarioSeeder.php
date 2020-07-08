<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'leandroabmathias@gmail.com',
            'password' => bcrypt('admin'),
            'permissions' => 'admin',
            'idgroup' => 1,
        ]);
    }
}
