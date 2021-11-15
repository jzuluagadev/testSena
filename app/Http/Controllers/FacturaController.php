<?php

namespace App\Http\Controllers;
use App\Models\Factura;
use App\Models\DetFactura;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FacturaController extends Controller
{
    //
    public function index(){
        $factura= Factura::all();
        return ['factura' => $factura];
    }



    public function store(Request $request){
        try {
            DB::beginTransaction();

            $fecha= Carbon::now('america/bogota');

            $factura = new Factura();

            $factura-> id_clie = $request-> idClien;
            $factura-> fecha = $fecha;
            $factura-> id_vend = $request-> idVend;
            $factura-> total = $request-> total;

            $factura->save();

            $detalles = $request -> data;

            foreach($detalles as $ep => $det){

                $detalle = new DetFactura();
                $detalle -> id_fact = $factura->id;
                $detalle -> id_prod = $det['id_prod'];
                $detalle -> precio = $det['precio'];
                $detalle -> cant =$det['cantidad'];
                $detalle -> total = $det['precio'] * $det['cantidad'];

                $detalle->save();

            }
            
            DB::commit();            
        }catch (Excepcion $e){
            BD::rollback();
            console.log($e);
        }        

        $factura->save();
    }

    public function update(Request $request){
        $factura= Factura:: findOrFail($request->id);
        $factura-> fecha = $request-> fecha;
        $factura-> total = $request-> total;
        
        $factura-> id_clie = $request-> idClien;
        $factura-> id_vend = $request-> idVend;

        $factura->save();
    }

    public function destroy(Request $request){
        $factura= Factura:: findOrFail($request->id);
        $factura-> delete();
    }
}
