<?php

namespace App\Models\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Models\Livro;


class Editora extends Model
{
    protected $fillable = [
        'nome',
    ];

    public function rules()
    {
        return [
            'nome' => 'required',

        ];
    }
    public function livro()
    {
        return $this->hasMany(Livro::class , 'editora_id', 'id');
    }
}
