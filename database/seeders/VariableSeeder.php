<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Variable;

class VariableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Variable::create([
            "variable" => "a",
            "detalle" => "Es el coeficiente del término cuadrado",
            "formula_id"=>1,
            "dimension_id"=>1,
            
        ]);
        Variable::create([
            "variable" => "b",
            "detalle" => "Es el coeficiente del término lineal",
            "formula_id"=>1,
            "dimension_id"=>1,
            
        ]);
        Variable::create([
            "variable" => "c",
            "detalle" => "Es el término independiente",
            "formula_id"=>1,
            "dimension_id"=>1,
            
        ]);
        Variable::create([
            "variable" => "-b",
            "detalle" => "Es el coeficiente del término lineal",
            "formula_id"=>2,
            "dimension_id"=>1,
            
        ]);
        Variable::create([
            "variable" => "a",
            "detalle" => "Es el coeficinete del término cuadrático",
            "formula_id"=>2,
            "dimension_id"=>1,
        ]);
        Variable::create([
            "variable" => "c",
            "detalle" => "Es el término independiente",
            "formula_id"=>3,
            "dimension_id"=>1,
            
        ]);
        Variable::create([
            "variable" => "a",
            "detalle" => "Es el coeficinete del término cuadrático",
            "formula_id"=>3,
            "dimension_id"=>1,
        ]);
    }
}
