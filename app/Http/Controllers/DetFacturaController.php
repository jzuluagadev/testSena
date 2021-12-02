<?php

namespace App\Http\Controllers;
use App\Models\DetFactura;

use Illuminate\Http\Request;

class DetFacturaController extends Controller
{
    //

    // public function index(){
    //     $detfact= DetFactura::all();
    //     return ['detfact'=> $detfact];
    // }



    // public function store(Request $request){
    //     $detfact= new DetFactura();
    //     $detfact-> precio= $request-> precio;
    //     $detfact-> cantidad= $request-> cantidad;
    //     $detfact-> total= $request-> total;

    //     $detfact-> id_fact= $request-> id_fact;
    //     $detfact-> id_prod= $request-> id_prod;

    //     $detfact->save();

    // }

    public function update(Request $request){
        $detfact= DetFactura::findOrFail($request->id);
        $detfact-> precio= $request-> precio;
        $detfact-> cantidad= $request-> cantidad;
        $detfact-> total= $request-> total;
        
        $detfact-> id_fact= $request-> id_fact;
        $detfact-> id_prod= $request-> id_prod;

        $detfact->save();

    }

    // public function destroy(Request $request){
    //     $detfact= DetFactura:: findOrFail($request->id);
    //     $detfact->delete();

    // }



}

