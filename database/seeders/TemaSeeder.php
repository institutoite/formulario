<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tema;
use App\Models\Imagen;
use Illuminate\Support\Facades\DB;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('temas')->insert([
            [
                'id' => 1,
                'tema' => 'Potenciación',
                'slogan' => 'Potencia tus habilidades matemáticas.',
                'detalle' => 'Multiplicación abreviada de un número por sí mismo (base elevado a un exponente). Fundamental en diversas áreas.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 2,
                'tema' => 'Radicación',
                'slogan' => 'Descubre la raíz de los números.',
                'detalle' => 'Operación inversa a la potenciación. Busca la base que, elevada a una potencia, da un resultado.',
                'indice' => 2,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 3,
                'tema' => 'Ecuación Cuadrática',
                'slogan' => 'Resuelve ecuaciones de segundo grado fácilmente.',
                'detalle' => 'Ecuaciones algebraicas donde la variable tiene exponente dos. Su gráfica es una parábola.',
                'indice' => 0,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 4,
                'tema' => 'MOVIMIENTO RECTILINEO UNIFORME MRU',
                'slogan' => 'MRU: Velocidad constante en línea recta.',
                'detalle' => 'Movimiento con velocidad constante y trayectoria rectilínea. No presenta aceleración.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 5,
                'tema' => 'MOVIMIENTO RECTILINEO UNIFORMEMENTE VARIADO MRUV',
                'slogan' => 'MRUV: Aceleración constante en línea recta.',
                'detalle' => 'Movimiento con trayectoria rectilínea y aceleración constante. La velocidad varía uniformemente.',
                'indice' => 2,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 6,
                'tema' => 'LOGARITMOS',
                'slogan' => 'Logaritmos: La herramienta para exponentes.',
                'detalle' => 'Función matemática que encuentra el exponente al que debe elevarse una base para obtener un número.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 7,
                'tema' => 'INTRODUCCION A LA GEOMETRIA ANALITICA',
                'slogan' => 'Geometría y álgebra unidas.',
                'detalle' => 'Uso de un sistema de coordenadas para el estudio de figuras geométricas mediante álgebra.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 8,
                'tema' => 'PROGRESIONES ARITMETICAS Y GEOMETRICAS',
                'slogan' => 'Descubre el patrón en las secuencias.',
                'detalle' => 'Sucesiones numéricas con reglas definidas para obtener cada término a partir de los anteriores.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 9,
                'tema' => 'LOGICA SIMBOLICA',
                'slogan' => 'Desarrolla tu pensamiento lógico.',
                'detalle' => 'Sistema formal que analiza la validez de argumentos mediante símbolos y reglas.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 10,
                'tema' => 'DESIGUALDADES Y VALOR ABSOLUTO',
                'slogan' => 'Comprende las relaciones de orden y la magnitud.',
                'detalle' => 'Estudio de expresiones con signos >, <, ≥, ≤ y la distancia de un número al cero.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 11,
                'tema' => 'RAZONES TRIGONOMETRICAS',
                'slogan' => 'Explora las relaciones entre los ángulos de un triángulo.',
                'detalle' => 'Funciones que relacionan los ángulos de un triángulo rectángulo con las proporciones de sus lados.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 12,
                'tema' => 'TRIANGULOS RECTANGULOS',
                'slogan' => 'El triángulo con un ángulo recto.',
                'detalle' => 'Triángulos que contienen un ángulo de 90 grados. Importancia del teorema de Pitágoras.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 13,
                'tema' => 'IDENTIDADES',
                'slogan' => 'Simplifica expresiones algebraicas y trigonométricas.',
                'detalle' => 'Igualdades que se cumplen para todos los valores de las variables involucradas.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 14,
                'tema' => 'SISTEMA DE ECUACIONES LINEALES',
                'slogan' => 'Resuelve conjuntos de ecuaciones con múltiples incógnitas.',
                'detalle' => 'Conjunto de dos o más ecuaciones lineales que comparten las mismas variables.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 15,
                'tema' => 'CONJUNTOS',
                'slogan' => 'La base de la organización matemática.',
                'detalle' => 'Agrupaciones de elementos con características definidas.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 16,
                'tema' => 'FUNCIONES',
                'slogan' => 'Relaciones con una salida única para cada entrada.',
                'detalle' => 'Regla de correspondencia entre dos conjuntos donde cada elemento del primer conjunto se relaciona con uno y solo un elemento del segundo.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 17,
                'tema' => 'RELACIONES',
                'slogan' => 'Vinculando elementos entre conjuntos.',
                'detalle' => 'Subconjuntos del producto cartesiano entre dos o más conjuntos.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 18,
                'tema' => 'LA RECTA',
                'slogan' => 'El camino más corto entre dos puntos.',
                'detalle' => 'Objeto geométrico unidimensional definido por dos puntos o una pendiente y un punto.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 19,
                'tema' => 'LA CIRCUNFERECIA',
                'slogan' => 'Una curva cerrada con distancia constante al centro.',
                'detalle' => 'Conjunto de puntos equidistantes de un punto fijo llamado centro.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 20,
                'tema' => 'LA PARABOLA',
                'slogan' => 'Una curva con un punto fijo y una línea directriz.',
                'detalle' => 'Lugar geométrico de los puntos que equidistan de un foco y una directriz.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 21,
                'tema' => 'LA ELIPSE',
                'slogan' => 'Una curva con dos focos.',
                'detalle' => 'Lugar geométrico de los puntos cuya suma de distancias a dos focos es constante.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 22,
                'tema' => 'LA HIPERBOLA',
                'slogan' => 'Una curva con dos ramas.',
                'detalle' => 'Lugar geométrico de los puntos cuya diferencia de distancias a dos focos es constante.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 23,
                'tema' => 'LIMITES',
                'slogan' => 'Acercándonos a un valor sin alcanzarlo.',
                'detalle' => 'Concepto fundamental del cálculo que describe el valor al que se aproxima una función.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 24,
                'tema' => 'DERIVADAS',
                'slogan' => 'La razón de cambio instantánea.',
                'detalle' => 'Medida de cómo cambia una función con respecto a su variable.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 25,
                'tema' => 'INTEGRALES',
                'slogan' => 'Encontrando el área bajo la curva.',
                'detalle' => 'Concepto del cálculo para determinar el área delimitada por una función.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 26,
                'tema' => 'DESCOMPOSICION FACTORIAL',
                'slogan' => 'Expresando números y polinomios como productos.',
                'detalle' => 'Proceso de escribir un número o polinomio como la multiplicación de sus factores.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 27,
                'tema' => 'M.C.D. expresiones algebráicas',
                'slogan' => 'El mayor factor común algebraico.',
                'detalle' => 'Polinomio de mayor grado que divide exactamente a dos o más expresiones algebraicas.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 28,
                'tema' => 'AREAS DE FIGURAS PLANAS',
                'slogan' => 'Calculando superficies bidimensionales.',
                'detalle' => 'Medida de la superficie delimitada por el contorno de una figura geométrica plana.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 29,
                'tema' => 'VOLUMENES DE CUERPOS',
                'slogan' => 'Midiendo el espacio tridimensional.',
                'detalle' => 'Cantidad de espacio que ocupa un cuerpo geométrico tridimensional.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 30,
                'tema' => 'M.C.M de expresiones algebráicas',
                'slogan' => 'El menor múltiplo común algebraico.',
                'detalle' => 'Polinomio de menor grado divisible exactamente por dos o más expresiones algebraicas.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 31,
                'tema' => 'TRIANGULOS OBLICUANGULOS',
                'slogan' => 'Triángulos sin ángulos rectos.',
                'detalle' => 'Triángulos que no contienen ningún ángulo de 90 grados.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 32,
                'tema' => 'RELACION INVERSA Y DIRECTAMENTE PROPORCIONALES',
                'slogan' => 'Entendiendo cómo varían las cantidades juntas.',
                'detalle' => 'Estudio de cómo dos magnitudes se relacionan cuando una aumenta o disminuye.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 33,
                'tema' => 'REGLA DE 3 SIMPLE Y COMPUESTA',
                'slogan' => 'Resolviendo problemas de proporcionalidad.',
                'detalle' => 'Método para encontrar un valor desconocido en problemas de proporcionalidad directa o inversa.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 34,
                'tema' => 'CLASIFICACION DE LOS TRIANGULOS SEGUN SUS LADOS',
                'slogan' => 'Identificando triángulos por la longitud de sus lados.',
                'detalle' => 'Categorización de triángulos en equiláteros, isósceles y escalenos.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 35,
                'tema' => 'CLASIFICACION DE LOS TRIANGULOS SEGUN SUS ANGULOS',
                'slogan' => 'Identificando triángulos por la medida de sus ángulos.',
                'detalle' => 'Categorización de triángulos en acutángulos, rectángulos y obtusángulos.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 36,
                'tema' => 'PERIMETROS DE FIGURAS NOTABLES',
                'slogan' => 'Calculando el contorno de figuras geométricas.',
                'detalle' => 'Suma de las longitudes de los lados de un polígono.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 37,
                'tema' => 'AREA DE POLIGONOS POR COORDENADAS',
                'slogan' => 'Calculando áreas usando puntos en el plano.',
                'detalle' => 'Método para hallar el área de un polígono utilizando las coordenadas de sus vértices.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 38,
                'tema' => 'CONVERSION DE FRACCIONES DECIMALES A FRACCIONES COMUNES',
                'slogan' => 'Transformando números con decimales a fracciones.',
                'detalle' => 'Proceso para expresar un número decimal como una fracción irreducible.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 39,
                'tema' => 'NOTACIÓN CIENTIFICA',
                'slogan' => 'Expresando números grandes o pequeños de forma concisa.',
                'detalle' => 'Manera de escribir números utilizando potencias de diez.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 40,
                'tema' => 'PRODUCTOS NOTABLES',
                'slogan' => 'Patrones algebraicos para una multiplicación rápida.',
                'detalle' => 'Fórmulas para obtener el resultado de ciertas multiplicaciones de polinomios de forma directa.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 41,
                'tema' => 'COCIENTES NOTABLES',
                'slogan' => 'Patrones algebraicos para una división rápida.',
                'detalle' => 'Fórmulas para obtener el resultado de ciertas divisiones de polinomios de forma directa.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 42,
                'tema' => 'BINOMIO DE NEWTON POR EL TRIANGULO DE PASSCAL Y POR COMBINATORIA',
                'slogan' => 'Expandiendo binomios a cualquier potencia.',
                'detalle' => 'Métodos para desarrollar la potencia de un binomio utilizando el triángulo de Pascal o combinatoria.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 43,
                'tema' => 'FACTORIAL,COMBINACION, PERMUTACION Y VARIACION',
                'slogan' => 'Contando y ordenando elementos.',
                'detalle' => 'Técnicas de conteo para determinar el número de arreglos posibles de un conjunto de elementos.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 44,
                'tema' => 'INDUCCION COMPLETA',
                'slogan' => 'Demostrando proposiciones para infinitos casos.',
                'detalle' => 'Método de demostración matemática para probar la validez de una afirmación para todos los números naturales.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 45,
                'tema' => 'NUMEROS COMLEJOS',
                'slogan' => 'Explorando una dimensión numérica más allá de los reales.',
                'detalle' => 'Extensión de los números reales que incluye la unidad imaginaria \'i\', donde $i^2 = -1$.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 46,
                'tema' => 'MULTIPLICADORES DE LAGRANGE',
                'slogan' => 'Optimizando funciones con restricciones.',
                'detalle' => 'Método para encontrar los máximos y mínimos de una función sujeta a una o más restricciones.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 47,
                'tema' => 'GRAFICA DE FUNCIONES TRIGONOMETRICAS',
                'slogan' => 'Visualizando las ondas matemáticas.',
                'detalle' => 'Representación gráfica de las funciones seno, coseno, tangente, cotangente, secante y cosecante.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 48,
                'tema' => 'CRITERIOS DE DIVISIBILIDAD',
                'slogan' => 'Identificando divisores sin realizar la división.',
                'detalle' => 'Reglas que permiten determinar si un número entero es divisible por otro sin efectuar la operación.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 49,
                'tema' => 'RAIZ CUADRADA Y RAIZ CUBICA',
                'slogan' => 'Encontrando el número que multiplicado por sí mismo da otro.',
                'detalle' => 'Operaciones de radicación con índice 2 y 3 respectivamente.',
                'indice' => 1,
                'materia_id' => 1,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 50,
                'tema' => 'NOTACION CIENTIFICA',
                'slogan' => 'Simplificando la expresión de cantidades extremas.',
                'detalle' => 'Forma de escribir números muy grandes o muy pequeños como un producto de un número entre 1 y 10 y una potencia de 10.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 51,
                'tema' => 'ESCALA TERMICA',
                'slogan' => 'Midiendo la temperatura.',
                'detalle' => 'Sistemas de referencia para cuantificar el grado de calor de un cuerpo (Celsius, Fahrenheit, Kelvin).',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 52,
                'tema' => 'DILATACION TERMICA',
                'slogan' => 'Cómo los materiales cambian con la temperatura.',
                'detalle' => 'Aumento o disminución del volumen de un material debido a cambios en su temperatura.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 53,
                'tema' => 'CALORIMETRIA',
                'slogan' => 'Midiendo el flujo de calor.',
                'detalle' => 'Rama de la física que estudia la medición de las cantidades de calor intercambiadas en procesos físicos y químicos.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' =>54,
                'tema' => 'LEY DE LOS GASES',
                'slogan' => 'Comportamiento de la materia en estado gaseoso.',
                'detalle' => 'Conjunto de leyes físicas que describen el comportamiento de los gases ideales (Boyle, Charles, Gay-Lussac, Avogadro).',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 55,
                'tema' => 'MOVIMIENTO RECTILINEO UNIFORMEMENTE VARIADO',
                'slogan' => 'Aceleración constante en línea recta.',
                'detalle' => 'Estudio del movimiento donde la velocidad cambia de manera uniforme con el tiempo.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 56,
                'tema' => 'MOVIMIENTO VERTICAL- CAIDA LIBRE',
                'slogan' => 'El movimiento bajo la influencia de la gravedad.',
                'detalle' => 'Caso especial del MRUV donde la aceleración es la de la gravedad.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 57,
                'tema' => 'MOVIMIENTO PARABOLICO',
                'slogan' => 'La trayectoria curva de un proyectil.',
                'detalle' => 'Movimiento en dos dimensiones bajo la acción de la gravedad.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 58,
                'tema' => 'MOVIMIENTO CIRCULAR UNIFORME',
                'slogan' => 'Velocidad angular constante en una trayectoria circular.',
                'detalle' => 'Movimiento donde un objeto se desplaza a velocidad constante alrededor de un eje de rotación.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 59,
                'tema' => 'MOVIMIENTO CIRCULAR UNIFORMEMENTE VARIADO',
                'slogan' => 'Aceleración angular constante en una trayectoria circular.',
                'detalle' => 'Movimiento circular donde la velocidad angular cambia de manera uniforme con el tiempo.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 60,
                'tema' => 'MOVIMIENTO OSCILATORIO',
                'slogan' => 'El vaivén repetitivo.',
                'detalle' => 'Movimiento periódico alrededor de una posición de equilibrio.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 61,
                'tema' => 'DINAMICA DE PARTICULAS',
                'slogan' => 'La física de las fuerzas y el movimiento.',
                'detalle' => 'Rama de la mecánica que estudia las causas del movimiento de las partículas (fuerzas).',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 62,
                'tema' => 'FUERZA ELECTRICA',
                'slogan' => 'La interacción entre cargas.',
                'detalle' => 'Fuerza de atracción o repulsión entre objetos con carga eléctrica (Ley de Coulomb).',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 63,
                'tema' => 'CAMPO ELECTRICO',
                'slogan' => 'La influencia invisible de la carga.',
                'detalle' => 'Región del espacio donde una carga eléctrica experimenta una fuerza.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 64,
                'tema' => 'POTENCIAL ELECTRICO',
                'slogan' => 'La energía potencial por unidad de carga.',
                'detalle' => 'Trabajo necesario para mover una carga unitaria desde un punto de referencia hasta un punto en el campo eléctrico.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 65,
                'tema' => 'TRABAJO ELECTRICO',
                'slogan' => 'Energía transferida por fuerzas eléctricas.',
                'detalle' => 'Trabajo realizado por el campo eléctrico al mover una carga entre dos puntos.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 66,
                'tema' => 'CAPACIDAD ELECTRICA',
                'slogan' => 'La habilidad para almacenar carga.',
                'detalle' => 'Medida de la cantidad de carga eléctrica que un conductor puede almacenar para un potencial dado.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 67,
                'tema' => 'ASOCIACION DE CONDENSADORES',
                'slogan' => 'Combinando la capacidad de almacenamiento.',
                'detalle' => 'Formas de conectar capacitores en serie y paralelo para obtener una capacitancia equivalente.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 68,
                'tema' => 'CIRCUITOS ELECTRICOS',
                'slogan' => 'El camino para la corriente.',
                'detalle' => 'Trayectoria cerrada que permite el flujo de corriente eléctrica.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 69,
                'tema' => 'LEYES DE KIRCHHOFF',
                'slogan' => 'Analizando el flujo de corriente y voltaje en circuitos.',
                'detalle' => 'Conjunto de dos leyes fundamentales para el análisis de circuitos eléctricos (ley de nodos y ley de mallas).',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 70,
                'tema' => 'LEYES DE KEPLER',
                'slogan' => 'Describiendo el movimiento planetario.',
                'detalle' => 'Tres leyes que describen el movimiento de los planetas alrededor del Sol.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 71,
                'tema' => 'OPTICA',
                'slogan' => 'La ciencia de la luz y la visión.',
                'detalle' => 'Rama de la física que estudia el comportamiento y las propiedades de la luz.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 72,
                'tema' => 'TERMODINAMICA',
                'slogan' => 'El estudio del calor y la energía.',
                'detalle' => 'Rama de la física que estudia las transformaciones de energía y sus relaciones con la temperatura y la presión.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 73,
                'tema' => 'ELECTROMAGNETISMO',
                'slogan' => 'La fuerza que une electricidad y magnetismo.',
                'detalle' => 'Rama de la física que estudia la interacción entre los campos eléctrico y magnético.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 74,
                'tema' => 'EQUILIBRIO TERMICO',
                'slogan' => 'Cuando las temperaturas se igualan.',
                'detalle' => 'Estado en el que dos o más sistemas en contacto térmico dejan de intercambiar calor.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 75,
                'tema' => 'CAMBIOS DE ESTADO',
                'slogan' => 'Las transformaciones de la materia.',
                'detalle' => 'Transiciones entre los estados sólido, líquido y gaseoso (fusión, vaporización, sublimación, etc.).',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 76,
                'tema' => 'TEORIA DE ERRORES',
                'slogan' => 'Cuantificando la incertidumbre en las mediciones.',
                'detalle' => 'Estudio de las desviaciones entre el valor medido y el valor real de una magnitud.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 77,
                'tema' => 'CENTROS DE GRAVEDAD Y MOMENTOS DE INERCIA',
                'slogan' => 'El equilibrio y la resistencia a la rotación.',
                'detalle' => 'Punto donde se concentra la masa de un objeto y medida de su resistencia a cambiar su movimiento rotacional.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 78,
                'tema' => 'PRINCIO DE ARQUIMEDES',
                'slogan' => 'La fuerza ascendente en los fluidos.',
                'detalle' => 'Un cuerpo sumergido en un fluido experimenta una fuerza de empuje igual al peso del fluido desplazado.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 79,
                'tema' => 'PRICIPIO DE PASCAL',
                'slogan' => 'La presión se transmite en los fluidos.',
                'detalle' => 'Un cambio de presión aplicado a un fluido incompresible confinado se transmite íntegramente a todos los puntos del fluido.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 80,
                'tema' => 'EMPUJES Y FLOTACION',
                'slogan' => '¿Por qué algunos objetos flotan?',
                'detalle' => 'Estudio de la fuerza ascendente que ejerce un fluido sobre un objeto sumergido y las condiciones para que flote.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id'=>81,
                'tema' => 'ECUACION DE CONTINUDAD',
                'slogan' => 'El flujo constante en fluidos incompresibles.',
                'detalle' => 'En un fluido incompresible, el producto del área de la sección transversal y la velocidad del fluido es constante a lo largo de un tubo de corriente.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 82,
                'tema' => 'ECUACION DE BERNOULLI',
                'slogan' => 'Relacionando presión, velocidad y altura en fluidos.',
                'detalle' => 'Describe el comportamiento de un fluido en movimiento, relacionando su presión, velocidad y altura.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 83,
                'tema' => 'LEY DE LA CONSERVACION DE LA ENERGIA',
                'slogan' => 'La energía no se crea ni se destruye, solo se transforma.',
                'detalle' => 'Principio fundamental de la física que establece que la energía total de un sistema aislado permanece constante.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 84,
                'tema' => 'LEY DE LA CONSERVACION DE LA CANTIDAD DE MOVIMIENTO',
                'slogan' => 'El momento total de un sistema aislado permanece constante.',
                'detalle' => 'Principio físico que establece que la cantidad de movimiento total de un sistema cerrado no cambia si no actúan fuerzas externas sobre él.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 85,
                'tema' => 'TRABAJO,ENERGIA Y POTENCIA',
                'slogan' => 'Los pilares de la mecánica.',
                'detalle' => 'Conceptos fundamentales que describen la transferencia de energía, la capacidad de realizar trabajo y la rapidez con la que se realiza el trabajo.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 86,
                'tema' => 'CORRIENTE ELECTRICA',
                'slogan' => 'El flujo de carga eléctrica.',
                'detalle' => 'Movimiento ordenado de cargas eléctricas a través de un conductor.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 87,
                'tema' => 'VECTORES',
                'slogan' => 'Magnitud y dirección en el espacio.',
                'detalle' => 'Entidades matemáticas que tienen magnitud y dirección, utilizadas para representar magnitudes físicas como fuerza y velocidad.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 88,
                'tema' => 'GRAVITACION UNIVERSAL',
                'slogan' => 'La fuerza que atrae a la materia.',
                'detalle' => 'Ley física que describe la fuerza de atracción entre objetos con masa.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 89,
                'tema' => 'LEYES DE TERMODINAMICA',
                'slogan' => 'Los principios que rigen la energía térmica.',
                'detalle' => 'Conjunto de leyes fundamentales que describen el comportamiento de la energía térmica y el trabajo.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 90,
                'tema' => 'ECUACIONES DIMENSIONALES',
                'slogan' => 'Analizando las unidades de las magnitudes físicas.',
                'detalle' => 'Expresiones algebraicas que muestran las dimensiones de una magnitud física en términos de las unidades fundamentales.',
                'indice' => 1,
                'materia_id' => 2,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39',
            ],
            [
                'id' => 91,
                'tema' => 'PROGRESIONES GEOMETRICAS',
                'slogan' => 'Multiplicando para avanzar en la secuencia.',
                'detalle' => 'Secuencia numérica donde cada término se obtiene multiplicando el anterior por una razón constante.',
                'indice' => 0,
                'materia_id' => 1,
                'created_at' => '2023-04-06 20:40:54',
                'updated_at' => '2023-04-06 20:40:54',
            ],
            [
                'id' => 92,
                'tema' => 'GASES',
                'slogan' => 'La materia que se expande.',
                'detalle' => 'Estado de la materia sin forma ni volumen definidos, cuyas partículas se mueven libremente.',
                'indice' => 0,
                'materia_id' => 3,
                'created_at' => '2023-04-06 21:55:31',
                'updated_at' => '2023-04-06 21:55:31',
            ],
            [
                'id' => 95,
                'tema' => 'Quimica Inorganica',
                'slogan' => 'El estudio de los compuestos sin carbono.',
                'detalle' => 'Rama de la química que estudia las sustancias que no contienen enlaces carbono-hidrógeno.',
                'indice' => 0,
                'materia_id' => 3,
                'created_at' => '2023-08-01 22:10:36',
                'updated_at' => '2023-08-01 22:10:36',
            ],
            [
                'id' => 97,
                'tema' => 'Quimica Órganica',
                'slogan' => 'La química de los compuestos del carbono.',
                'detalle' => 'Rama de la química que estudia los compuestos que contienen carbono, principalmente con enlaces carbono-hidrógeno.',
                'indice' => 0,
                'materia_id' => 3,
                'created_at' => '2023-08-03 19:02:36',
                'updated_at' => '2023-08-03 19:02:36',
            ],
            [
                'id' => 98,
                'tema' => 'Soluciones',
                'slogan' => 'Mezclas homogéneas a nivel molecular.',
                'detalle' => 'Mezclas uniformes de dos o más sustancias.',
                'indice' => 0,
                'materia_id' => 3,
                'created_at' => '2023-08-05 19:31:51',
                'updated_at' => '2023-08-05 19:31:51',
            ],
            [
                'id' => 99,
                'tema' => 'Equilibrio',
                'slogan' => 'El balance en las reacciones químicas.',
                'detalle' => 'Estado en el que las velocidades de la reacción directa e inversa son iguales.',
                'indice' => 0,
                'materia_id' => 3,
                'created_at' => '2023-08-10 16:18:46',
                'updated_at' => '2023-08-10 16:18:46',
            ],
            [
                'id' => 100,
                'tema' => 'Interés Simple',
                'slogan' => 'Intereses calculados solo sobre el capital inicial.',
                'detalle' => 'Intereses que no se suman al capital para generar nuevos intereses.',
                'indice' => 0,
                'materia_id' => 1,
                'created_at' => '2023-09-06 16:08:21',
                'updated_at' => '2023-09-06 16:08:21',
            ],
            [
                'id' => 101,
                'tema' => 'Interes Compuesto',
                'slogan' => 'Los intereses generan nuevos intereses.',
                'detalle' => 'Intereses que se añaden al capital inicial, generando intereses en períodos futuros.',
                'indice' => 0,
                'materia_id' => 1,
                'created_at' => '2023-09-06 19:52:32',
                'updated_at' => '2023-09-06 19:52:32',
            ],

        ]);

        function getRandomImageUrl($width = 800, $height = 600) {
            $services = [
                // Picsum (permite especificar tamaño)
                "https://picsum.photos/{$width}/{$height}?random=".rand(1,1000),
                
                // Unsplash (imágenes más profesionales)
                
                // Placeholder (genérico)
                "https://picsum.photos/800/600?random=436",
            ];
            
            return $services[array_rand($services)];
        }
        
        // Ejemplo de creación de imágenes para temas
        $imageRecords = [];
        for ($i = 1; $i <= 101; $i++) {
            $imageRecords[] = [
                'imageable_id' => $i,
                'imageable_type' => 'App\Models\Tema',
                'url' => getRandomImageUrl()
            ];
        }
        
        // Para usar en tu seeder:
        foreach ($imageRecords as $record) {
            Imagen::create($record);
        }
        

        // Imagen::create(["imageable_id"=>5,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>6,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>7,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>8,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>9,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        
        // Imagen::create(["imageable_id"=>10,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>11,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>12,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>13,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>14,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>15,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>16,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>17,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>18,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>19,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
  
        // Imagen::create(["imageable_id"=>20,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>21,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>22,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>23,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>24,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>25,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>26,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>27,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>28,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>29,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
  
        // Imagen::create(["imageable_id"=>30,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>31,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>32,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>33,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>34,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>35,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>36,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>37,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>38,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>39,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
  
        // Imagen::create(["imageable_id"=>40,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>41,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>42,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>43,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>44,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>45,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>46,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>47,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>48,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>49,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
  
        // Imagen::create(["imageable_id"=>50,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>51,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>52,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>53,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>54,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>55,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>56,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>57,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>58,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>59,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
  
        // Imagen::create(["imageable_id"=>60,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>61,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>62,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>63,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>64,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>65,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>66,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>67,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>68,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>69,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
  
        // Imagen::create(["imageable_id"=>70,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>71,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>72,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>73,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>74,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>75,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>76,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>77,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>78,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>79,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
  
        // Imagen::create(["imageable_id"=>80,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>81,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>82,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>83,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>84,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>85,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>86,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>87,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>88,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>89,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
  
        // Imagen::create(["imageable_id"=>90,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        // Imagen::create(["imageable_id"=>91,"imageable_type"=>"App\Models\Tema","url"=>"temas/imagen.jpg"]);
        
    }
}


