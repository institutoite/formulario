<?php

namespace App\Http\Controllers;

use App\Models\Ejemplo;
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
    public function store(StoreEjemploRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ejemplo $ejemplo): Response
    {
        //
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
