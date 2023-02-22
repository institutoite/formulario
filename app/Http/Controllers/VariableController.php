<?php

namespace App\Http\Controllers;

use App\Models\Variable;
use App\Http\Requests\StoreVariableRequest;
use App\Http\Requests\UpdateVariableRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class VariableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($variables, $descripciones, $formula, $dimensiones)
    {
        $cuantas_variables=count($variables);
        $i=0;
        while($i<$cuantas_variables){
            $variable=new Variable();
            $variable->variable=$variables[$i];
            $variable->detalle=$detalles[$i];
            $variable->formula_id=$formula->id;
            $variable->dimension_id=$dimensiones[$i];
            $variable->save();
            $i=$i+1;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Variable $variable): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Variable $variable): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVariableRequest $request, Variable $variable): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Variable $variable): RedirectResponse
    {
        //
    }
}
