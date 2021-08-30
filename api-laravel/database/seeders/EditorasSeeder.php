<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Editora;

class EditorasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Editora::insert([


            [
                'nome' => 'Darkider',
                'id' => 1
            ],
            [
                'nome' => 'Suma',
                'id' => 2
            ],
            [
                'nome' => 'Martins Fontes',
                'id' => 3
            ],



            ]);

    }
}
