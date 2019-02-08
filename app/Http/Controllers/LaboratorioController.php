<?php

namespace App\Http\Controllers;

use App\Laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorio=Laboratorio::all();
        return view("laboratorio.index",["laboratorios"=>$laboratorio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laboratorios=new Laboratorio();
        return view("laboratorio.create",["laboratorios"=>$laboratorios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laboratorios=new Laboratorio;
        $laboratorios->nombre=$request->nombre;
        $laboratorios->procedencia=$request->procedencia;
        $laboratorios->telefono=$request->telefono;
        $laboratorios->direccion=$request->direccion;
        if ($laboratorios->save()) {
            return redirect("/laboratorio");
        }else{
            return view("laboratorio.create",["laboratorios"=>$laboratorios]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laboratorio=Laboratorio::find($id);
        return view("laboratorio.edit",["laboratorios"=>$laboratorio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $laboratorios=Laboratorio::find($id);
        $laboratorios->nombre=$request->nombre;
        $laboratorios->procedencia=$request->procedencia;
        $laboratorios->telefono=$request->telefono;
        $laboratorios->direccion=$request->direccion;
        if ($laboratorios->save()) {
            return redirect("/laboratorio");
        }else{
            return view("laboratorio.edit",["laboratorios"=>$laboratorios]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratorio $laboratorio)
    {
        //
    }
}
