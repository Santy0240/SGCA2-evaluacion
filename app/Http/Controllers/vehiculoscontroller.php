<?php

namespace App\Http\Controllers;

use App\Models\vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vehiculoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos=vehiculos::all();
        return view('vehiculos.index',['vehiculos'=>$vehiculos]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehiculos = DB ::table('vehiculos')
        ->get();
        return view("vehiculos.new",["vehiculos"=>$vehiculos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehiculos = new vehiculos();
        $vehiculos->id_vehiculo= $request->id_vehiculo;
        $vehiculos-> marca= $request->marca;
        $vehiculos->modelo=$request->modelo;
        $vehiculos->año=$request->año;
        $vehiculos->precio=$request->precio;
        $vehiculos->kilometraje=$request->kilometraje;
        $vehiculos->tipo=$request->tipo;


        $vehiculos->save();
        $vehiculos=vehiculos::all();

        return view("vehiculos.index",["vehiculos"=>$vehiculos]);

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
        $vehiculo = vehiculos::find($id);
        $vehiculos=DB::table('vehiculos')
        ->get();
        return view("vehiculos.edit",['vehiculos'=>$vehiculos,'vehiculo'=>$vehiculo]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vehiculos = vehiculos::find($id);
        $vehiculos->id_vehiculo= $request->id_vehiculo;
        $vehiculos-> marca= $request->marca;
        $vehiculos->modelo=$request->modelo;
        $vehiculos->año=$request->año;
        $vehiculos->precio=$request->precio;
        $vehiculos->kilometraje=$request->kilometraje;
        $vehiculos->tipo=$request->tipo;


        $vehiculos->save();
        $vehiculos=vehiculos::all();

        return view("vehiculos.index",["vehiculos"=>$vehiculos]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $vehiculo = vehiculos::find($id);
        $vehiculo->delete();

        $vehiculos=vehiculos::all();
        return view('vehiculos.index',['vehiculos'=>$vehiculos]);

    }
}

