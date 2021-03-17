<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\categoria;

class categoriacontroller extends Controller
{
    public function getCategoria(){
        return response()->json(categoria::all(),200);
    }

    // Categorias por id
    public function getCategoriaId($id){
        $categoria =categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['messaje'=>'Registro no encontrado'],200);
        }

        return response()->json($categoria::find($id),200);
    }

    //Insertar Categorias
    public function insertCategoria(Request $request){
        $categoria = categoria::create($request->all());

        return response()->json($categoria,301);
    }

      //Insertar Categorias
    public function updateCategoria(Request $request,$id){
         $categoria =categoria::find($id);
         if(is_null($categoria)){
            return response()->json(['messaje'=>'Registro no encontrado'],200);
        }

        $categoria->update($request->all());
        return response()->json($categoria,301);
    }

     //Delete Categorias
    public function deleteCategoria($id){
         $categoria =categoria::find($id);
         if(is_null($categoria)){
            return response()->json(['messaje'=>'Registro no encontrado'],200);
        }

        $categoria->delete();
        return response()->json(['message'=>'Registro elimionado'],200);
    }
}