//         Tema::create([
//             "tema"=>"Potenciación",
//             "slogan"=>"Hazte más fuerte en matemáticas con nuestra ayuda en potenciación",
//             "detalle"=>"La potenciación es una operación matemática que consiste en multiplicar un número base por sí mismo un número determinado de veces, llamado exponente. Se representa por medio de un número base elevado a un exponente, por ejemplo, 2 elevado a la tercera potencia (2³) es igual a 2 x 2 x 2 = 8. La potenciación es una operación fundamental en la matemática y se utiliza para resolver una amplia variedad de problemas, desde cálculos simples hasta ecuaciones complejas en física, ingeniería y otras disciplinas científicas.",
//             "indice"=>1,
//             "materia_id"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"Radicación",
//             "slogan"=>"La radicación nunca ha sido tan fácil. ¡Confía en nosotros!",
//             "detalle"=>"La radicación es una operación matemática inversa a la potenciación. En lugar de elevar un número a una potencia, la radicación busca el número que, al ser elevado a una potencia determinada, producirá un resultado específico. La operación se representa mediante el símbolo radical (√) y el número que se busca se llama radicando. Por ejemplo, la raíz cuadrada de 25 (√25) es igual a 5, porque 5 x 5 = 25. La radicación se utiliza en una amplia variedad de aplicaciones, como en cálculos de medidas, ecuaciones matemáticas y estadísticas. Aprender a realizar operaciones de radicación es fundamental para el desarrollo de habilidades matemáticas avanzadas.",
//             "indice"=>2,
//             "materia_id"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"Ecuación Cuadrática",
//             "slogan"=>"Resolver ecuaciones cuadráticas es fácil con nuestra ayuda.",
//             "detalle"=>"Las ecuaciones de segundo grado, también conocidas como ecuaciones cuadráticas, son ecuaciones algebraicas en las que la variable desconocida tiene un exponente de dos. Se pueden representar gráficamente como una parábola y se utilizan en diversas áreas de las matemáticas y la física para modelar situaciones del mundo real. La fórmula cuadrática es una herramienta fundamental para resolver este tipo de ecuaciones y encontrar las soluciones posibles.",
//             "indice"=>0,
//             "materia_id"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"MOVIMIENTO RECTILINEO UNIFORME MRU",
//             "slogan"=>"Descubre la simplicidad del movimiento rectilíneo uniforme con nosotros",
//             "detalle"=>"El movimiento rectilíneo uniforme es un concepto básico de la física que describe el movimiento de un objeto que se mueve en línea recta a una velocidad constante. En otras palabras, la velocidad del objeto no cambia, lo que significa que no hay aceleración. El movimiento rectilíneo uniforme es un caso especial de movimiento uniforme, que es aquel en el que la velocidad es constante en magnitud y dirección. El movimiento rectilíneo uniforme se utiliza para modelar y analizar una amplia variedad de fenómenos físicos, desde el movimiento de un coche en una carretera recta hasta el movimiento de un satélite en órbita alrededor de la Tierra. Es un concepto fundamental en la física y es importante para entender conceptos más avanzados en esta disciplina.",
//             "indice"=>1,
//             "materia_id"=>2,
//         ]);
//         Tema::create([
//             "tema"=>"MOVIMIENTO RECTILINEO UNIFORMEMENTE VARIADO MRUV",
//             "slogan"=>" ¡Descubre la ciencia detrás del movimiento!",
//             "detalle"=>"El movimiento rectilíneo uniformemente variado, o MRUV, es un concepto clave en la física que se refiere al movimiento de un objeto que se desplaza en línea recta con una aceleración constante. En otras palabras, en un MRUV la velocidad del objeto cambia en igual cantidad en cada unidad de tiempo. El MRUV se utiliza para describir una amplia variedad de fenómenos físicos, como la caída libre de los objetos y la aceleración de los vehículos. Aprender a entender y resolver problemas de MRUV es fundamental para el desarrollo de habilidades avanzadas en física y es esencial para entender muchos aspectos de la ciencia y la tecnología modernas.",
//             "indice"=>2,
//             "materia_id"=>2,
//         ]);

