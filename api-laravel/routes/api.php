<?php

use App\Http\Controllers\Api\AutorApiController;
use App\Http\Controllers\Api\LivroApiController;
use App\Http\Controllers\Api\GeneroApiController;
use App\Http\Controllers\Api\EditoraApiController;

Route::get('autor/{id}/livro', [AutorApiController::class, 'livro']);
Route::get('autor-livro', [AutorApiController::class, 'livros']);
Route::resource('autores', AutorApiController::class);

Route::get('livro/{id}/autor', [LivroApiController::class, 'autor']);
Route::get('livro/{id}/editora', [LivroApiController::class, 'editora']);
Route::get('livro/{id}/genero', [LivroApiController::class, 'genero']);
Route::resource('livros', LivroApiController::class);

Route::get('editora/{id}/livro', [EditoraApiController::class, 'livro']);
Route::get('editora-livro', [EditoraApiController::class, 'livros']);
Route::resource('editoras', EditoraApiController::class);

Route::get('genero/{id}/livro', [GeneroApiController::class, 'livro']);
Route::get('genero-livro', [GeneroApiController::class, 'livros']);
Route::resource('generos', GeneroApiController::class);




//$this->apiResource('autors', 'AutorApiController@index');
