<?php

namespace App\Http\Controllers;

use App\Models\Formula;
use App\Models\Tema;
use App\Models\Dimension;
use App\Http\Requests\StoreFormulaRequest;
use App\Http\Requests\UpdateFormulaRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

use App\Http\Controllers\VariableController;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use App\Models\Imagen;


class FormulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Tema $tema)
    {
        $formulas = $tema->formulas;
        $materia=$tema->materia;
        return response()->view('formula.index', compact('formulas','tema','materia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tema_id)
    {
        $tema=Tema::findOrFail($tema_id);
        $dimensiones=Dimension::all();
        return view('formula.create',compact("tema",'dimensiones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormulaRequest $request)
    {
        
        //dd($request->all());
        $formula = new Formula();
        $formula->nombre = $request->nombre;
        $formula->formula = "$$".$request->formula."$$";
        $formula->detalle = $request->detalle;
        $formula->tema_id = $request->tema_id;
        $formula->indice = 0;
        $formula->save();

        $ObjetoVariable= new VariableController();
        $ObjetoVariable->store($request->variables,$request->detalle,$formula,$request->dimensiones);

        $tema= Tema::findOrFail($formula->tema_id);
            if ($request->hasFile('url')){
                $foto=$request->file('url');
                $nombreImagen='formulas/'.$formula->nombre.Str::random(5).'.jpg';
                $imagen= Image::make($foto);
                $imagen->resize(300,300,function($constraint){
                    $constraint->upsize();
                });
                $fotito = Storage::disk('public')->put($nombreImagen, $imagen->stream());
        }else{
            $nombreImagen='formulas/formula.jpg';
        }
        Imagen::create([
            'url'=>$nombreImagen,
            'imageable_id'=>$formula->id,
            'imageable_type'=>'App\Models\Formula',
        ]);
        return redirect()->route("formulas.index",$tema)->with('success', 'Materia creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formula $formula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formula $formula)
    {
    
        $tema=$formula->tema; 
        $formula->formula=str_replace("$","",$formula->formula);
        return view("formula.edit",compact("formula","tema"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormulaRequest $request, Formula $formula)
    {
        // Actualizar datos básicos
        $formula->nombre = $request->nombre;
        $formula->formula = "$$".$request->formula."$$";
        $formula->detalle = $request->detalle;
        $formula->indice = 0;
        $formula->save();
    
        // Manejo de la imagen (solo si se sube un archivo)
        if ($request->hasFile('url')) {
            // Verificar si ya existe una imagen asociada
            if ($formula->imagen) {
                // Eliminar la imagen anterior si existe en storage
                if (Storage::disk('public')->exists($formula->imagen->url)) {
                    Storage::disk('public')->delete($formula->imagen->url);
                }
                // Actualizar la imagen existente
                $imagencita = $formula->imagen;
            } else {
                // Crear una nueva imagen si no existe
                $imagencita = new Imagen(); // Asume que tienes el modelo "Imagen"
                $imagencita->imageable_id = $formula->id; // Ajusta según tu relación
                $imagencita->imageable_type ='App\Models\Formula' ; // Ajusta según tu relación
            }
    
            // Procesar y guardar la nueva imagen
            $foto = $request->file('url');
            $nombreImagen = 'formulas/' . $formula->nombre . Str::random(5) . '.jpg';
            $imagen = Image::make($foto);
            $imagen->resize(300, 300, function($constraint) {
                $constraint->upsize();
            });
            Storage::disk('public')->put($nombreImagen, $imagen->stream());
    
            // Guardar la URL en la base de datos
            $imagencita->url = $nombreImagen;
            $imagencita->save();
        }
    
        return redirect()->route("formulas.index", $formula->tema)
            ->with('success', 'Fórmula actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formula $formula): RedirectResponse
    {
        //
    }
}