//         Tema::create([
//             "tema"=>"LOGARITMOS",
//             "materia_id"=>1,
//             "slogan"=>"Descubre el poder de los logaritmos",
//             "detalle"=>"Los logaritmos son una herramienta matemática poderosa que se usa en muchas áreas diferentes. En este tema, aprenderás cómo funcionan los logaritmos, cómo calcularlos y cómo aplicarlos en problemas del mundo real.",
//             "indice"=>1,
//         ]);


//         Tema::create([
//             "tema"=>"INTRODUCCION A LA GEOMETRIA ANALITICA",
//             "materia_id"=>1,
//             "slogan"=>"Explora la belleza de la geometría analítica",
//             "detalle"=>"La geometría analítica combina la geometría y el álgebra para crear una herramienta poderosa para resolver problemas geométricos. En este tema, aprenderás los fundamentos de la geometría analítica, incluyendo cómo trabajar con coordenadas y cómo encontrar ecuaciones de líneas y formas geométricas.",
//             "indice"=>1,
//         ]);


//         Tema::create([
//             "tema"=>"PROGRESIONES ARITMETICAS Y GEOMETRICAS",
//             "materia_id"=>1,
//             "slogan"=>"Descubre el patrón detrás de las progresiones",
//             "detalle"=>"Las progresiones aritméticas y geométricas son secuencias numéricas que aparecen en muchos problemas y situaciones diferentes. En este tema, aprenderás cómo reconocer y trabajar con progresiones, incluyendo cómo encontrar términos y sumas.",
//             "indice"=>1,
//         ]);

