<?php

namespace App\Http\Controllers;

use App\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Laboratorio;
use App\ViaAdministracion;
use App\Presentacion;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamento=Medicamento::orderBy('nombre_comercial','ASC')->simplePaginate(4);
        return view("medicamento.index",["medicamento"=>$medicamento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laboratorios=Laboratorio::orderBy('nombre','ASC')->pluck('nombre','id');
        $presentaciones=Presentacion::orderBy('nombre','ASC')->pluck('nombre','id');
        $vias_administracion=ViaAdministracion::orderBy('nombre','ASC')->pluck('nombre','id');
        $medicamento=new Medicamento();
        return view("medicamento.create",["medicamento"=>$medicamento])
            ->with('laboratorios',$laboratorios)
            ->with('presentaciones',$presentaciones)
            ->with('vias_administracion',$vias_administracion);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicamento=new Medicamento($request->all());
        $medicamento->codigo=$request->codigo;
        $medicamento->nombre_comercial=$request->nombre_comercial;
        $medicamento->nombre_generico=$request->nombre_generico;
        $medicamento->prescripcion=$request->prescripcion;
        $medicamento->dosificacion=$request->dosificacion;
        $medicamento->stock=0;
        $medicamento->stock_minimo=0;
        if ($medicamento->save()) {
            return redirect("/medicamento");
        }else{
            return view("medicamento.create",["medicamento"=>$medicamento]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamento $medicamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicamento=Medicamento::find($id);
        $laboratorios=Laboratorio::orderBy('nombre','ASC')->pluck('nombre','id');
        $presentaciones=Presentacion::orderBy('nombre','ASC')->pluck('nombre','id');
        $vias_administracion=ViaAdministracion::orderBy('nombre','ASC')->pluck('nombre','id');
        
        return view("medicamento.edit",["medicamento"=>$medicamento])
            ->with('laboratorios',$laboratorios)
            ->with('presentaciones',$presentaciones)
            ->with('vias_administracion',$vias_administracion);                    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medicamento=Medicamento::find($id);
        $medicamento->codigo=$request->codigo;
        $medicamento->nombre_comercial=$request->nombre_comercial;
        $medicamento->nombre_generico=$request->nombre_generico;
        $medicamento->prescripcion=$request->prescripcion;
        $medicamento->dosificacion=$request->dosificacion;
        if ($medicamento->save()) {
            return redirect("/medicamento");
        }else{
            return view("medicamento.edit",["medicamento"=>$medicamento]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicamento $medicamento)
    {
        //
    }
}
