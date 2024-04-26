<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ventas;
use function Laravel\Prompts\select;
use Illuminate\Support\Facades\DB;

class ventascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $ventas=DB::table('ventas')
       ->join('vehiculos','ventas.id_vehiculo','=','vehiculos.id_vehiculo')
       ->select('ventas.*',"vehiculos.id_vehiculo")
       ->join('clientes','ventas.id_cliente','=','clientes.id_cliente')
       ->select('ventas.*',"clientes.id_cliente")
       
       ->get();
       return view("ventas.index",["ventas"=>$ventas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ventas = DB ::table('ventas')
        ->orderBy('id_vehiculo')
        ->orderBy('id_cliente')
        ->get();
        return view("ventas.new",["ventas"=>$ventas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $venta = new ventas();
        $venta->id_venta= $request->id_venta;
        $venta->id_vehiculo = $request->id_vehiculo;
        $venta->id_cliente=$request->id_cliente;
        $venta->fecha_venta=$request->fecha_venta;
        $venta->precio_final=$request->precio_final;
        
       


        $venta->save();
        $ventas=ventas::all();

        return view("ventas.index",["ventas"=>$ventas]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $venta = ventas::find($id);
        $ventas=DB::table('ventas')
        ->get();
        return view("ventas.edit",['ventas'=>$ventas,'venta'=>$venta]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ventas = ventas::find($id);
        $ventas->id_venta= $request->id_venta;
        $ventas->id_vehiculo = $request->id_vehiculo;
        $ventas->id_cliente=$request->id_cliente;
        $ventas->fecha_venta=$request->fecha_venta;
        $ventas->precio_final=$request->precio_final;


        $ventas->save();
        $ventas=ventas::all();

        return view("ventas.index",["ventas"=>$ventas]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $venta = ventas::find($id);
        $venta->delete();

        $ventas=ventas::all();
        return view('vehiculos.index',['ventas'=>$ventas]);
    }
}
