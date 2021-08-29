<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Genero;

class GeneroApiController extends Controller
{

    public function __construct(Genero $generos, Request $request) // funcao construct para linkar nossas models
    {
        $this->generos = $generos;
        $this->request = $request;
    }
    public function index() // função para nos retornar o json com nossos dados
    {
        $data = $this->generos->paginate();
        return response()->json($data);
    }

     public function store(Request $request, Genero $generos) // função para o metodo post
    {
        $this->validate($request, $generos->rules());

        $dataform = $request->all();

        $data = $this ->generos->create($dataform);

        return response()->json($data, 201);
    }

    public function show($id) //função para filtrar/consultar dados
    {
        if(!$data = $this->generos->find($id)){
            return response()->json(['error'=>'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }

    public function update(Request $request, $id)
    {
        if(!$data = $this->generos->find($id)){
            return response()->json(['error'=>'Nada foi encontrado'], 404);
        }
        $this->validate($request, $this->generos->rules());
        $dataForm = $request->all();
        $data->update($dataForm);


        return response()->json($data);
    }


    public function destroy($id) //função para deletar registros
    {
        $data=$this->generos->find($id);
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'], 404);
        }else{
            $data->delete();
            return response()->json(['sucess'=>'Registro '.$id.' deletado']);
        }
    }
    public function livro($id)
    {
        if(!$data = $this->generos->withCount('livro')->find($id)){
            return response()->json(['error'=>'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }
    public function livros()
    {
        if(!$data = $this->generos::withCount(['livro'])->get()){
            return response()->json(['error'=>'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }
}
