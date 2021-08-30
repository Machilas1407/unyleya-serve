<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Genero;

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Genero::insert([

            [
                'nome' => 'Fantasia',
                'id' => 1
            ],
            [
                'nome' => 'Aventura',
                'id' => 2
            ],
            [
                'nome' => 'Ação',
                'id' => 3
            ],
            [
                'nome' => 'Romance',
                'id' => 4
            ],
            [
                'nome' => 'Terror',
                'id' => 5
            ],


            ]);

    }
}
