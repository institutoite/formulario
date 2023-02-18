<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use App\Http\Requests\StoreImagenRequest;
use App\Http\Requests\UpdateImagenRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ImagenController extends Controller
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
    public function store(StoreImagenRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Imagen $imagen): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Imagen $imagen): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImagenRequest $request, Imagen $imagen): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Imagen $imagen): RedirectResponse
    {
        //
    }
}
