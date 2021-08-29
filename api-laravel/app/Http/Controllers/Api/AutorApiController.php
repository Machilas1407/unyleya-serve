<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Autor;


class AutorApiController extends Controller
{

    public function __construct(Autor $autor, Request $request)
    {
        $this->autor = $autor;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->autor->all();
        return response()->json($data);
    }
    public function store(Request $request, Autor $autor)
    {
        $this->validate($request, $autor->rules());
        $dataForm = $request->all();

        $data = $this->autor->create($dataForm);

        return response()->json($data, 201);
    }


    public function show($id)
    {
        if(!$data = $this->autor->find($id)){
            return response()->json(['Erro,' =>'Nada foi encontrado'], 404);
        }else{
            return response()->json($data);
        }
    }


    public function update(Request $request, $id) //função para dar o update
    {
        if(!$data = $this->autor->find($id)){
            return response()->json(['Erro'=>'Nada foi encontrado'], 404);
        }
        $this->validate($request, $this->autor->rules());

        $dataForm = $request->all();
        $data->update($dataForm);

        return response()->json($data);
    }


    public function destroy($id)
    {
        $data=$this->autor->find($id);
        if(!$data){
            return response()->json(['error'=>'Nada foi encontrado'], 404);
        }else{
            $data->delete();
            return response()->json(['sucess'=>'Registro '.$id.' deletado']);
        }
    }
    public function livro($id)
    {
        if(!$data = $this->autor->withCount('livro')->find($id)){
            return response()->json(['error'=>'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }
    public function livros()
    {
        if(!$data = $this->autor::withCount(['livro'])->get()){
            return response()->json(['error'=>'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }
}