// // Tema
//         Tema::create([
//             "tema"=>"LOGICA SIMBOLICA",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"DESIGUALDADES Y VALOR ABSOLUTO",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"RAZONES TRIGONOMETRICAS",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"TRIANGULOS RECTANGULOS",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"IDENTIDADES",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"SISTEMA DE ECUACIONES LINEALES",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"CONJUNTOS",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"FUNCIONES",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"RELACIONES",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"LA RECTA",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"LA CIRCUNFERECIA",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"LA PARABOLA",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"LA ELIPSE",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"LA HIPERBOLA",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"LIMITES",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"DERIVADAS",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"INTEGRALES",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"DESCOMPOSICION FACTORIAL",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"M.C.D. expresiones algebráicas",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"AREAS DE FIGURAS PLANAS",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"VOLUMENES DE CUERPOS",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"M.C.M de expresiones algebráicas",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"TRIANGULOS OBLICUANGULOS",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"RELACION INVERSA Y DIRECTAMENTE PROPORCIONALES",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"REGLA DE 3 SIMPLE Y COMPUESTA",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"CLASIFICACION DE LOS TRIANGULOS SEGUN SUS LADOS",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"CLASIFICACION DE LOS TRIANGULOS SEGUN SUS ANGULOS",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"PERIMETROS DE FIGURAS NOTABLES",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"AREA DE POLIGONOS POR COORDENADAS",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"CONVERSION DE FRACCIONES DECIMALES A FRACCIONES COMUNES",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"NOTACIÓN CIENTIFICA",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"PRODUCTOS NOTABLES",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"COCIENTES NOTABLES",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"BINOMIO DE NEWTON POR EL TRIANGULO DE PASSCAL Y POR COMBINATORIA",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"FACTORIAL,COMBINACION, PERMUTACION Y VARIACION",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"INDUCCION COMPLETA",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"NUMEROS COMLEJOS",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"MULTIPLICADORES DE LAGRANGE",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"GRAFICA DE FUNCIONES TRIGONOMETRICAS",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"CRITERIOS DE DIVISIBILIDAD",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
        
        
//         Tema::create([
//             "tema"=>"RAIZ CUADRADA Y RAIZ CUBICA",
//             "materia_id"=>1,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);

