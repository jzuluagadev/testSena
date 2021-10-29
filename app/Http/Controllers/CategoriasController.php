<?php

namespace App\Http\Controllers;
use App\Models\Categorias;

use Illuminate\Http\Request;

class CategoriasControllers extends Controller
{
    //
    public function store (Request $request){
        $categoria = new Categoria();
        $categoria ->nombre= $request-> nombre;
        $categoria ->estado= $request-> edo;

        $categoria -> save();
    }
}
