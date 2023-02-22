<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Http\Requests\StoreDimensionRequest;
use App\Http\Requests\UpdateDimensionRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class DimensionController extends Controller
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
    public function store(StoreDimensionRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dimension $dimension): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dimension $dimension): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDimensionRequest $request, Dimension $dimension): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dimension $dimension): RedirectResponse
    {
        //
    }
}
