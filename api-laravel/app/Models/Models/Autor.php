<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Models\Livro;


class Autor extends Model
{
    protected $fillable = [
        'nome',
        'data_nasc',
        'nacionalidade',
        'sexo'
    ];

    public function rules()
    {
        return [
            'nome' => 'required',
            'data_nasc' => 'required',
            'sexo' => 'required',
            'nacionalidade' => 'required'

        ];
    }
    public function livro()
    {
        return $this->hasMany(Livro::class , 'autor_id', 'id');
    }

}
