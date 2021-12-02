<?php

namespace App\Http\Controllers;
use App\Models\Marca;

use Illuminate\Http\Request;
use inertia\inertia;

class MarcaController extends Controller
{
    //
    public function index(){
        $marca=Marca::all();
        return inertia::render('Marcas',['marca'=>$marca]);
        // return ['marca'=>$marca];

    }
    public function indexData(){
        $marca=Marca::all();
        return ['marca'=>$marca];

    }

    public function store(Request $request){
        $marca= new Marca();
        $marca-> nombre=$request->nombre;
        $marca-> estado=$request->edo;

        $marca->save();
        
    }
    public function update(Request $request){
        $marca=  Marca::findOrFail($request->id);
        $marca-> nombre=$request->nombre;
        $marca-> estado=$request->edo;

        $marca->save();
        
    }
    public function destroy(Request $request){
        $marca= Marca::findOrFail($request->id);
        $marca-> delete();
    }

    public function getMarca(Request $request){
        $edo = $request->edo;
        
        $marca= Marca::select('id','nombre')
        ->where('estado',$edo)->get();
        return ['marca'=>$marca];
    }


}
