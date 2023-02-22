<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tema;
use App\Models\Imagen;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tema::create([
            "tema"=>"Potenciación",
            "slogan"=>"Hazte más fuerte en matemáticas con nuestra ayuda en potenciación",
            "detalle"=>"La potenciación es una operación matemática que consiste en multiplicar un número base por sí mismo un número determinado de veces, llamado exponente. Se representa por medio de un número base elevado a un exponente, por ejemplo, 2 elevado a la tercera potencia (2³) es igual a 2 x 2 x 2 = 8. La potenciación es una operación fundamental en la matemática y se utiliza para resolver una amplia variedad de problemas, desde cálculos simples hasta ecuaciones complejas en física, ingeniería y otras disciplinas científicas.",
            "indice"=>1,
            "materia_id"=>1,
        ]);
        Tema::create([
            "tema"=>"Radicación",
            "slogan"=>"La radicación nunca ha sido tan fácil. ¡Confía en nosotros!",
            "detalle"=>"La radicación es una operación matemática inversa a la potenciación. En lugar de elevar un número a una potencia, la radicación busca el número que, al ser elevado a una potencia determinada, producirá un resultado específico. La operación se representa mediante el símbolo radical (√) y el número que se busca se llama radicando. Por ejemplo, la raíz cuadrada de 25 (√25) es igual a 5, porque 5 x 5 = 25. La radicación se utiliza en una amplia variedad de aplicaciones, como en cálculos de medidas, ecuaciones matemáticas y estadísticas. Aprender a realizar operaciones de radicación es fundamental para el desarrollo de habilidades matemáticas avanzadas.",
            "indice"=>2,
            "materia_id"=>1,
        ]);
        Tema::create([
            "tema"=>"Ecuación Cuadrática",
            "slogan"=>"Resolver ecuaciones cuadráticas es fácil con nuestra ayuda.",
            "detalle"=>"Las ecuaciones de segundo grado, también conocidas como ecuaciones cuadráticas, son ecuaciones algebraicas en las que la variable desconocida tiene un exponente de dos. Se pueden representar gráficamente como una parábola y se utilizan en diversas áreas de las matemáticas y la física para modelar situaciones del mundo real. La fórmula cuadrática es una herramienta fundamental para resolver este tipo de ecuaciones y encontrar las soluciones posibles.",
            "indice"=>0,
            "materia_id"=>1,
        ]);
        Tema::create([
            "tema"=>"MOVIMIENTO RECTILINEO UNIFORME MRU",
            "slogan"=>"Descubre la simplicidad del movimiento rectilíneo uniforme con nosotros",
            "detalle"=>"El movimiento rectilíneo uniforme es un concepto básico de la física que describe el movimiento de un objeto que se mueve en línea recta a una velocidad constante. En otras palabras, la velocidad del objeto no cambia, lo que significa que no hay aceleración. El movimiento rectilíneo uniforme es un caso especial de movimiento uniforme, que es aquel en el que la velocidad es constante en magnitud y dirección. El movimiento rectilíneo uniforme se utiliza para modelar y analizar una amplia variedad de fenómenos físicos, desde el movimiento de un coche en una carretera recta hasta el movimiento de un satélite en órbita alrededor de la Tierra. Es un concepto fundamental en la física y es importante para entender conceptos más avanzados en esta disciplina.",
            "indice"=>1,
            "materia_id"=>2,
        ]);
        Tema::create([
            "tema"=>"MOVIMIENTO RECTILINEO UNIFORMEMENTE VARIADO MRUV",
            "slogan"=>" ¡Descubre la ciencia detrás del movimiento!",
            "detalle"=>"El movimiento rectilíneo uniformemente variado, o MRUV, es un concepto clave en la física que se refiere al movimiento de un objeto que se desplaza en línea recta con una aceleración constante. En otras palabras, en un MRUV la velocidad del objeto cambia en igual cantidad en cada unidad de tiempo. El MRUV se utiliza para describir una amplia variedad de fenómenos físicos, como la caída libre de los objetos y la aceleración de los vehículos. Aprender a entender y resolver problemas de MRUV es fundamental para el desarrollo de habilidades avanzadas en física y es esencial para entender muchos aspectos de la ciencia y la tecnología modernas.",
            "indice"=>2,
            "materia_id"=>2,
        ]);
        Imagen::create([
            "imageable_id"=>1,
            "imageable_type"=>"App\Models\Tema",
            "url"=>"temas/imagen.jpg",
        ]);
        Imagen::create([
            "imageable_id"=>2,
            "imageable_type"=>"App\Models\Tema",
            "url"=>"temas/imagen.jpg",
        ]);
        Imagen::create([
            "imageable_id"=>3,
            "imageable_type"=>"App\Models\Tema",
            "url"=>"temas/imagen.jpg",
        ]);
        Imagen::create([
            "imageable_id"=>4,
            "imageable_type"=>"App\Models\Tema",
            "url"=>"temas/imagen.jpg",
        ]);
  
    }
}

 
