<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Livro;

class LivrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Livro::insert([


            [
                'titulo' => 'O Senhor Dos Aneis',
                'id' => 2,
                'ano_lancamento'=> '1896',
                'autor_id' => 2,
                'genero_id' => 1,
                'editora_id' => 1

            ],
            [
                'titulo' => 'Game Of Thrones',
                'id' => 1,
                'ano_lancamento'=> '1940',
                'autor_id' => 1,
                'genero_id' => 5,
                'editora_id' => 3
            ],
            [
                'titulo' => 'Harry Potter',
                'id' => 3,
                'ano_lancamento'=> '1956',
                'autor_id' => 3,
                'genero_id' => 2,
                'editora_id' => 3

            ],
            [
                'titulo' => 'Machado de Assis',
                'id' => 4,
                'ano_lancamento'=> '1896',
                'autor_id' => 4,
                'genero_id' => 5,
                'editora_id' => 2

            ],
            [
                'titulo' => 'O Hobbit',
                'id' => 5,
                'ano_lancamento'=> '1956',
                'autor_id' => 2,
                'genero_id' => 2,
                'editora_id' => 3

            ],
            [
                'titulo' => 'Machado de Assis 2',
                'id' => 6,
                'ano_lancamento'=> '1896',
                'autor_id' => 4,
                'genero_id' => 5,
                'editora_id' => 2

            ],




            ]);

    }
}
