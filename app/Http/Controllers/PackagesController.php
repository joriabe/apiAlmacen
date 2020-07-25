<?php

namespace App\Http\Controllers;

use App\Packages;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Packages::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([            
            'id_cliente' => 'required|integer',
            'address' => 'required|string',
        ]);

        $package = Packages::create([
            'code' => Str::random(20),
            'datetime' => Carbon::now(),
            'id_proveedor' => $request->user()->id,
            'id_cliente' => $request->id_cliente,
            'address' => $request->address,
        ]);

        if ($package) {
            return response()->json(['mensaje' => 
            'Paquete creado Corectamente']);
        } else {
            return response()->json(['mensaje' => 
            'Error al Crear el paquete']);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $code)
    {
        $package = Packages::where(['code'=> $code, 'id_cliente' => $request->user()->id ])->first();

        if ($package) {

            if ($package->sent == 1) {
                $estado = 'Su paquete ha sido enviado';
            } else {
                $estado = 'No se ha aprobado el envío de su paquete';
            }
            
        } else {
            $estado = 'Su paquete no ha llegado al almacen';
        }

        return response()->json(['mensaje' =>$estado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $code)
    {
        
        if ($request->user()->type == 'almacen') {
            $package = Packages::where('code', $code)->first();
            $package->sent = $request->sent;
            $package->save();
        } 

        if ($request->user()->type == 'cliente') {
            $package = Packages::where(['code'=> $code, 'id_cliente' => $request->user()->id ])->first();

            if ($package->sent == 1) {
                $package->delivered = $request->delivered;
                $package->save();
            } else {
                return response()->json(['mensaje' => 
                'No se ha aprobado el envío de su paquete']);
            }
        }

        if ($package) {
            return response()->json(['mensaje' => 
            'Estado Actualizado Corectamente']);
        } else {
            return response()->json(['mensaje' => 
            'Error al Actualizar Estado']);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packages $packages)
    {
        //
    }
}
