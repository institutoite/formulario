<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use App\Models\Materia;
use App\Http\Requests\StoreTemaRequest;
use App\Http\Requests\UpdateTemaRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use App\Models\Imagen;


class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Materia $materia)
    {
        $temas = $materia->temas;
        return response()->view('tema.index', compact('temas','materia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create($materia)
    // {
    //     return response()->json(["data"=>$materia]);
    //     //return response()->view('tema.create',compact("materia"));
    // }
    public function crear($materia_id)
    {
        $materia=Materia::findOrFail($materia_id);
        return view('tema.create',compact("materia"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTemaRequest $request)
    {
        $tema = new Tema();
        $tema->tema = $request->tema;
        $tema->slogan = $request->slogan;
        $tema->detalle = $request->detalle;
        $tema->materia_id = $request->materia_id;
        $tema->indice = 0;
        $tema->save();

        $materia= Materia::findOrFail($tema->materia_id);
        //dd($request->hasFile('url'));
        if ($request->hasFile('url')){
            $foto=$request->file('url');
            $nombreImagen='temas/'.$tema->tema.Str::random(5).'.jpg';
            $imagen= Image::make($foto);
            $imagen->resize(300,300,function($constraint){
                $constraint->upsize();
            });
            $fotito = Storage::disk('public')->put($nombreImagen, $imagen->stream());
            Imagen::create([
                'url'=>$nombreImagen,
                'imageable_id'=>$tema->id,
                'imageable_type'=>'App\Models\Tema',
            ]);
        }
        return redirect()->route("temas.index",$materia)->with('success', 'Materia creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tema $tema): Response
    {
        //
    }

   public function edit(Tema $tema)
    {
        $materia=$tema->materia;   
        return view("tema.edit",compact("tema","materia"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTemaRequest $request, Tema $tema)
    {
       
        $tema->tema = $request->tema;
        $tema->slogan = $request->slogan;
        $tema->detalle = $request->detalle;
        $tema->materia_id = $request->materia_id;
        $tema->indice = 0;
        $tema->save();

        $materia= Materia::findOrFail($tema->materia_id);
        //dd($request->hasFile('url'));
        if ($request->hasFile('url')){
            if (Storage::disk('public')->exists($tema->imagen->url)) {
                Storage::disk('public')->delete($tema->imagen->url);
            }

            $foto=$request->file('url');
            $nombreImagen='temas/'.$tema->tema.Str::random(5).'.jpg';
            $imagen= Image::make($foto);
            $imagen->resize(300,300,function($constraint){
                $constraint->upsize();
            });
            $fotito = Storage::disk('public')->put($nombreImagen, $imagen->stream());
            $imagencita = $formula->imagen;
            $imagencita->url=$nombreImagen;
            $imagencita->save(); 
        }
        return redirect()->route("temas.index",$materia)->with('success', 'Materia creada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tema $tema)
    {
        $tema->delete();
        return response()->json(["d"=>2]);
    }
}
