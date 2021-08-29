<?php

namespace App\Models\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Models\Autor;
use App\Models\Models\Genero;
use App\Models\Models\Editora;


class Livro extends Model
{
    protected $fillable = [
        'autor_id',
        'genero_id',
        'editora_id',
        'ano_lancamento',
        'titulo'
    ];

    public function rules()
    {
        return [
            'autor_id'=> 'required',
            'genero_id' => 'required',
            'editora_id' => 'required',
            'ano_lancamento' => 'required',
            'titulo' => 'required'

        ];
    }

    public function autor()
    {
        return $this->belongsTo(Autor::class , 'autor_id', 'id');
    }
    public function editora()
    {
        return $this->belongsTo(Editora::class , 'editora_id', 'id');
    }
    public function genero()
    {
        return $this->belongsTo(Genero::class , 'genero_id', 'id' );
    }
}
