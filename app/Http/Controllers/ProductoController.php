<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index(){
        $producto= Producto::join('categorias', 'productos.id_categ','=','categorias.id')
        ->join('marcas', 'productos.id_marca','=','marcas.id')
        ->select('productos.nombre', 'productos.precio','productos.cantidad',
        'categorias.nombre as categoria', 'marcas.nombre as marca')->get();
        return ['producto'=> $producto];
    }

    public function store(request $request){
        $producto = new Producto();
        $producto-> cod_prod = $request-> cod_prod;
        $producto-> nombre = $request-> nombre;
        $producto-> precio = $request-> precio;
        $producto-> cantidad = $request-> cantidad;
        $producto-> fec_ven = $request-> fec_ven;
        $producto-> estado = $request-> estado;

        $producto->id_marca = $request->id_marca;
        $producto->id_categ = $request->id_categ;

        $producto->save();
    }
    public function update(Request $request){
        $producto= Producto::findOrFail($request->id);
        $producto-> cod_prod = $request-> cod_prod;
        $producto-> nombre = $request-> nombre;
        $producto-> precio = $request-> precio;
        $producto-> cantidad = $request-> cantidad;
        $producto-> fec_ven = $request-> fec_ven;
        $producto-> estado = $request-> estado;

        $producto-> id_marca = $request-> id_marca;
        $producto-> id_categ = $request-> id_categ;

        $producto->save();
    }

    public function destroy(Request $request){
        $producto= Producto:: findOrFail($request->id);
        $producto->delete();
    }
}