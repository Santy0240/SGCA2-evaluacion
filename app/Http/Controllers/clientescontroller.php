<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clientescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes=clientes::all();
        return view('clientes.index',['clientes'=>$clientes]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = DB ::table('clientes')
        ->get();
        return view("clientes.new",["clientes"=>$clientes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = new clientes();
        $clientes->id_cliente= $request->id_cliente;
        $clientes-> nombre= $request->nombre;
        $clientes->apellido=$request->apellido;
        $clientes->telefono=$request->telefono;
        $clientes->email=$request->email;
        $clientes->direccion=$request->direccion;



        $clientes->save();
        $clientes=clientes::all();

        return view("clientes.index",["clientes"=>$clientes]);

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
        $cliente = clientes::find($id);
        $clientes=DB::table('clientes')
        ->get();
        return view("clientes.edit",['clientes'=>$clientes,'cliente'=>$cliente]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clientes = clientes::find($id);
        $clientes->id_cliente= $request->id_cliente;
        $clientes-> nombre= $request->nombre;
        $clientes->apellido=$request->apellido;
        $clientes->telefono=$request->telefono;
        $clientes->email=$request->email;
        $clientes->direccion=$request->direccion;



        $clientes->save();
        $clientes=clientes::all();

        return view("clientes.index",["clientes"=>$clientes]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $clientes = clientes::find($id);
        $clientes->delete();

        $clientes=clientes::all();
        return view('clientes.index',['clientes'=>$clientes]);

    }
}