//         /** fisica  */
//         Tema::create([
//             "tema"=>"NOTACION CIENTIFICA",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"ESCALA TERMICA",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"DILATACION TERMICA",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"CALORIMETRIA",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"LEY DE LOS GASES",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"MOVIMIENTO RECTILINEO UNIFORMEMENTE VARIADO",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"MOVIMIENTO VERTICAL- CAIDA LIBRE",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"MOVIMIENTO PARABOLICO",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"MOVIMIENTO CIRCULAR UNIFORME",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"MOVIMIENTO CIRCULAR UNIFORMEMENTE VARIADO",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"MOVIMIENTO OSCILATORIO",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"DINAMICA DE PARTICULAS",
//             "materia_id"=>2,
//             "slogan"=>"",
            
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"FUERZA ELECTRICA",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"CAMPO ELECTRICO",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"POTENCIAL ELECTRICO",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"TRABAJO ELECTRICO",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"CAPACIDAD ELECTRICA",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"ASOCIACION DE CONDENSADORES",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::
        
//         create([
//             "tema"=>"CIRCUITOS ELECTRICOS",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"LEYES DE KIRCHHOFF",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"LEYES DE KEPLER",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"OPTICA",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"TERMODINAMICA",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"ELECTROMAGNETISMO",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",

//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"EQUILIBRIO TERMICO",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"CAMBIOS DE ESTADO",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);


