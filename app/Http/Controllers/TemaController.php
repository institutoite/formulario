<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use App\Http\Requests\StoreTemaRequest;
use App\Http\Requests\UpdateTemaRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TemaController extends Controller
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
    public function store(StoreTemaRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tema $tema): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tema $tema): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTemaRequest $request, Tema $tema): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tema $tema): RedirectResponse
    {
        //
    }
}
