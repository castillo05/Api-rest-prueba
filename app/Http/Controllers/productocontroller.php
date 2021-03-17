<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\producto;
use App\models\categoria;

class productocontroller extends Controller
{
    //Mostrar todos los productos

    public function getProducto(){
        $prod=response()->json(producto::select('productos.name_producto','categorias.name')
                                ->join('categorias','productos.idCategoria','=','categorias.id')->get());

        // $prod=producto::all();
        return $prod;

    }

     // Poducto por id
    public function getProductoId($id){
        $producto =producto::find($id);
        if(is_null($producto)){
            return response()->json(['messaje'=>'Registro no encontrado'],200);
        }

        return response()->json($producto::find($id),200);
    }

    // Agregar Producto

    public function insertarProducto(Request $request){
        $producto=producto::create($request->all());
         return response()->json($producto,301);
    }


     // Actualizar por id
    public function updateProductoId(Request $request,$id){
        $producto =producto::find($id);
        if(is_null($producto)){
            return response()->json(['messaje'=>'Registro no encontrado'],200);
        }
        $producto->update($request->all());
        return response()->json($producto,200);
    }

     // Delete por id
    public function deleteProductoId($id){
        $producto =producto::find($id);
        if(is_null($producto)){
            return response()->json(['messaje'=>'Registro no encontrado'],200);
        }
        $producto->delete();
        return response()->json(['message'=>'Producto eliminado'],200);
    }

}
