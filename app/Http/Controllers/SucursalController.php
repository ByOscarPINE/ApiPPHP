<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    public function createSucursal(Request $request)
    {
        $sucursal = Sucursal::create($request->all());
        return response()->json($sucursal);
    }

    public function getSucursales(){
        $sucursales = Sucursal::all();
        return response()->json($sucursales);
    }

    public function getSucursal($id){
        $sucursal = Sucursal::find($id);
        if(!$sucursal){
            return response()->json(['msn'=>'Sucursal not found', 404]);
        }
        return response()->json($sucursal);
    }

}