//         Tema::create([
//             "tema"=>"TEORIA DE ERRORES",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"CENTROS DE GRAVEDAD Y MOMENTOS DE INERCIA",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"PRINCIO DE ARQUIMEDES",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"PRICIPIO DE PASCAL",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         /*80*/
//         Tema::create([
//             "tema"=>"EMPUJES Y FLOTACION",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"ECUACION DE CONTINUDAD",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"ECUACION DE BERNOULLI",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"LEY DE LA CONSERVACION DE LA ENERGIA",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"LEY DE LA CONSERVACION DE LA CANTIDAD DE MOVIMIENTO",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"TRABAJO,ENERGIA Y POTENCIA",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"CORRIENTE ELECTRICA",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"VECTORES",

//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"GRAVITACION UNIVERSAL",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"LEYES DE TERMODINAMICA",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);
//         Tema::create([
//             "tema"=>"ECUACIONES DIMENSIONALES",
//             "materia_id"=>2,
//             "slogan"=>"",
//             "detalle"=>"",
//             "indice"=>1,
//         ]);

//         Imagen::create([
//             "imageable_id"=>1,
//             "imageable_type"=>"App\Models\Tema",
//             "url"=>"temas/imagen.jpg",
//         ]);

//         Imagen::create([
//             "imageable_id"=>2,
//             "imageable_type"=>"App\Models\Tema",
//             "url"=>"temas/imagen.jpg",
//         ]);
//         Imagen::create([
//             "imageable_id"=>3,
//             "imageable_type"=>"App\Models\Tema",
//             "url"=>"temas/imagen.jpg",
//         ]);
//         Imagen::create([
//             "imageable_id"=>4,
//             "imageable_type"=>"App\Models\Tema",
//             "url"=>"temas/imagen.jpg",
//         ]);
