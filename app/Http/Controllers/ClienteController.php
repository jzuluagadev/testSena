<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index (){
        $cliente=Cliente::all() -> orderBy ('nombre', 'asc');
    }
    public function store (Request $request){
        $cliente = new Cliente();
        $cliente ->nombre= $request-> nombre;
        $cliente ->estado= $request-> edo;

        $cliente -> save();
    }

    public function update(Request $request)
    {

    $cliente = Cliente::findOrFail($request -> $id);
    $cliente ->nombre= $request-> nombre;
    $cliente ->estado= $request-> edo;
    
    $cliente -> save();
    }
    public function destroy(Request $request){
    $cliente = Cliente::findOrFail($request -> $id);
    $cliente -> delete();
    }
}
