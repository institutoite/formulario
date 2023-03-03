<?php

namespace App\Http\Controllers;

use App\Models\Variable;
use App\Models\Dimension;
use App\Http\Requests\StoreVariableRequest;
use App\Http\Requests\UpdateVariableRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class VariableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($variables, $descripciones, $formula, $dimensiones)
    {
        if(isset($variables)>0){
            $cuantas_variables=count($variables);
            $i=0;
            while($i<$cuantas_variables){
                $variable=new Variable();
                $variable->variable=$variables[$i];
                $variable->detalle=$detalles[$i];
                $variable->formula_id=$formula->id;
                $variable->dimension_id=$dimensiones[$i];
                $variable->save();
                $i=$i+1;
            }
        }
        
    }
    public function guardarAjax(StoreVariableRequest $request)
    {
        //return response()->json($request->all());
            $variable=new Variable();
            $variable->variable=$request->variable;
            $variable->detalle=$request->detalle;
            $variable->formula_id=$request->formula_id;
            $variable->dimension_id=$request->dimension_id;
            $variable->save();
            return response()->json($variable);
        
    }
// 
    /**
     * Display the specified resource.
     */
    public function show(Variable $variable): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($variable_id)
    {
        $variable=Variable::find($variable_id);
        $data=["variable"=>$variable,"dimensiones"=>Dimension::all()];
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVariableRequest $request)
    {
        
        $variable = Variable::findOrFail($request->variable_id);
        
        //return response()->json(["a"=>$variable]);
        // $validator = Validator::make($request->all(), [
        //     'motivo'=>['required','max:80',Rule::unique('motivos', 'motivo')->ignore($motivo)],
        //     'tipomotivo_id'=>'required',
        // ]);
        
        // if ($validator->passes()) {
            
            $variable->variable = $request->variable;
            $variable->detalle = $request->detalle;
            $variable->dimension_id = $request->dimension_id;
            $variable->save();
            return response()->json(['variable'=>$variable]);
        // }else{
        //     return response()->json(['error' => $validator->errors()->first()]);
        // }
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy(Variable $variable)
    {
        $variable->delete();
        
        return response()->json(["mensaje" =>"Elinminado correctamente"]);
    }
}
