<?php

namespace App\Http\Controllers;
use App\Models\Categorias;

use Illuminate\Http\Request;

class CategoriaControllers extends Controller
{
    //
    public function index (){
        $categoria=Categoria::all() -> orderBy ('nombre', 'asc');
    }
    public function store (Request $request){
        $categoria = new Categoria();
        $categoria ->nombre= $request-> nombre;
        $categoria ->estado= $request-> edo;

        $categoria -> save();
    }

    public function update(Request $request)
    {

    $categoria = Categoria::findOrFail($request -> $id);
    $categoria ->nombre= $request-> nombre;
    $categoria ->estado= $request-> edo;
    
    $categoria -> save();
    }
    public function destroy(Request $request){
    $categoria = Categoria::findOrFail($request -> $id);
    $categoria -> delete();
    }
}


