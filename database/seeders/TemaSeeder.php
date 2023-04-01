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
        /** TEMAS AGREGADOS POR ATILIO */
       Copy code
// Tema 1
// Slogan: Descubre el poder de los logaritmos
// Descripción: Los logaritmos son una herramienta matemática poderosa que se usa en muchas áreas diferentes. En este tema, aprenderás cómo funcionan los logaritmos, cómo calcularlos y cómo aplicarlos en problemas del mundo real.

Tema::create([
    "tema"=>"LOGARITMOS",
    "materia_id"=>1,
    "slogan"=>"Descubre el poder de los logaritmos",
    "detalle"=>"Los logaritmos son una herramienta matemática poderosa que se usa en muchas áreas diferentes. En este tema, aprenderás cómo funcionan los logaritmos, cómo calcularlos y cómo aplicarlos en problemas del mundo real.",
    "indice"=>1,
]);

// Tema 2
// Slogan: Explora la belleza de la geometría analítica
// Descripción: La geometría analítica combina la geometría y el álgebra para crear una herramienta poderosa para resolver problemas geométricos. En este tema, aprenderás los fundamentos de la geometría analítica, incluyendo cómo trabajar con coordenadas y cómo encontrar ecuaciones de líneas y formas geométricas.

Tema::create([
    "tema"=>"INTRODUCCION A LA GEOMETRIA ANALITICA",
    "materia_id"=>1,
    "slogan"=>"Explora la belleza de la geometría analítica",
    "detalle"=>"La geometría analítica combina la geometría y el álgebra para crear una herramienta poderosa para resolver problemas geométricos. En este tema, aprenderás los fundamentos de la geometría analítica, incluyendo cómo trabajar con coordenadas y cómo encontrar ecuaciones de líneas y formas geométricas.",
    "indice"=>1,
]);

// Tema 3
// Slogan: Descubre el patrón detrás de las progresiones
// Descripción: Las progresiones aritméticas y geométricas son secuencias numéricas que aparecen en muchos problemas y situaciones diferentes. En este tema, aprenderás cómo reconocer y trabajar con progresiones, incluyendo cómo encontrar términos y sumas.

Tema::create([
    "tema"=>"PROGRESIONES ARITMETICAS Y GEOMETRICAS",
    "materia_id"=>1,
    "slogan"=>"Descubre el patrón detrás de las progresiones",
    "detalle"=>"Las progresiones aritméticas y geométricas son secuencias numéricas que aparecen en muchos problemas y situaciones diferentes. En este tema, aprenderás cómo reconocer y trabajar con progresiones, incluyendo cómo encontrar términos y sumas.",
    "indice"=>1,
]);

// Tema
        Tema::create([
            "tema"=>"LOGICA SIMBOLICA",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"DESIGUALDADES Y VALOR ABSOLUTO",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"RAZONES TRIGONOMETRICAS",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"TRIANGULOS RECTANGULOS",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"IDENTIDADES",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"SISTEMA DE ECUACIONES LINEALES",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"CONJUNTOS",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"FUNCIONES",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"RELACIONES",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"LA RECTA",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"LA CIRCUNFERECIA",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"LA PARABOLA",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"LA ELIPSE",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"LA HIPERBOLA",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"LIMITES",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"DERIVADAS",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"INTEGRALES",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"DESCOMPOSICION FACTORIAL",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"M.C.D. expresiones algebráicas",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"AREAS DE FIGURAS PLANAS",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"VOLUMENES DE CUERPOS",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"M.C.M de expresiones algebráicas",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"TRIANGULOS OBLICUANGULOS",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"RELACION INVERSA Y DIRECTAMENTE PROPORCIONALES",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"REGLA DE 3 SIMPLE Y COMPUESTA",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"CLASIFICACION DE LOS TRIANGULOS SEGUN SUS LADOS",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"CLASIFICACION DE LOS TRIANGULOS SEGUN SUS ANGULOS",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"PERIMETROS DE FIGURAS NOTABLES",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"AREA DE POLIGONOS POR COORDENADAS",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"CONVERSION DE FRACCIONES DECIMALES A FRACCIONES COMUNES",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"NOTACIÓN CIENTIFICA",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"PRODUCTOS NOTABLES",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"COCIENTES NOTABLES",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"BINOMIO DE NEWTON POR EL TRIANGULO DE PASSCAL Y POR COMBINATORIA",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"FACTORIAL,COMBINACION, PERMUTACION Y VARIACION",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"INDUCCION COMPLETA",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"NUMEROS COMLEJOS",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"MULTIPLICADORES DE LAGRANGE",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"GRAFICA DE FUNCIONES TRIGONOMETRICAS",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"CRITERIOS DE DIVISIBILIDAD",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        
        
        Tema::create([
            "tema"=>"RAIZ CUADRADA Y RAIZ CUBICA",
            "materia_id"=>1,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);

        /** fisica  */
        Tema::create([
            "tema"=>"NOTACION CIENTIFICA",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"ESCALA TERMICA",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"DILATACION TERMICA",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"CALORIMETRIA",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"LEY DE LOS GASES",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"MOVIMIENTO RECTILINEO UNIFORMEMENTE VARIADO",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"MOVIMIENTO VERTICAL- CAIDA LIBRE",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"MOVIMIENTO PARABOLICO",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"MOVIMIENTO CIRCULAR UNIFORME",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"MOVIMIENTO CIRCULAR UNIFORMEMENTE VARIADO",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"MOVIMIENTO OSCILATORIO",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"DINAMICA DE PARTICULAS",
            "materia_id"=>2,
            "slogan"=>"",
            
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"FUERZA ELECTRICA",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"CAMPO ELECTRICO",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"POTENCIAL ELECTRICO",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"TRABAJO ELECTRICO",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"CAPACIDAD ELECTRICA",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"ASOCIACION DE CONDENSADORES",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::
        
        create([
            "tema"=>"CIRCUITOS ELECTRICOS",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"LEYES DE KIRCHHOFF",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"LEYES DE KEPLER",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"OPTICA",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"TERMODINAMICA",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"ELECTROMAGNETISMO",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",

            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"EQUILIBRIO TERMICO",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"CAMBIOS DE ESTADO",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);


        Tema::create([
            "tema"=>"TEORIA DE ERRORES",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"CENTROS DE GRAVEDAD Y MOMENTOS DE INERCIA",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"PRINCIO DE ARQUIMEDES",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"PRICIPIO DE PASCAL",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"EMPUJES Y FLOTACION",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"ECUACION DE CONTINUDAD",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"ECUACION DE BERNOULLI",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"LEY DE LA CONSERVACION DE LA ENERGIA",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"LEY DE LA CONSERVACION DE LA CANTIDAD DE MOVIMIENTO",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"TRABAJO,ENERGIA Y POTENCIA",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"CORRIENTE ELECTRICA",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"VECTORES",

            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"GRAVITACION UNIVERSAL",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"LEYES DE TERMODINAMICA",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
        ]);
        Tema::create([
            "tema"=>"ECUACIONES DIMENSIONALES",
            "materia_id"=>2,
            "slogan"=>"",
            "detalle"=>"",
            "indice"=>1,
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

