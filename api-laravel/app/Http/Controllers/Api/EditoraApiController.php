<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Editora;

class EditoraApiController extends Controller
{
    public function __construct(Editora $editora, Request $request)
    {
        $this->editora = $editora;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->editora->all();
        return response()->json($data);
    }
    public function store(Request $request, Editora $editora)
    {
        $this->validate($request, $editora->rules());
        $dataForm = $request->all();

        $data = $this->editora->create($dataForm);

        return response()->json($data, 201);
    }


    public function show($id)
    {
        if(!$data = $this->editora->find($id)){
            return response()->json(['Erro,' =>'Nada foi encontrado'], 404);
        }else{
            return response()->json($data);
        }
    }


    public function update(Request $request, $id) //função para dar o update
    {
        if(!$data = $this->editora->find($id)){
            return response()->json(['Erro'=>'Nada foi encontrado'], 404);
        }
        $this->validate($request, $this->editora->rules());

        $dataForm = $request->all();
        $data->update($dataForm);

        return response()->json($data);
    }


    public function destroy($id)
    {
        $data=$this->editora->find($id);
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'], 404);
        }else{
            $data->delete();
            return response()->json(['sucess'=>'Registro '.$id.' deletado']);
        }
    }
    public function livro($id)
    {
        if(!$data = $this->editora->withCount('livro')->find($id)){
            return response()->json(['error'=>'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }
    public function livros()
    {
        if(!$data = $this->editora::withCount(['livro'])->get()){
            return response()->json(['error'=>'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }
}
