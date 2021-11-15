<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetFacturaController extends Controller
{
    //
    public function update(Request $request){
        $detfact= DetFactura::findOrFail($request->id);
        $detfact-> precio= $request-> precio;
        $detfact-> cantidad= $request-> cantidad;
        $detfact-> total= $request-> total;
        
        $detfact-> id_fact= $request-> id_fact;
        $detfact-> id_prod= $request-> id_prod;

        $detfact->save();

    }

}
