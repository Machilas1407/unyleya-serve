<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Autor;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Autor::insert([


            [
                'nome' => 'J. R. R. Tolkien',
                'id' => 2,
                'data_nasc'=> '1896',
                'sexo' => 'Masculino',
                'nacionalidade'=> 'Inglaterra'
            ],
            [
                'nome' => 'Geroge R. R. Martin',
                'id' => 1,
                'data_nasc'=> '1940',
                'sexo' => 'Masculino',
                'nacionalidade'=> 'Estados Unidos'
            ],
            [
                'nome' => 'J. K. Roling',
                'id' => 3,
                'data_nasc'=> '1956',
                'sexo' => 'Feminino',
                'nacionalidade'=> 'Inglaterra'
            ],
            [
                'nome' => 'Machado de Assis',
                'id' => 4,
                'data_nasc'=> '1896',
                'sexo' => 'Masculino',
                'nacionalidade'=> 'Brasil'
            ],



            ]);

    }
}
