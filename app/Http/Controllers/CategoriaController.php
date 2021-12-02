<?php

namespace App\Http\Controllers;
use App\Models\Categoria;

use Illuminate\Http\Request;
use inertia\inertia;


class CategoriaController extends Controller
{
    //
    public function index(){
        $categoria=Categoria::all();
        return inertia::render('Categoria',['categoria'=>$categoria]);
        
        // return ['categoria'=>$categoria];
    }
    public function indexData(){
        $categoria=Categoria::all();
        
        return ['categoria'=>$categoria];
    }

  
    public function store(Request $request){
        $categoria= new Categoria();
        $categoria-> nombre=$request->nombre;
        $categoria-> estado=$request->edo;

        $categoria->save();
    }
    
    public function update(Request $request){
        $categoria= Categoria::findOrFail($request->id);
        $categoria-> nombre=$request->nombre;
        $categoria-> estado=$request->edo;
        
        $categoria->save();
    }
    public function destroy(Request $request){
        $categoria= Categoria::findOrFail($request->id);
        $categoria-> delete();
    }
    public function getCategoria(Request $request){
        $edo = $request->edo;
        
        $categoria= Categoria::select('id','nombre')
        ->where('estado',$edo)->get();
        return [
            'categ'=>$categoria
        ];
    }



}


