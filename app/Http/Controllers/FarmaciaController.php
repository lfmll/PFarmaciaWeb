<?php

namespace App\Http\Controllers;

use App\Farmacia;
use Illuminate\Http\Request;

class FarmaciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farmacia=new Farmacia();
        return view("farmacia.create",["farmacia"=>$farmacia]);               
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function show(Farmacia $farmacia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $farmacia=Farmacia::find($id);
        return view("farmacia.edit",["farmacia"=>$farmacia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farmacia $farmacia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmacia $farmacia)
    {
        //
    }
}
