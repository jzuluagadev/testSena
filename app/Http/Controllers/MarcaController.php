<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    //
    public function index (){
        $marca=Marca::all() -> orderBy ('nombre', 'asc');
    }
    public function store (Request $request){
        $marca = new Marca();
        $marca ->nombre= $request-> nombre;
        $marca ->estado= $request-> edo;

        $categoria -> save();
    }

    public function update(Request $request)
    {

    $marca = Marca::findOrFail($request -> $id);
    $marca->nombre= $request-> nombre;
    $marca ->estado= $request-> edo;
    
    $marca -> save();
    }
    public function destroy(Request $request){
    $marca = Marca::findOrFail($request -> $id);
    $marca -> delete();
    }
}