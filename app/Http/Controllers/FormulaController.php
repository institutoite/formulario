<?php

namespace App\Http\Controllers;

use App\Models\Formula;
use App\Http\Requests\StoreFormulaRequest;
use App\Http\Requests\UpdateFormulaRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class FormulaController extends Controller
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
    public function store(StoreFormulaRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Formula $formula): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formula $formula): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormulaRequest $request, Formula $formula): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formula $formula): RedirectResponse
    {
        //
    }
}
