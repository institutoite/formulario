<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formula;
use App\Models\Imagen;
class FormulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formula::create([
            'nombre'=>'Fórmula cuadrática',
            'formula'=>'$$ x_1=\frac{-b+\pm\sqrt[2]{b^2-4ac}}{2a} $$ ',
            'detalle'=>'La fórmula cuadrática es una herramienta matemática utilizada para encontrar las soluciones de una ecuación cuadrática de la forma ax^2 + bx + c = 0, donde a, b y c son coeficientes conocidos. La fórmula utiliza la raíz cuadrada para encontrar las dos posibles soluciones de la ecuación. La fórmula es ampliamente utilizada en álgebra y cálculo, así como en aplicaciones prácticas en ciencias y tecnología.',
            'indice'=>0,
            'tema_id'=>3,

        ]);
        Formula::create([
            'nombre'=>'Suma de raices',
            'formula'=>'$$ x_1+x_2=\frac{-b}{a} $$ ',
            'detalle'=>'Esta fórmula es útil en situaciones en las que se necesita encontrar la suma de las raíces de una ecuación cuadrática, por ejemplo, para resolver un problema de aplicación que requiere conocer la suma de las soluciones.',
            'indice'=>0,
            'tema_id'=>3,

        ]);
        Formula::create([
            'nombre'=>'Producto de raices',
            'formula'=>'$$ x_1 \cdot x_2=\frac{c}{a} $$',
            'detalle'=>'La fórmula de producto de las raíces de una ecuación cuadrática es una expresión matemática que nos permite calcular el producto de las dos soluciones de una ecuación cuadrática. Esta fórmula se utiliza comúnmente en matemáticas y en ciencias aplicadas para resolver problemas que involucran ecuaciones cuadráticas.',
            'indice'=>0,
            'tema_id'=>3,

        ]);
        Imagen::create([
            "imageable_id"=>1,
            "imageable_type"=>"App\Models\Formula",
            "url"=>"formulas/cuadratica.jpg",
        ]);
        Imagen::create([
            "imageable_id"=>2,
            "imageable_type"=>"App\Models\Formula",
            "url"=>"formulas/cuadratica.jpg",
        ]);
        Imagen::create([
            "imageable_id"=>3,
            "imageable_type"=>"App\Models\Formula",
            "url"=>"formulas/cuadratica.jpg",
        ]);
       
    }
}

