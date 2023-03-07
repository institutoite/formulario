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
    public function index(): Response
    {
        //
    }

    public function ejemplos(Formula $formula){
        return $formula->ejemplos;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Formula $formula)
    {
        return response()->json($formula);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEjemploRequest $request)
    {

        return response()->json($request->all());
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
    public function edit(Ejemplo $ejemplo): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEjemploRequest $request, Ejemplo $ejemplo): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ejemplo $ejemplo): RedirectResponse
    {
        //
    }
}
