<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Http\Requests\StoreMateriaRequest;
use App\Http\Requests\UpdateMateriaRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias = Materia::all();
        return response()->view('materia.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
       
        return response()->view('materia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMateriaRequest $request): RedirectResponse
    {
        $materia = new Materia;
        $materia->materia = $request->materia;
        $materia->slogan = $request->slogan;
        $materia->detalle = $request->detalle;
        $materia->save();
        

        Image::create([
            'url'=>$nombreimagen,
            'imageable_id'=>$materia->id,
            'imageable_type'=>'App\Models\Materia'
        ]);



    return redirect('materias')->with('success', 'Materia creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMateriaRequest $request, Materia $materia): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia): RedirectResponse
    {
        //
    }
}
