<?php

namespace App\Http\Controllers;

use App\Insumo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insumo=Insumo::orderBy("nombre","ASC")->simplePaginate(4);
        return view("insumo.index",["insumo"=>$insumo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insumos=new Insumo();
        return view("insumo.create",["insumos"=>$insumos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insumos=new Insumo;
        $insumos->codigo=$request->codigo;
        $insumos->nombre=$request->nombre;
        $insumos->descripcion=$request->descripcion;
        if ($insumos->save()) {
            return redirect("/insumo");
        }else{
            return view("insumo.create",["insumos"=>$insumos]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function show(Insumo $insumo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insumos=Insumo::find($id);
        return view("insumo.edit",["insumos"=>$insumos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $insumos=Insumo::find($id);
        $insumos->codigo=$request->codigo;
        $insumos->nombre=$request->nombre;
        $insumos->descripcion=$request->descripcion;
        if ($insumos->save()) {
            return redirect("/insumo");
        }else{
            return view("insumo.edit",["insumos"=>$insumos]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insumo $insumo)
    {
        //
    }
}
