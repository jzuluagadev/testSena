<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;
use inertia\inertia;

class ClienteController extends Controller
{
    //
    public function index(){
        $cliente=Cliente::all();
        return inertia::render('Cliente', ['cliente'=>$cliente]);

        // return ['cliente'=>$cliente];
    }
    public function indexData(){
        $cliente=Cliente::all();
        return ['cliente'=>$cliente];

    }

    public function store(Request $request){
        $cliente= new cliente();
        $cliente-> tip_doc= $request->tip_doc;
        $cliente-> num_doc= $request->num_doc;
        $cliente-> nombres= $request->nombres;
        $cliente-> apellidos= $request->apellidos;
        $cliente-> tel= $request->tel;
        $cliente-> dir= $request->dir;
        $cliente-> email= $request->email;
        $cliente-> estado= $request->edo;

        $cliente->save();
        
    }
    public function update(Request $request){
        $cliente= Cliente::findOrFail($request->id);
        $cliente-> tip_doc = $request-> tip_doc;
        $cliente-> num_doc = $request-> num_doc;
        $cliente-> nombres = $request-> nombres;
        $cliente-> apellidos = $request-> apellidos;
        $cliente-> tel = $request-> tel;
        $cliente-> dir = $request-> dir;
        $cliente-> email = $request-> email;
        $cliente-> estado = $request-> estado;

        $cliente->save();
        
    }
    public function destroy(Request $request){
        $cliente= Cliente::findOrFail($request->id);
        $cliente-> delete();
    }
}

