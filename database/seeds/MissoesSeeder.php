<?php

use App\Missoes;
use Illuminate\Database\Seeder;

class MissoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Missoes::create([
            'title' => 'Missão Demo',
            'image' => 'https://milsimbrasil.com/uploads/set_resources_19/9ec0040e8b1b93c105d065b85a6bd289_logofacebook.png',
            'description' => 'Localizar os inimigos, assim que for localizado, devemos capturar',
            'slots' => serialize(['Tenente', 'Sargento']),
            'type' => 'Oficial',
            'start' => '2020-07-15 20:00:00',
            'groupid' => 2
        ]);
    }
}
