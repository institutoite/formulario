<?php

namespace App\Http\Controllers;

use App\Models\Ejemplo;
use App\Models\Formula;
use App\Http\Requests\StoreEjemploRequest;
use App\Http\Requests\UpdateEjemploRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class EjemploController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function ejemplos(Formula $formula){

        $ejemplos=$formula->ejemplo;
        $tema=$formula->tema;
        $materia=$tema->materia;
        return view("ejemplo.show",compact("materia","tema","formula","ejemplos"));
    }
    // public function listarAjax(Request $request){
    public function listarAjax(){
        $formula_id=1;
        // return response()->json($request->all());
        // $ejemplos=Formula::findOrFail($request->formula_id)->ejemplos;
        $ejemplos=Formula::findOrFail($formula_id)->ejemplos;
        //dd($ejemplos);
        return response()->json($ejemplos);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Formula $formula)
    {
        return view("ejemplo.create",compact("formula"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function guardarAjax(StoreEjemploRequest $request)
    {
        $ejemplo=new Ejemplo();
        $ejemplo->numero=$request->numero;
        $ejemplo->ejemplo="$$".$request->ejemplo."$$";
        $ejemplo->detalle=$request->detalle;
        $ejemplo->formula_id=$request->formula_id;
        $ejemplo->save();
        $ejemplos=Formula::findOrFail($request->formula_id)->ejemplos;
        return response()->json($ejemplo);
    }

    /**
     * Display the specified resource.
     */
    public function show(Formula $formula)
    {
        $tema=$formula->tema;
        $materia=$tema->materia;
        $ejemplos=$formula->ejemplos;
        $variables=$formula->variables;
        return view("formula.show",compact("variables","ejemplos","formula","tema","materia"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ejemplo $ejemplo)
    {
        //data=["ejemplo"=>$ejemplo,"for"]
        return response()->json($ejemplo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEjemploRequest $request)
    {
        $ejemplo = Ejemplo::findOrFail($request->ejemplo_id);
        $ejemplo->ejemplo = "$$".$request->ejemplo."$$";
        $ejemplo->numero = $request->numero;
        $ejemplo->detalle = $request->detalle;
        $ejemplo->save();
        return response()->json($ejemplo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ejemplo $ejemplo)
    {
        $ejemplo->delete();
        return response()->json(["mensaje" =>"Registro Eliminado correctamente"]);
    }
}
