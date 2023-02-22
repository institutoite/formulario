<?php

namespace App\Http\Controllers;

use App\Models\Unidad;
use App\Http\Requests\StoreUnidadRequest;
use App\Http\Requests\UpdateUnidadRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class UnidadController extends Controller
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
    public function store(StoreUnidadRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Unidad $unidad): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unidad $unidad): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnidadRequest $request, Unidad $unidad): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unidad $unidad): RedirectResponse
    {
        //
    }
}
