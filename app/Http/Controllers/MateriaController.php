<?php

namespace App\Http\Controllers;

use App\Models\Materia;

use App\Http\Requests\StoreMateriaRequest;
use App\Http\Requests\UpdateMateriaRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use App\Models\Imagen;

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
        //dd($request->hasFile('url'));
        if ($request->hasFile('url')){
            $foto=$request->file('url');
            $nombreImagen='materias/'.$materia->materia.Str::random(5).'.jpg';
            $imagen= Image::make($foto);
            $imagen->resize(300,300,function($constraint){
                $constraint->upsize();
            });
            $fotito = Storage::disk('public')->put($nombreImagen, $imagen->stream());
            Imagen::create([
                'url'=>$nombreImagen,
                'imageable_id'=>$materia->id,
                'imageable_type'=>'App\Models\Materia',
            ]);
        }
        return redirect('materias')->with('success', 'Materia creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia): Response
    {
         return response()->view('materia.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia): Response
    {
        return response()->view('materia.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMateriaRequest $request, Materia $materia): RedirectResponse
    {
        $materia->materia = $request->materia;
        $materia->slogan = $request->slogan;
        $materia->detalle = $request->detalle;
        $materia->save();

        if ($request->hasFile('url')) {
            
            if (Storage::disk('public')->exists($materia->imagen->url)) {
                Storage::disk('public')->delete($materia->imagen->url);
            }
            //dd(Storage::disk('public')->exists($materia->imagen->url));
            $foto = $request->file('url');
            $nombreImagen = 'materias/' . $materia->materia . Str::random(5) . '.jpg';
            $imagen = Image::make($foto);
            $imagen->resize(300, 300, function($constraint){
                $constraint->upsize();
            });
            $fotito = Storage::disk('public')->put($nombreImagen, $imagen->stream());
            //$imagencita=$materia->imagen;
            $imagencita = $materia->imagen;
            $imagencita->url=$nombreImagen;
            $imagencita->save(); 
        }

        return redirect()->route('materias.index')->with('success', 'Materia actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        // Alert::success('Mensaje exitoso', 'Datos guardados correctamente');
        $materia->delete();
        return response()->json(["mensaje" =>"Elinminado correctamente"]);
        //return redirect()->route('materias.index')->with('success', 'Materia actualizada exitosamente.');
    }
}
