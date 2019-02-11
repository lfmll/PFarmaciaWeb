<?php

namespace App\Http\Controllers;

use App\Presentacion;
use Illuminate\Http\Request;

class PresentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentacion=Presentacion::all();
        return view("presentacion.index",["presentacion"=>$presentacion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $presentacion=new Presentacion();
        return view("presentacion.create",["presentacion"=>$presentacion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $presentacion=new Presentacion;
        $presentacion->nombre=$request->nombre;
        if ($presentacion->save()) {
            return redirect("/presentacion");
        }else{
            return view("presentacion.create",["presentacion"=>$presentacion]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Presentacion  $presentacion
     * @return \Illuminate\Http\Response
     */
    public function show(Presentacion $presentacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Presentacion  $presentacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presentacion=Presentacion::find($id);
        return view("presentacion.edit",["presentacion"=>$presentacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Presentacion  $presentacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $presentacion=Presentacion::find($id);
        $presentacion->nombre=$request->nombre;
        if ($presentacion->save()) {
            return redirect("/presentacion");
        }else{
            return view("presentacion.edit",["presentacion"=>$presentacion]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Presentacion  $presentacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presentacion $presentacion)
    {
        //
    }
}
