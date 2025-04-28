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
        $formulas = [
            [
                'id' => 1,
                'nombre' => 'Fórmula cuadrática',
                'formula' => '$$x=\\frac{-b\\pm\\sqrt[2]{b^2-4ac}}{2a} \\\\\\Delta=b^2-4ac\\\\Si:\\:\\Delta >0\\:\\exists\\:dos \\:sol.\\:reales\\:y\\:diferentes\\\\Si:\\:\\Delta=0\\:\\exists\\:dos\\:sol.\\:reales\\:e\\:iguales\\\\Si:\\Delta<0\\:\\nexists\\:sol.reales\\:sino\\:complejas$$',
                'detalle' => 'Solución general para ecuaciones de segundo grado. El discriminante (Δ) determina el tipo de raíces.',
                'indice' => 0,
                'tema_id' => 3,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-06-14 19:05:48'
            ],
            [
                'id' => 2,
                'nombre' => 'Suma de raices',
                'formula' => '$$ x_1+x_2=\\frac{-b}{a} $$',
                'detalle' => 'Relación entre coeficientes y suma de soluciones en ecuaciones cuadráticas.',
                'indice' => 0,
                'tema_id' => 3,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39'
            ],
            [
                'id' => 3,
                'nombre' => 'Producto de raices',
                'formula' => '$$ x_1 \\cdot x_2=\\frac{c}{a} $$',
                'detalle' => 'Relación entre coeficientes y producto de soluciones en ecuaciones cuadráticas.',
                'indice' => 0,
                'tema_id' => 3,
                'created_at' => '2023-04-17 01:24:39',
                'updated_at' => '2023-04-17 01:24:39'
            ],
            [
                'id' => 4,
                'nombre' => 'Resta de raices',
                'formula' => '$$x_1 - x_2 = \\frac{-b - \\sqrt{b^2 - 4ac}}{2a} - \\frac{-b + \\sqrt{b^2 - 4ac}}{2a}$$',
                'detalle' => 'Diferencia entre las soluciones de una ecuación cuadrática.',
                'indice' => 0,
                'tema_id' => 20,
                'created_at' => '2023-04-03 20:18:52',
                'updated_at' => '2023-04-03 20:18:52'
            ],
            [
                'id' => 5,
                'nombre' => 'Potencia',
                'formula' => '$$a^n =c\\:\\:\\:;\\:\\:\\:\\:\\forall\\:a\\in\\Re\\:\\wedge\\:n\\in{N}\\\\a=base\\:\\:;n=exponente$$',
                'detalle' => 'Definición básica de potenciación con base real y exponente natural.',
                'indice' => 0,
                'tema_id' => 1,
                'created_at' => '2023-04-03 22:11:18',
                'updated_at' => '2023-11-25 19:21:49'
            ],
            [
                'id' => 6,
                'nombre' => 'Producto de potencias de la misma base',
                'formula' => '$$a^m \\cdot a^n=a^{n+m}$$',
                'detalle' => 'Al multiplicar potencias con igual base, se suman los exponentes.',
                'indice' => 0,
                'tema_id' => 1,
                'created_at' => '2023-04-03 22:11:58',
                'updated_at' => '2023-04-04 02:28:10'
            ],
            [
                'id' => 7,
                'nombre' => 'Raiz enésima de un producto',
                'formula' => '$$\\sqrt[n]{a\\cdot b}=\\sqrt[n]{a}\\cdot\\sqrt[n]{b}$$',
                'detalle' => 'La raíz de un producto es igual al producto de las raíces.',
                'indice' => 0,
                'tema_id' => 2,
                'created_at' => '2023-04-03 22:59:34',
                'updated_at' => '2023-04-06 21:42:47'
            ],
            [
                'id' => 8,
                'nombre' => 'Potencia de una potencia',
                'formula' => '$${(a^n)^m}=a^{n \\cdot m}$$',
                'detalle' => 'Para elevar una potencia a otra potencia, se multiplican los exponentes.',
                'indice' => 0,
                'tema_id' => 1,
                'created_at' => '2023-04-04 06:06:51',
                'updated_at' => '2023-04-05 20:05:32'
            ],
            [
                'id' => 9,
                'nombre' => 'Identidades Pitagóricas 1',
                'formula' => '$$sin^2x+cos^2x=1$$',
                'detalle' => 'Identidad fundamental que relaciona el seno y coseno de un ángulo.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 06:25:36',
                'updated_at' => '2023-04-04 22:47:32'
            ],
            [
                'id' => 10,
                'nombre' => 'Identidades Pitagóricas 2',
                'formula' => '$$1+tan^2x=csc^2x$$',
                'detalle' => 'Identidad que relaciona tangente y cosecante.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 06:28:43',
                'updated_at' => '2023-04-04 22:47:59'
            ],
            [
                'id' => 11,
                'nombre' => 'Identidad de la suma y diferencia de ángulos de Seno',
                'formula' => '$$\\sin(x\\pm{y})=\\sin{x}\\cdot\\cos{y}\\pm\\cos{x}\\cdot\\sin{y}$$',
                'detalle' => 'Fórmula para el seno de la suma o diferencia de dos ángulos.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 06:40:36',
                'updated_at' => '2023-04-05 21:27:46'
            ],
            [
                'id' => 12,
                'nombre' => 'Identidad de la suma y diferencia de ángulos de Coseno',
                'formula' => '$$\\cos(x\\pm{y})=\\cos{x}\\cdot\\cos{y}\\mp\\ sinx\\cdot\\cos{x}$$',
                'detalle' => 'Fórmula para el coseno de la suma o diferencia de dos ángulos.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 06:53:17',
                'updated_at' => '2023-04-05 21:29:08'
            ],
            [
                'id' => 13,
                'nombre' => 'Potencia con exponente 0',
                'formula' => '$$\\ a^0=1\\:\\:\\:\\:\\:a\\ne 0$$',
                'detalle' => 'Cualquier número (excepto cero) elevado a 0 es igual a 1.',
                'indice' => 0,
                'tema_id' => 1,
                'created_at' => '2023-04-04 19:55:24',
                'updated_at' => '2023-04-04 20:00:40'
            ],
            [
                'id' => 14,
                'nombre' => 'División o cociente de potencias de la misma base',
                'formula' => '$$\\frac{a^m}{a^n}=a^{n-m}$$',
                'detalle' => 'Al dividir potencias con igual base, se restan los exponentes.',
                'indice' => 0,
                'tema_id' => 1,
                'created_at' => '2023-04-04 20:10:32',
                'updated_at' => '2023-04-05 20:04:47'
            ],
            [
                'id' => 15,
                'nombre' => 'Resta o diferencia de sus raices',
                'formula' => '$$x_1 - x_2 =\\frac{\\sqrt{b^2 - 4ac}}{a}$$',
                'detalle' => 'Diferencia entre las raíces de una ecuación cuadrática.',
                'indice' => 0,
                'tema_id' => 3,
                'created_at' => '2023-04-04 20:23:01',
                'updated_at' => '2023-06-14 19:09:55'
            ],
            [
                'id' => 16,
                'nombre' => 'Identidad de la suma y diferencia de ángulos de Tangente',
                'formula' => '$$\\tan(x\\pm y) = \\frac{\\tan{x}\\pm\\tan{y}}{1\\mp\\tan{x}\\cdot\\tan{y}}$$',
                'detalle' => 'Fórmula para la tangente de la suma o diferencia de ángulos.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 22:46:01',
                'updated_at' => '2023-04-05 21:30:01'
            ],
            [
                'id' => 17,
                'nombre' => 'Identidad del cociente de Tangente',
                'formula' => '$$\\tan{x} = \\frac{\\sin{x}}{\\cos{x}}$$',
                'detalle' => 'Definición de tangente como cociente de seno y coseno.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 22:54:20',
                'updated_at' => '2023-04-05 21:30:47'
            ],
            [
                'id' => 18,
                'nombre' => 'Identidad del cociente de Cotangente',
                'formula' => '$$\\cot{x}=\\frac{\\cos{x}}{\\sin{x}}$$',
                'detalle' => 'Definición de cotangente como cociente de coseno y seno.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 22:57:04',
                'updated_at' => '2023-04-05 21:31:34'
            ],
            [
                'id' => 19,
                'nombre' => 'Identidad recíproca de Seno',
                'formula' => '$$\\csc{x} =\\frac{1}{\\sin{x}}$$',
                'detalle' => 'Cosecante como inverso del seno.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 23:01:34',
                'updated_at' => '2023-04-05 21:33:12'
            ],
            [
                'id' => 20,
                'nombre' => 'Identidad recíproca de Coseno',
                'formula' => '$$\\sec{x} = \\frac{1}{\\cos{x}}$$',
                'detalle' => 'Secante como inverso del coseno.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 23:03:34',
                'updated_at' => '2023-04-05 21:32:44'
            ],
            [
                'id' => 21,
                'nombre' => 'Identidad recíproca de Tangente',
                'formula' => '$$\\cot{x}=\\frac{1}{\\tan{x}}$$',
                'detalle' => 'Cotangente como inverso de la tangente.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 23:07:44',
                'updated_at' => '2023-04-05 21:34:03'
            ],
            [
                'id' => 22,
                'nombre' => 'Identidad del ángulo doble Seno',
                'formula' => '$$\\sin(2x) =2\\cdot\\sin{x}\\cdot\\cos{x}$$',
                'detalle' => 'Fórmula para el seno del doble de un ángulo.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 23:17:50',
                'updated_at' => '2023-04-05 21:34:46'
            ],
            [
                'id' => 23,
                'nombre' => 'Identidad del ángulo doble de Coseno 1',
                'formula' => '$$\\cos(2x)=\\cos^2{x} - \\sin^2{x}$$',
                'detalle' => 'Primera versión para el coseno de ángulo doble.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 23:20:39',
                'updated_at' => '2023-04-05 21:35:47'
            ],
            [
                'id' => 24,
                'nombre' => 'Identidad del ángulo doble Coseno 2',
                'formula' => '$$\\cos(2x) = 1- 2\\cdot\\sin^2{x}$$',
                'detalle' => 'Segunda versión para el coseno de ángulo doble.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 23:23:28',
                'updated_at' => '2023-04-05 21:36:21'
            ],
            [
                'id' => 25,
                'nombre' => 'Identidad del ángulo doble de Coseno 3',
                'formula' => '$$\\cos(2x) =  2\\cdot\\cos^2{x}-1$$',
                'detalle' => 'Tercera versión para el coseno de ángulo doble.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 23:26:33',
                'updated_at' => '2023-04-05 21:36:57'
            ],
            [
                'id' => 26,
                'nombre' => 'Potencia con exponente 1',
                'formula' => '$$\\ a^1=a$$',
                'detalle' => 'Todo número elevado a la potencia 1 es igual a sí mismo.',
                'indice' => 0,
                'tema_id' => 1,
                'created_at' => '2023-04-04 23:31:41',
                'updated_at' => '2023-04-04 23:31:41'
            ],
            [
                'id' => 27,
                'nombre' => 'Identidad del ángulo doble de Tangente',
                'formula' => '$$\\tan(2x) =\\frac{2\\cdot\\tan{x}}{1-\\tan^2{x}}$$',
                'detalle' => 'Fórmula para la tangente del doble de un ángulo.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 23:33:06',
                'updated_at' => '2023-04-05 21:38:07'
            ],
            [
                'id' => 28,
                'nombre' => 'Producto de potencias con base diferente y exponentes iguales',
                'formula' => '$$a^m\\cdot \\:b^m=\\left(a\\cdot \\:b\\right)^m$$',
                'detalle' => 'Producto de potencias con mismo exponente se convierte en potencia del producto.',
                'indice' => 0,
                'tema_id' => 1,
                'created_at' => '2023-04-04 23:34:10',
                'updated_at' => '2023-04-05 20:06:08'
            ],
            [
                'id' => 29,
                'nombre' => 'Identidad del ángulo doble de Seno 2',
                'formula' => '$$\\sin(2x) =\\frac{2\\cdot\\tan{x}}{1+\\tan^2{x}}$$',
                'detalle' => 'Versión alternativa para seno de ángulo doble usando tangente.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 23:36:58',
                'updated_at' => '2023-04-05 21:39:06'
            ],
            [
                'id' => 30,
                'nombre' => 'Identidad del ángulo doble de Coseno 4',
                'formula' => '$$\\cos(2x)=\\frac{1-\\tan^2{x}}{1+\\tan^2{x}}$$',
                'detalle' => 'Versión alternativa para coseno de ángulo doble usando tangente.',
                'indice' => 0,
                'tema_id' => 13,
                'created_at' => '2023-04-04 23:41:54',
                'updated_at' => '2023-04-05 21:39:45'
            ],

             [
        'id' => 31,
        'nombre' => 'Raíz de un cociente',
        'formula' => '$$\\sqrt[n]{\\frac{a}{b}}=\\frac{\\sqrt[n]{a}}{\\sqrt[n]{b}}$$',
        'detalle' => 'La raíz de un cociente es igual al cociente de las raíces.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-04 23:49:01',
        'updated_at' => '2023-04-06 21:09:43'
    ],
    [
        'id' => 32,
        'nombre' => 'Identidad del ángulo triple de Seno 1',
        'formula' => '$$\\sin(3x)= 3\\sin{x} -4\\cdot\\sin^3{x}$$',
        'detalle' => 'Primera versión para el seno del triple de un ángulo.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-04 23:49:13',
        'updated_at' => '2023-04-05 21:40:32'
    ],
    [
        'id' => 33,
        'nombre' => 'Identidad del ángulo triple de Seno 2',
        'formula' => '$$\\sin(3x)=3\\cdot\\cos^2{x}\\cdot\\sin{x}-\\sin^3{x}$$',
        'detalle' => 'Segunda versión para el seno del triple de un ángulo.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-04 23:52:37',
        'updated_at' => '2023-04-05 21:41:17'
    ],
    [
        'id' => 34,
        'nombre' => 'Raíz con exponente negativo',
        'formula' => '$$\\sqrt[n]{\\frac{a}{b^{-1}}}=\\sqrt[n]{ab}$$',
        'detalle' => 'Propiedad de raíces con exponentes negativos en denominador.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-04 23:55:45',
        'updated_at' => '2023-04-06 21:38:47'
    ],
    [
        'id' => 35,
        'nombre' => 'Identidad del ángulo triple de Coseno 1',
        'formula' => '$$\\cos(3x)=4\\cdot\\cos^3{x}-3\\cdot\\cos{x}$$',
        'detalle' => 'Primera versión para el coseno del triple de un ángulo.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-04 23:56:31',
        'updated_at' => '2023-04-05 21:42:41'
    ],
    [
        'id' => 36,
        'nombre' => 'Identidad del ángulo triple de Coseno 2',
        'formula' => '$$\\cos(3x)=\\cos^3{x} -3\\cdot\\sin^2{x}\\cdot\\cos{x}$$',
        'detalle' => 'Segunda versión para el coseno del triple de un ángulo.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 02:13:50',
        'updated_at' => '2023-04-05 21:43:43'
    ],
    [
        'id' => 37,
        'nombre' => 'Cociente de potencias con igual exponente',
        'formula' => '$$\\frac{a^n}{b^n}\\:=\\left(\\frac{a}{b}\\right)^n$$',
        'detalle' => 'El cociente de potencias con mismo exponente es la potencia del cociente.',
        'indice' => 0,
        'tema_id' => 1,
        'created_at' => '2023-04-05 02:17:57',
        'updated_at' => '2023-04-05 02:20:33'
    ],
    [
        'id' => 38,
        'nombre' => 'Teorema de Pitágoras',
        'formula' => '$$c^2=a^2+b^2$$',
        'detalle' => 'En triángulos rectángulos: hipotenusa² = suma de catetos².',
        'indice' => 0,
        'tema_id' => 12,
        'created_at' => '2023-04-05 02:24:05',
        'updated_at' => '2023-04-05 02:28:05'
    ],
    [
        'id' => 39,
        'nombre' => 'Teorema de Pitágoras (alternativo)',
        'formula' => '$$c^2=a^2+b^2$$',
        'detalle' => 'Relación fundamental en triángulos rectángulos.',
        'indice' => 0,
        'tema_id' => 12,
        'created_at' => '2023-04-05 02:33:46',
        'updated_at' => '2023-04-05 02:33:46'
    ],
    [
        'id' => 40,
        'nombre' => 'Área de triángulo rectángulo',
        'formula' => '$$A=\\frac{b\\cdot h}{2}$$',
        'detalle' => 'Área = (base × altura)/2 para triángulos rectángulos.',
        'indice' => 0,
        'tema_id' => 12,
        'created_at' => '2023-04-05 02:37:46',
        'updated_at' => '2023-04-05 03:37:28'
    ],
    [
        'id' => 41,
        'nombre' => 'Perímetro de triángulo rectángulo',
        'formula' => '$$P=a+b+c$$',
        'detalle' => 'Suma de las longitudes de los tres lados.',
        'indice' => 0,
        'tema_id' => 12,
        'created_at' => '2023-04-05 02:41:26',
        'updated_at' => '2023-04-05 03:37:42'
    ],
    [
        'id' => 42,
        'nombre' => 'Suma de ángulos internos',
        'formula' => '$$A+B+C=180º$$',
        'detalle' => 'En cualquier triángulo, los ángulos internos suman 180°.',
        'indice' => 0,
        'tema_id' => 12,
        'created_at' => '2023-04-05 02:46:46',
        'updated_at' => '2023-04-05 03:47:43'
    ],
    [
        'id' => 43,
        'nombre' => 'Cálculo de un cateto (versión a)',
        'formula' => '$$a=\\sqrt{c^2-b^2}$$',
        'detalle' => 'Calcula un cateto conocidos la hipotenusa y el otro cateto.',
        'indice' => 0,
        'tema_id' => 12,
        'created_at' => '2023-04-05 02:52:20',
        'updated_at' => '2023-04-05 03:37:56'
    ],
    [
        'id' => 44,
        'nombre' => 'Cálculo de un cateto (versión b)',
        'formula' => '$$b=\\sqrt{c^2-a^2}$$',
        'detalle' => 'Calcula un cateto conocidos la hipotenusa y el otro cateto.',
        'indice' => 0,
        'tema_id' => 12,
        'created_at' => '2023-04-05 02:56:21',
        'updated_at' => '2023-04-05 03:38:09'
    ],
    [
        'id' => 45,
        'nombre' => 'Seno de un ángulo',
        'formula' => '$$\\sin \\left(α\\right)=\\frac{Cateto\\:Opuesto}{Hipotenusa}$$',
        'detalle' => 'Razón trigonométrica: opuesto/hipotenusa.',
        'indice' => 0,
        'tema_id' => 11,
        'created_at' => '2023-04-05 03:02:23',
        'updated_at' => '2023-04-05 04:07:28'
    ],
    [
        'id' => 46,
        'nombre' => 'Coseno de un ángulo',
        'formula' => '$$\\cos \\left(α\\right)=\\frac{Cateto\\:Adyacente\\:}{Hipotenusa}$$',
        'detalle' => 'Razón trigonométrica: adyacente/hipotenusa.',
        'indice' => 0,
        'tema_id' => 11,
        'created_at' => '2023-04-05 03:07:42',
        'updated_at' => '2023-04-05 04:07:41'
    ],
    [
        'id' => 47,
        'nombre' => 'Tangente de un ángulo',
        'formula' => '$$\\tan \\left(α\\right)=\\frac{Cateto\\:Opuesto}{Cateto\\:Adyacente}$$',
        'detalle' => 'Razón trigonométrica: opuesto/adyacente.',
        'indice' => 0,
        'tema_id' => 11,
        'created_at' => '2023-04-05 03:13:47',
        'updated_at' => '2023-04-05 04:07:51'
    ],
    [
        'id' => 48,
        'nombre' => 'Cosecante de un ángulo',
        'formula' => '$$\\csc \\left(α\\right)=\\frac{Hipotenusa}{Cateto\\:Opuesto}$$',
        'detalle' => 'Razón trigonométrica inversa al seno.',
        'indice' => 0,
        'tema_id' => 11,
        'created_at' => '2023-04-05 03:21:09',
        'updated_at' => '2023-04-05 04:08:02'
    ],
    [
        'id' => 49,
        'nombre' => 'Secante de un ángulo',
        'formula' => '$$\\sec \\left(α\\right)=\\frac{Hipotenusa\\:}{Cateto\\:Adyacente}$$',
        'detalle' => 'Razón trigonométrica inversa al coseno.',
        'indice' => 0,
        'tema_id' => 11,
        'created_at' => '2023-04-05 03:25:51',
        'updated_at' => '2023-04-05 04:08:15'
    ],
    [
        'id' => 50,
        'nombre' => 'Cotangente de un ángulo',
        'formula' => '$$\\cot \\left(α\\right)=\\frac{Cateto\\:Adyacente\\:}{Cateto\\:Opuesto}$$',
        'detalle' => 'Razón trigonométrica inversa a la tangente.',
        'indice' => 0,
        'tema_id' => 11,
        'created_at' => '2023-04-05 03:30:24',
        'updated_at' => '2023-04-05 04:08:26'
    ],
    [
        'id' => 51,
        'nombre' => 'Cotangente de Alfa',
        'formula' => '$$\\cot \\left(α\\right)=\\frac{b}{a}$$',
        'detalle' => 'Razón trigonométrica: adyacente/opuesto en triángulo rectángulo.',
        'indice' => 0,
        'tema_id' => 11,
        'created_at' => '2023-04-05 03:30:25',
        'updated_at' => '2023-04-05 03:30:25'
    ],
    [
        'id' => 52,
        'nombre' => 'Logaritmo de un producto',
        'formula' => '$$\\log _B\\left(A\\cdot \\:C\\right)=\\log _B\\left(A\\right)+\\log _B\\left(C\\right)$$',
        'detalle' => 'El logaritmo de un producto es la suma de logaritmos.',
        'indice' => 0,
        'tema_id' => 6,
        'created_at' => '2023-04-05 05:52:54',
        'updated_at' => '2023-04-05 05:52:54'
    ],
    [
        'id' => 53,
        'nombre' => 'Definición de logaritmos',
        'formula' => '$$\\log _B\\left(A\\right)=C$$',
        'detalle' => 'Relación fundamental: si log_B(A)=C entonces B^C=A.',
        'indice' => 0,
        'tema_id' => 6,
        'created_at' => '2023-04-05 05:53:33',
        'updated_at' => '2023-04-05 05:53:33'
    ],
    [
        'id' => 54,
        'nombre' => 'Logaritmo de producto (alternativo)',
        'formula' => '$$\\log_b\\left(ac\\right)=\\log_b\\left(a\\right)+\\log_b\\left(c\\right)$$',
        'detalle' => 'Propiedad de conversión de producto a suma de logaritmos.',
        'indice' => 0,
        'tema_id' => 6,
        'created_at' => '2023-04-05 06:19:38',
        'updated_at' => '2023-04-06 02:25:54'
    ],
    [
        'id' => 55,
        'nombre' => 'Exponente negativo',
        'formula' => '$$\\ a^{-n}=\\frac{1}{a^n}\\:\\:\\:\\:\\:\\:\\:a\\ne 0$$',
        'detalle' => 'Un exponente negativo representa el inverso de la potencia positiva.',
        'indice' => 0,
        'tema_id' => 1,
        'created_at' => '2023-04-05 19:51:55',
        'updated_at' => '2023-04-05 19:51:55'
    ],
    [
        'id' => 56,
        'nombre' => 'Producto a suma (seno-coseno)',
        'formula' => '$$\\sin{x}\\cdot\\cos{y}=\\frac{1}{2}\\cdot[\\sin(x+y)+\\sin(x-y)]$$',
        'detalle' => 'Conversión de producto de funciones trigonométricas a suma.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 19:55:05',
        'updated_at' => '2023-04-05 20:04:12'
    ],
    [
        'id' => 57,
        'nombre' => 'Raíz de potencia',
        'formula' => '$$\\sqrt[n]{a^{^m}}=a^{\\frac{m}{n}}$$',
        'detalle' => 'La raíz de una potencia puede expresarse como potencia fraccionaria.',
        'indice' => 0,
        'tema_id' => 1,
        'created_at' => '2023-04-05 19:59:30',
        'updated_at' => '2023-04-05 19:59:30'
    ],
    [
        'id' => 58,
        'nombre' => 'Producto a diferencia (seno-seno)',
        'formula' => '$$\\sin{x}\\cdot\\sin{y}=\\frac12\\cdot[\\cos(x-y)-\\cos(x+y)]$$',
        'detalle' => 'Conversión de producto de senos a diferencia de cosenos.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 19:59:43',
        'updated_at' => '2023-04-05 20:10:27'
    ],
    [
        'id' => 59,
        'nombre' => 'Producto a diferencia (coseno-seno)',
        'formula' => '$$\\cos{x}\\cdot\\sin{y}=\\frac12\\cdot[\\sin(x+y)-\\sin(x-y)]$$',
        'detalle' => 'Conversión de producto mixto a diferencia de senos.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 20:03:11',
        'updated_at' => '2023-04-05 20:09:29'
    ],
    [
        'id' => 60,
        'nombre' => 'Producto a suma (coseno-coseno)',
        'formula' => '$$\\cos{x}\\cdot\\cos{y}= \\frac12\\cdot[\\cos(x+y)+\\cos(x-y)]$$',
        'detalle' => 'Conversión de producto de cosenos a suma de cosenos.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 20:08:54',
        'updated_at' => '2023-04-05 20:08:54'
    ],
    [
        'id' => 61,
        'nombre' => 'Ángulo medio de seno',
        'formula' => '$$\\sin(\\frac{x}{2})=\\pm\\sqrt\\frac{1-\\cos{x}}{2}$$',
        'detalle' => 'Fórmula para calcular el seno de medio ángulo.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 20:18:10',
        'updated_at' => '2023-04-05 21:50:02'
    ],
    [
        'id' => 62,
        'nombre' => 'Ángulo medio de coseno',
        'formula' => '$$\\cos( \\frac{x}{2})=\\pm\\sqrt\\frac{1+\\cos{x}}{2}$$',
        'detalle' => 'Fórmula para calcular el coseno de medio ángulo.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 20:22:16',
        'updated_at' => '2023-04-05 21:51:36'
    ],
    [
        'id' => 63,
        'nombre' => 'Ángulo medio de tangente (versión 1)',
        'formula' => '$$\\tan(\\frac{x}{2})=\\pm\\sqrt\\frac{1-\\cos{x}}{1+\\cos{x}}$$',
        'detalle' => 'Primera versión para tangente de medio ángulo.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 20:27:13',
        'updated_at' => '2023-04-05 21:53:00'
    ],
    [
        'id' => 64,
        'nombre' => 'Ángulo medio de tangente (versión 2)',
        'formula' => '$$\\tan(\\frac{x}{2})=\\frac{\\sin{x}}{1+\\cos{x}}$$',
        'detalle' => 'Segunda versión para tangente de medio ángulo.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 20:32:13',
        'updated_at' => '2023-04-05 21:54:21'
    ],
    [
        'id' => 65,
        'nombre' => 'Ángulo medio de tangente (versión 3)',
        'formula' => '$$\\tan(\\frac{x}{2})=\\frac{1-\\cos{x}}{\\sin{x}}$$',
        'detalle' => 'Tercera versión para tangente de medio ángulo.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 20:36:29',
        'updated_at' => '2023-04-05 21:54:59'
    ],
    [
        'id' => 66,
        'nombre' => 'Ángulo medio de cotangente',
        'formula' => '$$\\cot(\\frac{x}{2})=\\csc{x} +\\cot{x}$$',
        'detalle' => 'Fórmula para cotangente de medio ángulo.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 20:39:18',
        'updated_at' => '2023-04-05 21:55:40'
    ],
    [
        'id' => 67,
        'nombre' => 'Tangente de semi-suma',
        'formula' => '$$\\tan(\\frac{x+y}{2})=\\frac{\\sin{x}+\\sin{y}}{\\cos{x}+\\cos{y}}$$',
        'detalle' => 'Fórmula para tangente del promedio de dos ángulos.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 20:44:11',
        'updated_at' => '2023-04-05 21:59:57'
    ],
    [
        'id' => 68,
        'nombre' => 'Suma/diferencia a producto (seno)',
        'formula' => '$$\\sin{x}\\pm\\sin{y}=2\\cdot\\sin(\\frac{x\\pm{y}}{2})\\cdot\\cos(\\frac{x\\mp{y}}{2})$$',
        'detalle' => 'Conversión de suma/diferencia de senos a producto.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 20:58:42',
        'updated_at' => '2023-04-05 22:01:33'
    ],
    [
        'id' => 69,
        'nombre' => 'Suma a producto (coseno)',
        'formula' => '$$\\cos{x}+\\cos{y}=2\\cdot\\cos(\\frac{x+y}{2})\\cdot\\cos(\\frac{x-y}{2})$$',
        'detalle' => 'Conversión de suma de cosenos a producto.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 21:03:07',
        'updated_at' => '2023-04-05 22:04:03'
    ],
    [
        'id' => 70,
        'nombre' => 'Diferencia a producto (coseno)',
        'formula' => '$$\\cos{x}-\\cos{y}=-2\\cdot\\sin(\\frac{x+y}{2})\\cdot\\sin(\\frac{x-y}{2})$$',
        'detalle' => 'Conversión de diferencia de cosenos a producto.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 21:09:11',
        'updated_at' => '2023-04-05 22:04:35'
    ],
    [
        'id' => 71,
        'nombre' => 'Suma/diferencia a producto (tangente)',
        'formula' => '$$\\tan{x}\\pm\\tan{y}=\\frac{\\sin({x}\\pm{y})}{\\cos{x}\\cdot\\cos{y}}$$',
        'detalle' => 'Conversión de suma/diferencia de tangentes a cociente trigonométrico.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-04-05 21:14:27',
        'updated_at' => '2023-04-05 22:05:23'
    ],
    [
        'id' => 72,
        'nombre' => 'Producto de raices iguales',
        'formula' => '$$\\sqrt{a}\\cdot\\sqrt{a}=a$$',
        'detalle' => 'La raíz cuadrada de un número multiplicada por sí misma da el número original.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-05 22:03:11',
        'updated_at' => '2023-04-05 22:03:11'
    ],
    [
        'id' => 73,
        'nombre' => 'Término general de progresión aritmética',
        'formula' => '$$a_n= a_1+(n- 1)\\cdot{d}$$',
        'detalle' => 'Fórmula para encontrar el n-ésimo término en una sucesión aritmética.',
        'indice' => 0,
        'tema_id' => 8,
        'created_at' => '2023-04-05 23:12:08',
        'updated_at' => '2023-04-05 23:12:08'
    ],
    [
        'id' => 74,
        'nombre' => 'Término general de PA (alternativo)',
        'formula' => '$$a_n= a_1+(n- 1)\\cdot{d}$$',
        'detalle' => 'Versión alternativa para el término n-ésimo en progresiones aritméticas.',
        'indice' => 0,
        'tema_id' => 8,
        'created_at' => '2023-04-05 23:14:16',
        'updated_at' => '2023-04-05 23:14:16'
    ],
    [
        'id' => 75,
        'nombre' => 'Potencia negativa de fracción',
        'formula' => '$$\\left(\\frac{a}{b}\\right)^{-n}=\\left(\\frac{b}{a}\\right)^{n}$$',
        'detalle' => 'Una fracción elevada a exponente negativo equivale a la inversa con exponente positivo.',
        'indice' => 0,
        'tema_id' => 1,
        'created_at' => '2023-04-06 02:16:08',
        'updated_at' => '2023-04-06 02:16:08'
    ],
    [
        'id' => 76,
        'nombre' => 'Ley de Senos',
        'formula' => '$$\\frac{a}{\\sin \\left(A\\right)}=\\frac{b}{\\sin \\left(B\\right)}=\\frac{c}{\\sin \\left(C\\right)}$$',
        'detalle' => 'Relación constante entre lados y senos de ángulos opuestos en triángulos.',
        'indice' => 0,
        'tema_id' => 31,
        'created_at' => '2023-04-06 02:17:22',
        'updated_at' => '2023-04-06 02:17:22'
    ],
    [
        'id' => 77,
        'nombre' => 'Logaritmo de cociente',
        'formula' => '$$\\log_b\\left(\\frac{a}{c}\\right)=\\log_b\\left(a\\right)-\\log_b\\left(c\\right)$$',
        'detalle' => 'El logaritmo de un cociente es la diferencia de logaritmos.',
        'indice' => 0,
        'tema_id' => 6,
        'created_at' => '2023-04-06 02:22:52',
        'updated_at' => '2023-04-06 02:22:52'
    ],
    [
        'id' => 78,
        'nombre' => 'Ley de Cosenos (lado a)',
        'formula' => '$$a^2=b^2+c^2-2bc\\cdot \\cos \\left(A\\right)$$',
        'detalle' => 'Relación entre lados y ángulo opuesto en triángulos no rectángulos.',
        'indice' => 0,
        'tema_id' => 31,
        'created_at' => '2023-04-06 02:26:07',
        'updated_at' => '2023-04-06 02:26:07'
    ],
    [
        'id' => 79,
        'nombre' => 'Ley de Cosenos (lado b)',
        'formula' => '$$b^2=a^2+c^2-2ac\\cdot \\cos \\left(B\\right)$$',
        'detalle' => 'Versión para calcular el lado b usando ángulo opuesto B.',
        'indice' => 0,
        'tema_id' => 31,
        'created_at' => '2023-04-06 02:28:40',
        'updated_at' => '2023-04-06 02:28:40'
    ],
    [
        'id' => 80,
        'nombre' => 'Ley de Cosenos (lado c)',
        'formula' => '$$c^2=a^2+b^2-2ab\\cdot \\cos \\left(C\\right)$$',
        'detalle' => 'Versión para calcular el lado c usando ángulo opuesto C.',
        'indice' => 0,
        'tema_id' => 31,
        'created_at' => '2023-04-06 02:29:58',
        'updated_at' => '2023-04-06 02:29:58'
    ],
    [
        'id' => 81,
        'nombre' => 'Logaritmo de la misma base',
        'formula' => '$$\\log_b\\left(b\\right)=1                ;          \\ln\\left(e\\right)=1$$',
        'detalle' => 'El logaritmo de un número en su misma base siempre es 1.',
        'indice' => 0,
        'tema_id' => 6,
        'created_at' => '2023-04-06 02:33:12',
        'updated_at' => '2023-04-06 03:57:09'
    ],
    [
        'id' => 82,
        'nombre' => 'Logaritmo de una potencia ( Caso 1 )',
        'formula' => '$$\\log_b\\left(a^n\\right)=n\\log_b\\left(a\\right)$$',
        'detalle' => 'El logaritmo de una potencia es igual al exponente por el logaritmo de la base.',
        'indice' => 0,
        'tema_id' => 6,
        'created_at' => '2023-04-06 02:35:37',
        'updated_at' => '2023-04-06 02:35:37'
    ],
    [
        'id' => 83,
        'nombre' => 'Suma de los Ángulos Internos',
        'formula' => '$$A+B+C=180°$$',
        'detalle' => 'La suma de los ángulos internos de un triángulo siempre es 180°.',
        'indice' => 0,
        'tema_id' => 31,
        'created_at' => '2023-04-06 02:35:43',
        'updated_at' => '2023-04-06 02:35:43'
    ],
    [
        'id' => 84,
        'nombre' => 'Suma de los Ángulos Internos',
        'formula' => '$$A+B+C=180°$$',
        'detalle' => 'La suma de los ángulos internos de un triángulo siempre es 180°.',
        'indice' => 0,
        'tema_id' => 31,
        'created_at' => '2023-04-06 02:35:48',
        'updated_at' => '2023-04-06 02:35:48'
    ],
    [
        'id' => 85,
        'nombre' => 'Logaritmo de una potencia ( Caso 2 )',
        'formula' => '$$\\log_{b^m}\\left(a^n\\right)=\\frac{n}{m}\\log_b\\left(a\\right)$$',
        'detalle' => 'Logaritmo de una potencia con base elevada a otra potencia.',
        'indice' => 0,
        'tema_id' => 6,
        'created_at' => '2023-04-06 02:36:21',
        'updated_at' => '2023-04-06 02:36:21'
    ],
    [
        'id' => 86,
        'nombre' => 'Igualdad de potencias de igual base',
        'formula' => '$$a^m=a^n\\:\\:\\:\\:\\:\\:m=n$$',
        'detalle' => 'Si dos potencias con la misma base son iguales, sus exponentes también lo son.',
        'indice' => 0,
        'tema_id' => 1,
        'created_at' => '2023-04-06 02:46:56',
        'updated_at' => '2023-04-06 02:48:07'
    ],
    [
        'id' => 87,
        'nombre' => 'Logaritmo de una raiz',
        'formula' => '$$\\log_b\\left(\\sqrt[n]{a}\\right)=\\frac{1}{n}\\log_b\\left(a\\right)$$',
        'detalle' => 'El logaritmo de una raíz es igual al logaritmo del radicando dividido por el índice.',
        'indice' => 0,
        'tema_id' => 6,
        'created_at' => '2023-04-06 02:48:06',
        'updated_at' => '2023-04-06 02:48:06'
    ],
    [
        'id' => 88,
        'nombre' => 'Área de un Triangulo',
        'formula' => '$$A=\\frac{b\\cdot a}{2}  \\\\ P=L+L+L$$',
        'detalle' => 'Área: base por altura dividido entre 2. Perímetro: suma de sus tres lados.',
        'indice' => 0,
        'tema_id' => 28,
        'created_at' => '2023-04-06 03:14:02',
        'updated_at' => '2023-04-11 03:37:13'
    ],
    [
        'id' => 89,
        'nombre' => 'Área de un Cuadrado',
        'formula' => '$$A=L^2 \\\\ P=4L$$',
        'detalle' => 'Área: lado al cuadrado. Perímetro: 4 veces el lado.',
        'indice' => 0,
        'tema_id' => 28,
        'created_at' => '2023-04-06 03:17:39',
        'updated_at' => '2023-04-11 04:05:08'
    ],
    [
        'id' => 90,
        'nombre' => 'Área de un Circulo',
        'formula' => '$$A=\\pi \\cdot r^2 \\\\ P=\\pi \\cdot D$$',
        'detalle' => 'Área: π por radio al cuadrado. Perímetro: π por diámetro.',
        'indice' => 0,
        'tema_id' => 28,
        'created_at' => '2023-04-06 03:21:49',
        'updated_at' => '2023-04-11 04:16:01'
    ],
    [
        'id' => 91,
        'nombre' => 'Área de un Rombo',
        'formula' => '$$A=\\frac{D\\cdot d}{2} \\\\ P=4L$$',
        'detalle' => 'Área: producto de diagonales dividido entre 2. Perímetro: 4 veces el lado.',
        'indice' => 0,
        'tema_id' => 28,
        'created_at' => '2023-04-06 03:26:49',
        'updated_at' => '2023-04-11 04:19:33'
    ],
    [
        'id' => 92,
        'nombre' => 'Área de un Rectángulo',
        'formula' => '$$A=b\\cdot a \\\\ P=2\\left(b+h\\right)$$',
        'detalle' => 'Área: base por altura. Perímetro: doble de la suma de base y altura.',
        'indice' => 0,
        'tema_id' => 28,
        'created_at' => '2023-04-06 03:48:45',
        'updated_at' => '2023-04-11 04:24:48'
    ],
    [
        'id' => 93,
        'nombre' => 'Cambio de base ( Caso 1 )',
        'formula' => '$$\\log_b\\left(a\\right)=\\frac{\\log_c\\left(a\\right)}{\\log_c\\left(b\\right)}$$',
        'detalle' => 'Fórmula para cambiar la base de un logaritmo usando cualquier base c.',
        'indice' => 0,
        'tema_id' => 6,
        'created_at' => '2023-04-06 03:53:05',
        'updated_at' => '2023-04-06 03:53:05'
    ],
    [
        'id' => 94,
        'nombre' => 'Cambio de base ( Caso 2 )',
        'formula' => '$$\\log_b\\left(a\\right)=\\frac{\\ln \\left(a\\right)}{\\ln \\left(b\\right)}$$',
        'detalle' => 'Fórmula para cambiar la base de un logaritmo usando logaritmo natural.',
        'indice' => 0,
        'tema_id' => 6,
        'created_at' => '2023-04-06 03:53:59',
        'updated_at' => '2023-04-06 03:53:59'
    ],
    [
        'id' => 95,
        'nombre' => 'Área de un Trapecio',
        'formula' => '$$A=\\frac{\\left(B+b\\right)h}{2} \\\\P=B+b+L+L$$',
        'detalle' => 'Área: semisuma de bases por altura. Perímetro: suma de todos sus lados.',
        'indice' => 0,
        'tema_id' => 28,
        'created_at' => '2023-04-06 03:58:05',
        'updated_at' => '2023-04-11 04:28:43'
    ],
    [
        'id' => 96,
        'nombre' => 'Suma de los n términos (en función del 1er y último término))',
        'formula' => '$$S_n=\\frac{n}{2}\\cdot(a_1+a_n)$$',
        'detalle' => 'Suma de términos: promedio del primero y último término multiplicado por el número de términos.',
        'indice' => 0,
        'tema_id' => 8,
        'created_at' => '2023-04-06 20:04:10',
        'updated_at' => '2023-04-06 20:09:30'
    ],
    [
        'id' => 97,
        'nombre' => 'raiz de una potencia',
        'formula' => '$$\\sqrt[n]{a^m}=a^\\frac{m}{n}$$',
        'detalle' => 'Una raíz de una potencia puede expresarse como potencia con exponente fraccionario.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:07:31',
        'updated_at' => '2023-04-06 21:39:47'
    ],
    [
        'id' => 98,
        'nombre' => 'Suma de los n términos (en función del 1er término y la diferencia)',
        'formula' => '$$S_n=\\frac{n}{2}\\cdot[2\\cdot{a_1}+(n-1)\\cdot{d}]$$',
        'detalle' => 'Suma de términos en progresión aritmética usando el primer término y la diferencia.',
        'indice' => 0,
        'tema_id' => 8,
        'created_at' => '2023-04-06 20:08:55',
        'updated_at' => '2023-04-06 20:08:55'
    ],
    [
        'id' => 99,
        'nombre' => 'raiz de una potencia',
        'formula' => '$$\\sqrt[n]{a}\\cdot\\sqrt[m]{a}=a^\\frac{m+n}{mn}$$',
        'detalle' => 'Producto de raíces con distinto índice puede expresarse como potencia fraccionaria.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:13:09',
        'updated_at' => '2023-04-06 20:13:09'
    ],
    [
        'id' => 100,
        'nombre' => 'Diferencia o razón (En función del 1er y último término)',
        'formula' => '$$d=\\frac{a_n-a_1}{n-1}$$',
        'detalle' => 'Diferencia en progresión aritmética calculada con el primer y último término.',
        'indice' => 0,
        'tema_id' => 8,
        'created_at' => '2023-04-06 20:14:27',
        'updated_at' => '2023-04-06 20:14:27'
    ],

    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 101,
        'nombre' => 'raiz de una potencia',
        'formula' => '$$\\sqrt[n]{a^\\frac{1}{m}}=a^\\frac{1}{mn}$$',
        'detalle' => 'Raíz de una potencia con exponente fraccionario.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:16:02',
        'updated_at' => '2023-04-06 21:14:19'
    ],
    [
        'id' => 102,
        'nombre' => 'Diferencia o razón (En función del 1er término y la suma de términos)',
        'formula' => '$$d=\\frac{2\\cdot(S_n-a_1\\cdot{n})}{n\\cdot(n-1)}$$',
        'detalle' => 'Cálculo de la diferencia en progresión aritmética usando el primer término y la suma.',
        'indice' => 0,
        'tema_id' => 8,
        'created_at' => '2023-04-06 20:18:42',
        'updated_at' => '2023-04-06 20:18:42'
    ],
    [
        'id' => 103,
        'nombre' => 'Número de términos (En función del 1er termino, el último término y la diferencia)',
        'formula' => '$$n=\\frac{a_n-a_1}{d}+1$$',
        'detalle' => 'Cálculo del número de términos en progresión aritmética.',
        'indice' => 0,
        'tema_id' => 8,
        'created_at' => '2023-04-06 20:22:14',
        'updated_at' => '2023-04-06 20:22:14'
    ],
    [
        'id' => 104,
        'nombre' => 'raiz de una potencia',
        'formula' => '$$\\sqrt[n]{\\frac{a}{b}}=\\frac{\\sqrt[n]{a}}{\\sqrt[n]{b}}$$',
        'detalle' => 'Raíz de un cociente es igual al cociente de las raíces.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:24:21',
        'updated_at' => '2023-04-06 20:24:21'
    ],
    [
        'id' => 105,
        'nombre' => 'Número de términos (En función de la suma de términos, del 1er y último término)',
        'formula' => '$$n=\\frac{2\\cdot{S_n}}{a_1+a_n}$$',
        'detalle' => 'Cálculo del número de términos usando la suma, primer y último término.',
        'indice' => 0,
        'tema_id' => 8,
        'created_at' => '2023-04-06 20:25:29',
        'updated_at' => '2023-04-06 20:25:29'
    ],
    [
        'id' => 106,
        'nombre' => 'raiz de un producto de factores iguales',
        'formula' => '$$\\sqrt[n]{a}\\cdot \\sqrt[n]{a}=a^\\frac{2}{n}$$',
        'detalle' => 'Producto de raíces iguales equivale a potencia con exponente fraccionario.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:27:27',
        'updated_at' => '2023-04-06 20:27:27'
    ],
    [
        'id' => 107,
        'nombre' => 'raiz de una division de factores iguales',
        'formula' => '$$\\frac{\\sqrt[n]{a}}{\\sqrt[m]{a}}=a^\\frac{m-n}{mn}$$',
        'detalle' => 'Cociente de raíces con distinto índice puede expresarse como potencia fraccionaria.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:30:29',
        'updated_at' => '2023-04-06 20:30:29'
    ],
    [
        'id' => 108,
        'nombre' => 'raiz de un producto de varios factores',
        'formula' => '$$\\sqrt[n]{abc}=\\sqrt[n]{a}\\cdot \\sqrt[n]{b}\\cdot \\sqrt[n]{c}$$',
        'detalle' => 'Raíz de un producto es igual al producto de las raíces de cada factor.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:33:31',
        'updated_at' => '2023-04-06 20:33:31'
    ],
    [
        'id' => 109,
        'nombre' => 'cantidad imaginaria',
        'formula' => '$$\\sqrt[n]{-a}=\\sqrt[n]{a}\\cdot i$$',
        'detalle' => 'Raíz de un número negativo puede expresarse usando la unidad imaginaria i.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:36:46',
        'updated_at' => '2023-04-07 08:34:46'
    ],
    [
        'id' => 110,
        'nombre' => 'cantidad imaginaria',
        'formula' => '$$\\sqrt[n]{-a}=\\sqrt[n]{a}\\cdot i$$',
        'detalle' => 'Raíz de un número negativo usando la unidad imaginaria i.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:37:50',
        'updated_at' => '2023-04-06 20:37:50'
    ],
    [
        'id' => 111,
        'nombre' => 'cantidad real',
        'formula' => '$$\\sqrt[n]{a^n}=a$$',
        'detalle' => 'Raíz n-ésima de una potencia n-ésima devuelve la base original.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:39:31',
        'updated_at' => '2023-04-06 20:39:31'
    ],
    [
        'id' => 112,
        'nombre' => 'raiz de una potencia',
        'formula' => '$$\\sqrt[n]{a}=a^\\frac{1}{n}$$',
        'detalle' => 'La raíz n-ésima puede expresarse como potencia con exponente fraccionario.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:41:27',
        'updated_at' => '2023-04-06 20:41:27'
    ],
    [
        'id' => 113,
        'nombre' => 'tranformacion de radical doble',
        'formula' => '$$\\sqrt[n]{a+\\sqrt[n]{b}}=\\sqrt[n]{\\frac{a+m}{2}}+\\sqrt[n]{\\frac{a-m}{2}}\\:\\:$$',
        'detalle' => 'Transformación de un radical doble en suma de radicales simples.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:45:11',
        'updated_at' => '2023-04-06 20:45:11'
    ],
    [
        'id' => 114,
        'nombre' => 'tranformaciones de radical doble',
        'formula' => '$$\\sqrt[n]{a+\\sqrt[n]{b}}=\\sqrt[n]{\\frac{a+m}{2}}-\\sqrt[n]{\\frac{a-m}{2}} \\\\ m\\:=\\sqrt[n]{a^2-b}$$',
        'detalle' => 'Transformación de radical doble en resta de radicales simples.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:51:27',
        'updated_at' => '2023-04-11 03:18:41'
    ],
    [
        'id' => 115,
        'nombre' => 'transformacion de radical doble',
        'formula' => '$$m\\:=\\sqrt[n]{a^2-b}$$',
        'detalle' => 'Cálculo auxiliar para transformación de radicales dobles.',
        'indice' => 0,
        'tema_id' => 2,
        'created_at' => '2023-04-06 20:54:12',
        'updated_at' => '2023-04-06 20:54:12'
    ],
    [
        'id' => 116,
        'nombre' => 'LEY DE GAY LUSSAC V= CTTE',
        'formula' => '$$\\frac{P_2}{T_2}\\:=\\:\\frac{P_1}{T_1}$$',
        'detalle' => 'Relación presión-temperatura a volumen constante en gases ideales.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-04-06 22:02:08',
        'updated_at' => '2023-04-20 19:25:16'
    ],
    [
        'id' => 117,
        'nombre' => 'LEY DE CHARLES P=CTTE',
        'formula' => '$$\\frac{V_2}{T_2}\\:=\\frac{V_1}{T_1}$$',
        'detalle' => 'Relación volumen-temperatura a presión constante en gases ideales.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-04-06 22:04:24',
        'updated_at' => '2023-04-20 19:25:54'
    ],
    [
        'id' => 118,
        'nombre' => 'LEY DE BOYLE  T = CTTE',
        'formula' => '$$V_2\\cdot P_2\\:=V_1\\cdot P_1$$',
        'detalle' => 'Relación presión-volumen a temperatura constante en gases ideales.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-04-06 22:10:23',
        'updated_at' => '2023-04-06 22:10:23'
    ],
    [
        'id' => 119,
        'nombre' => 'LEY COMBINADO  V, P y T no son cte',
        'formula' => '$$\\frac{P_2 \\cdot V_2}{T_2}=\\frac{P_1 \\cdot V_1}{T_1}\\\\P_2\\cdot V_2\\cdot T_1=P_1\\cdot V_1\\cdot T_2$$',
        'detalle' => 'Ley combinada de los gases ideales cuando presión, volumen y temperatura varían.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-04-06 22:23:57',
        'updated_at' => '2023-08-09 19:12:53'
    ],
    [
        'id' => 120,
        'nombre' => 'Diferencia si se conocen dos términos cualesquiera en la s posiciones m  y n, si n>m',
        'formula' => '$$d= \\frac{a_n-a_m}{n-m}$$',
        'detalle' => 'Cálculo de la diferencia en progresión aritmética usando dos términos cualesquiera.',
        'indice' => 0,
        'tema_id' => 8,
        'created_at' => '2023-04-06 23:44:07',
        'updated_at' => '2023-04-06 23:44:07'
    ],
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 121,
        'nombre' => '1er término en función de dos término cualesquiera',
        'formula' => '$$a_1=\\frac{a_m\\cdot(n-1)-a_n\\cdot(m-1)}{n-m}$$',
        'detalle' => 'Cálculo del primer término usando dos términos cualesquiera en progresión aritmética.',
        'indice' => 0,
        'tema_id' => 8,
        'created_at' => '2023-04-06 23:49:34',
        'updated_at' => '2023-04-06 23:49:34'
    ],
    [
        'id' => 122,
        'nombre' => 'Término general o término n_ésimo',
        'formula' => '$$a_n=a_1\\cdot{r^{n-1}}$$',
        'detalle' => 'Fórmula para encontrar cualquier término en una progresión geométrica.',
        'indice' => 0,
        'tema_id' => 91,
        'created_at' => '2023-04-06 23:53:41',
        'updated_at' => '2023-04-06 23:53:41'
    ],
    [
        'id' => 123,
        'nombre' => 'Suma de los n términos',
        'formula' => '$$S_n=\\frac{a_1\\cdot(r^n-1)}{r-1}$$',
        'detalle' => 'Suma de los primeros n términos en una progresión geométrica.',
        'indice' => 0,
        'tema_id' => 91,
        'created_at' => '2023-04-07 02:09:05',
        'updated_at' => '2023-04-07 02:09:05'
    ],
    [
        'id' => 124,
        'nombre' => '1er término en función del último término y la razón',
        'formula' => '$$a_1=\\frac{a_n}{r^{n-1}}$$',
        'detalle' => 'Cálculo del primer término usando el último término y la razón.',
        'indice' => 0,
        'tema_id' => 91,
        'created_at' => '2023-04-07 02:12:00',
        'updated_at' => '2023-04-07 02:12:00'
    ],
    [
        'id' => 125,
        'nombre' => 'Logaritmo como exponente',
        'formula' => '$$b^{\\log_b\\left(a\\right)}=a$$',
        'detalle' => 'Propiedad que muestra la relación inversa entre exponentes y logaritmos.',
        'indice' => 0,
        'tema_id' => 6,
        'created_at' => '2023-04-07 03:06:37',
        'updated_at' => '2023-04-07 03:07:30'
    ],
    [
        'id' => 126,
        'nombre' => '1er término en función de la razón y la suma de términos',
        'formula' => '$$a_1=\\frac{S_n\\cdot(n-1)}{r^{n}-1}$$',
        'detalle' => 'Cálculo del primer término usando la razón y la suma de términos.',
        'indice' => 0,
        'tema_id' => 91,
        'created_at' => '2023-04-08 19:59:57',
        'updated_at' => '2023-04-08 19:59:57'
    ],
    [
        'id' => 127,
        'nombre' => 'Definiciones de desigualdad',
        'formula' => '$$a, b \\in \\mathbb{R} \\\\ a>\\:b;\\:si\\:a-b\\:es\\:positivo\\\\a<\\:b;\\:si\\:a-b\\:es\\:negativo$$',
        'detalle' => 'Definición formal de desigualdades mediante la diferencia entre números reales.',
        'indice' => 0,
        'tema_id' => 10,
        'created_at' => '2023-04-08 20:00:11',
        'updated_at' => '2023-04-18 18:27:46'
    ],
    [
        'id' => 128,
        'nombre' => 'La razón en función del 1er y último término',
        'formula' => '$$r=\\sqrt[n-1]\\frac{a_n}{a_1}$$',
        'detalle' => 'Cálculo de la razón usando el primer y último término en progresión geométrica.',
        'indice' => 0,
        'tema_id' => 91,
        'created_at' => '2023-04-08 20:05:53',
        'updated_at' => '2023-04-08 20:05:53'
    ],
    [
        'id' => 129,
        'nombre' => 'Suma de términos en función de la razón y el último término',
        'formula' => '$$S_n=\\frac{a_n\\cdot(r^n-1)}{r^{n-1}\\cdot(r-1)}$$',
        'detalle' => 'Suma de términos usando la razón y el último término en progresión geométrica.',
        'indice' => 0,
        'tema_id' => 91,
        'created_at' => '2023-04-08 20:15:19',
        'updated_at' => '2023-04-08 20:15:19'
    ],
    [
        'id' => 130,
        'nombre' => 'Número de términos en función de la razón, el 1er y último término',
        'formula' => '$$n=\\frac{\\log(r\\cdot{\\frac{a_n}{a_1}})}{\\log{r}}$$',
        'detalle' => 'Cálculo del número de términos usando razón, primer y último término.',
        'indice' => 0,
        'tema_id' => 91,
        'created_at' => '2023-04-08 20:24:17',
        'updated_at' => '2023-04-08 20:24:17'
    ],
    [
        'id' => 131,
        'nombre' => 'Número de téminos en función de la razón, el 1er término y la suma de términos',
        'formula' => '$$n=\\frac{\\log[{{\\frac{S_n\\cdot(r-1)+a1}{a_1}}}]}{\\log{r}}$$',
        'detalle' => 'Cálculo del número de términos usando razón, primer término y suma total.',
        'indice' => 0,
        'tema_id' => 91,
        'created_at' => '2023-04-08 20:36:10',
        'updated_at' => '2023-04-08 20:36:10'
    ],
    [
        'id' => 132,
        'nombre' => 'La razón en función de dos términos cualesquiera',
        'formula' => '$$r=\\sqrt[n-m]{\\frac{a_n}{a_m}}$$',
        'detalle' => 'Cálculo de la razón usando dos términos cualesquiera en progresión geométrica.',
        'indice' => 0,
        'tema_id' => 91,
        'created_at' => '2023-04-10 20:01:13',
        'updated_at' => '2023-04-10 20:01:13'
    ],
    [
        'id' => 133,
        'nombre' => '1er término en función de dos términos cualesquiera',
        'formula' => '$$a_1=a_{n\\cdot }\\sqrt[n-m]{\\left(\\frac{a_m}{a_n}\\right)^{n-1}}$$',
        'detalle' => 'Cálculo del primer término usando dos términos cualesquiera en progresión geométrica.',
        'indice' => 0,
        'tema_id' => 91,
        'created_at' => '2023-04-10 20:05:03',
        'updated_at' => '2023-04-10 20:05:03'
    ],
    [
        'id' => 134,
        'nombre' => 'Suma de infinitos términos',
        'formula' => '$$S_{\\infty }=\\frac{a_1}{1-r}$$',
        'detalle' => 'Suma de una progresión geométrica infinita (cuando |r| < 1).',
        'indice' => 0,
        'tema_id' => 91,
        'created_at' => '2023-04-10 20:08:58',
        'updated_at' => '2023-04-10 20:08:58'
    ],
    [
        'id' => 135,
        'nombre' => '1er término en función de la suma de infinitos términos y la razón',
        'formula' => '$$a_1=S_{\\infty }\\cdot \\left(1-r\\right)$$',
        'detalle' => 'Cálculo del primer término usando la suma infinita y la razón.',
        'indice' => 0,
        'tema_id' => 91,
        'created_at' => '2023-04-10 20:13:10',
        'updated_at' => '2023-04-10 20:13:10'
    ],
    [
        'id' => 136,
        'nombre' => 'La razón en función de la suma de infinita y el 1er término',
        'formula' => '$$r=\\frac{S_{\\infty }-a_1}{S_{\\infty }}$$',
        'detalle' => 'Cálculo de la razón usando la suma infinita y el primer término.',
        'indice' => 0,
        'tema_id' => 91,
        'created_at' => '2023-04-10 20:18:07',
        'updated_at' => '2023-04-10 20:31:28'
    ],
    [
        'id' => 137,
        'nombre' => 'Ecuación de la recta que pasa por dos puntos',
        'formula' => '$$y-y_1=\\frac{y_2-y_1}{x_2-x_1}\\cdot \\left(x-x_1\\right)$$',
        'detalle' => 'Ecuación de recta usando dos puntos conocidos (P1 y P2).',
        'indice' => 0,
        'tema_id' => 18,
        'created_at' => '2023-04-10 20:40:58',
        'updated_at' => '2023-04-10 20:40:58'
    ],
    [
        'id' => 138,
        'nombre' => 'Ecuación de la recta punto - pendiente',
        'formula' => '$$y-y_1=m\\cdot \\left(x-x_1\\right)$$',
        'detalle' => 'Ecuación de recta usando un punto conocido y su pendiente.',
        'indice' => 0,
        'tema_id' => 18,
        'created_at' => '2023-04-10 20:43:36',
        'updated_at' => '2023-04-10 20:43:36'
    ],
    [
        'id' => 139,
        'nombre' => 'Ecuación ordenada al origen de la recta',
        'formula' => '$$y=m\\cdot x+b$$',
        'detalle' => 'Forma estándar de ecuación de recta (pendiente-ordenada al origen).',
        'indice' => 0,
        'tema_id' => 18,
        'created_at' => '2023-04-10 20:45:40',
        'updated_at' => '2023-04-10 20:45:40'
    ],
    [
        'id' => 140,
        'nombre' => 'Ecuación simétrica de la recta',
        'formula' => '$$\\frac{x}{a}+\\frac{y}{b}=1$$',
        'detalle' => 'Ecuación de recta usando sus intersecciones con los ejes X e Y.',
        'indice' => 0,
        'tema_id' => 18,
        'created_at' => '2023-04-10 20:51:37',
        'updated_at' => '2023-04-10 20:51:37'
    ],
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 141,
        'nombre' => 'Ecuación General de la Recta',
        'formula' => '$$Ax+By+C=0$$',
        'detalle' => 'Forma general de la ecuación de una recta en el plano cartesiano.',
        'indice' => 0,
        'tema_id' => 18,
        'created_at' => '2023-04-10 20:56:38',
        'updated_at' => '2023-04-10 20:56:38'
    ],
    [
        'id' => 142,
        'nombre' => 'Dada la ecuación general de la recta: pendiente, ordenada y abscisa al origen',
        'formula' => '$$Ax+By+C=0\\\\m=-\\frac{A}{B}\\\\a=-\\frac{C}{A}\\:\\:;\\:\\:b=-\\frac{C}{B}$$',
        'detalle' => 'Cálculo de pendiente y puntos de corte a partir de la ecuación general.',
        'indice' => 0,
        'tema_id' => 18,
        'created_at' => '2023-04-10 21:03:59',
        'updated_at' => '2023-05-04 19:37:17'
    ],
    [
        'id' => 143,
        'nombre' => 'Distancia entre dos puntos',
        'formula' => '$$d=\\sqrt{\\left(x_2-x_1\\right)^2+\\left(y_2-y_1\\right)^2}$$',
        'detalle' => 'Fórmula para calcular la distancia entre dos puntos en el plano cartesiano.',
        'indice' => 0,
        'tema_id' => 7,
        'created_at' => '2023-04-10 22:41:42',
        'updated_at' => '2023-04-10 22:41:42'
    ],
    [
        'id' => 144,
        'nombre' => 'Pendiente de un segmento definido por dos puntos',
        'formula' => '$$m=\\frac{y_2-y_1}{x_2-x_1}$$',
        'detalle' => 'Cálculo de la pendiente de una recta que pasa por dos puntos.',
        'indice' => 0,
        'tema_id' => 7,
        'created_at' => '2023-04-10 22:44:16',
        'updated_at' => '2023-04-10 22:44:16'
    ],
    [
        'id' => 145,
        'nombre' => 'Punto medio de un segmento P1P2',
        'formula' => '$$x=\\frac{x_1+x_2}{2}\\space\\space\\space\\space  y  =\\frac{y_1+y_2}{2}$$',
        'detalle' => 'Fórmula para encontrar el punto medio entre dos puntos en el plano.',
        'indice' => 0,
        'tema_id' => 7,
        'created_at' => '2023-04-10 22:57:33',
        'updated_at' => '2023-05-08 18:20:40'
    ],
    [
        'id' => 146,
        'nombre' => 'Angulo entre dos rectas, dadas sus pendientes',
        'formula' => '$$\\tan\\theta=\\frac{m_2-m_1}{1+m_1\\cdot m_2}$$',
        'detalle' => 'Cálculo del ángulo entre dos rectas usando sus pendientes.',
        'indice' => 0,
        'tema_id' => 7,
        'created_at' => '2023-04-10 23:01:37',
        'updated_at' => '2023-05-05 00:20:23'
    ],
    [
        'id' => 147,
        'nombre' => 'Distancia de un punto a una recta P(xo,yo) y L: Ax+By+C=0',
        'formula' => '$$d=\\frac{|A\\cdot x_0+B\\cdot y_0+C|}{\\sqrt{A^2+B^2}}$$',
        'detalle' => 'Fórmula para calcular la distancia mínima entre un punto y una recta.',
        'indice' => 0,
        'tema_id' => 7,
        'created_at' => '2023-04-10 23:13:31',
        'updated_at' => '2023-04-11 20:24:34'
    ],
    [
        'id' => 148,
        'nombre' => 'Distancia entre dos rectas paralelas dadas sus ecuaciones: L1: Ax+By+C1 L2: Ax+By+C2=0',
        'formula' => '$$d=\\frac{\\left|C_2-C_1\\right|}{\\sqrt{A^2+B^2}}$$',
        'detalle' => 'Cálculo de la distancia entre rectas paralelas en el plano.',
        'indice' => 0,
        'tema_id' => 7,
        'created_at' => '2023-04-11 01:56:38',
        'updated_at' => '2023-04-11 06:01:26'
    ],
    [
        'id' => 149,
        'nombre' => 'Área de un Paralelogramo',
        'formula' => '$$A=b\\cdot h \\\\ P=2a+2b$$',
        'detalle' => 'Área: base por altura. Perímetro: suma de todos sus lados.',
        'indice' => 0,
        'tema_id' => 28,
        'created_at' => '2023-04-11 02:22:21',
        'updated_at' => '2023-04-11 04:32:18'
    ],
    [
        'id' => 150,
        'nombre' => 'Área de un Pentágono',
        'formula' => '$$A=\\frac{5a\\cdot b}{2} \\\\P=5L$$',
        'detalle' => 'Área: (5 × lado × apotema)/2. Perímetro: 5 veces el lado.',
        'indice' => 0,
        'tema_id' => 28,
        'created_at' => '2023-04-11 02:27:49',
        'updated_at' => '2023-04-11 04:34:23'
    ],
    [
        'id' => 151,
        'nombre' => 'Área de un Romboide',
        'formula' => '$$A=b\\cdot h \\\\P=2b+2h$$',
        'detalle' => 'Área: base por altura. Perímetro: suma de todos sus lados.',
        'indice' => 0,
        'tema_id' => 28,
        'created_at' => '2023-04-11 02:30:01',
        'updated_at' => '2023-04-11 04:38:16'
    ],
    [
        'id' => 152,
        'nombre' => 'LEY GENERAL DE GASES',
        'formula' => '$$P\\cdot V = n\\cdot R\\cdot T$$',
        'detalle' => 'Ecuación de estado para gases ideales que relaciona presión, volumen y temperatura.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-04-11 03:13:19',
        'updated_at' => '2023-04-12 23:42:49'
    ],
    [
        'id' => 153,
        'nombre' => 'CONCENTRACION MOLAR',
        'formula' => '$$M\\:=\\:\\frac{n}{V} [moles/litro]$$',
        'detalle' => 'Medida de concentración química: moles de soluto por litro de solución.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-04-11 03:23:55',
        'updated_at' => '2023-04-12 23:46:46'
    ],
    [
        'id' => 154,
        'nombre' => 'Dominio para funciones en el denominador',
        'formula' => '$$F\\left(x\\right)=\\frac{T\\left(x\\right)}{h\\left(x\\right)}\\\\h\\left(x\\right)\\ne 0$$',
        'detalle' => 'Restricción para funciones racionales: denominador distinto de cero.',
        'indice' => 0,
        'tema_id' => 16,
        'created_at' => '2023-04-11 03:54:00',
        'updated_at' => '2023-04-13 05:15:37'
    ],
    [
        'id' => 155,
        'nombre' => 'Dominio para funciones irracionales',
        'formula' => '$$f\\left(x\\right)=\\sqrt[n=par]{h\\left(x\\right)}\\\\h\\left(x\\right)\\ge 0$$',
        'detalle' => 'Restricción para raíces pares: radicando no negativo.',
        'indice' => 0,
        'tema_id' => 16,
        'created_at' => '2023-04-11 04:10:54',
        'updated_at' => '2023-04-13 05:16:20'
    ],
    [
        'id' => 156,
        'nombre' => 'Dominio para funciones logarítmicas ( Caso 1 )',
        'formula' => '$$f\\left(x\\right)=\\log_{b\\left(x\\right)}\\left[h\\left(x\\right)\\right]\\\\h\\left(x\\right)>0$$',
        'detalle' => 'Restricción para logaritmos: argumento debe ser positivo.',
        'indice' => 0,
        'tema_id' => 16,
        'created_at' => '2023-04-11 04:22:24',
        'updated_at' => '2023-04-13 05:22:40'
    ],
    [
        'id' => 157,
        'nombre' => 'Área de un Hexágono',
        'formula' => '$$A=\\frac{P\\cdot \\:a}{2\\:} \\\\ P=6L$$',
        'detalle' => 'Área: (perímetro × apotema)/2. Perímetro: 6 veces el lado.',
        'indice' => 0,
        'tema_id' => 28,
        'created_at' => '2023-04-11 05:00:28',
        'updated_at' => '2023-04-11 05:00:28'
    ],
    [
        'id' => 158,
        'nombre' => 'Paralelismo entre dos rectas;L1:A1X+BY+C1=0 L2:A2X+B2Y+C2=0',
        'formula' => '$$\\frac{A_1}{B_1}=\\frac{A_2}{B_2}\\\\ ó\\:\\:\\:{m_1}=m_2$$',
        'detalle' => 'Condición para que dos rectas sean paralelas: pendientes iguales.',
        'indice' => 0,
        'tema_id' => 7,
        'created_at' => '2023-04-11 06:23:02',
        'updated_at' => '2023-06-14 19:44:41'
    ],
    [
        'id' => 159,
        'nombre' => 'Perpendicularidad entre dos rectas; L1: A1x+B1y+C1=0 L2: A2x+B2y +C2=0',
        'formula' => '$$m_1=-\\frac{1}{m_2}\\\\ó\\:\\:\\:-\\frac{A_1}{B_1}=\\frac{B_2}{A_2}$$',
        'detalle' => 'Condición para que dos rectas sean perpendiculares: pendientes inversas y opuestas.',
        'indice' => 0,
        'tema_id' => 7,
        'created_at' => '2023-04-11 06:32:19',
        'updated_at' => '2023-06-14 19:41:20'
    ],
    [
        'id' => 160,
        'nombre' => 'Punto de división de un segmento',
        'formula' => '$$x=\\frac{x_1+r\\cdot x_2}{1+r}\\:\\:\\:\\:\\:\\:\\:\\:\\:\\:\\:\\:\\:y=\\frac{y_1+r\\cdot y_2}{1+r}$$',
        'detalle' => 'Fórmula para encontrar un punto que divide un segmento en una razón dada.',
        'indice' => 0,
        'tema_id' => 7,
        'created_at' => '2023-04-11 19:56:55',
        'updated_at' => '2023-04-11 19:56:55'
    ],
    /**$$$$$$$$$$$$$$$$$$$ */
    
        [
            'id' => 161,
            'nombre' => 'Ecuación Canónica de la Circunferencia',
            'formula' => '$$\\left(x-h\\right)^2+\\left(y-k\\right)^2=r^2$$',
            'detalle' => 'Ecuación estándar de una circunferencia con centro (h,k) y radio r.',
            'indice' => 0,
            'tema_id' => 19,
            'created_at' => '2023-04-11 20:14:20',
            'updated_at' => '2023-04-17 16:24:49'
        ],
        [
            'id' => 162,
            'nombre' => 'Ecuación de la circunferencia con centro en el origen de coordenadas',
            'formula' => '$$\\:x^2+y^2=r^2$$',
            'detalle' => 'Ecuación simplificada cuando el centro está en el origen (0,0).',
            'indice' => 0,
            'tema_id' => 19,
            'created_at' => '2023-04-11 20:16:53',
            'updated_at' => '2023-04-11 20:16:53'
        ],
        [
            'id' => 163,
            'nombre' => 'Ley de la tricotomía',
            'formula' => '$$a<b\\\\a=b\\\\a>b$$',
            'detalle' => 'Para cualquier par de números reales, solo una de tres relaciones es válida.',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-11 20:17:15',
            'updated_at' => '2023-04-11 20:26:29'
        ],
        [
            'id' => 164,
            'nombre' => 'Ecuación General de la Circunferencia',
            'formula' => '$$x^2+y^2+D\\cdot x+E\\cdot y+F=0$$',
            'detalle' => 'Forma expandida de la ecuación de una circunferencia.',
            'indice' => 0,
            'tema_id' => 19,
            'created_at' => '2023-04-11 20:19:58',
            'updated_at' => '2023-04-11 20:19:58'
        ],
        [
            'id' => 165,
            'nombre' => 'Centro C(h,k) a partir de la ecuación general',
            'formula' => '$$h=-\\frac{D}{2}\\:\\:\\:\\:\\:\\:k=-\\frac{E}{2}$$',
            'detalle' => 'Cálculo de las coordenadas del centro a partir de la forma general.',
            'indice' => 0,
            'tema_id' => 19,
            'created_at' => '2023-04-11 20:34:28',
            'updated_at' => '2023-04-11 20:34:28'
        ],
        [
            'id' => 166,
            'nombre' => 'Radio r a partir de la ecuación general',
            'formula' => '$$\\:r=\\frac{1}{2}\\cdot \\sqrt{D^2+E^2-4\\cdot F}$$',
            'detalle' => 'Fórmula para calcular el radio a partir de la ecuación general.',
            'indice' => 0,
            'tema_id' => 19,
            'created_at' => '2023-04-11 20:36:20',
            'updated_at' => '2023-04-11 20:36:20'
        ],
        [
            'id' => 167,
            'nombre' => 'Teorema 1: Propiedad Transitiva',
            'formula' => '$$\\left\\lbrace {a,b,c} \\right\\rbrace \\in \\mathbb {R}\\\\ Si\\:a>b\\:;b>c\\:\\Rightarrow a>c$$',
            'detalle' => 'Si a > b y b > c, entonces a > c (propiedad transitiva de desigualdades).',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-11 20:45:54',
            'updated_at' => '2023-04-12 00:00:14'
        ],
        [
            'id' => 168,
            'nombre' => 'Teorema 2: Suma',
            'formula' => '$$\\left\\lbrace {a,b,c} \\right\\rbrace \\in \\mathbb {R}\\\\ Si\\:a>b\\:\\Rightarrow a+c>b+c$$',
            'detalle' => 'Al sumar el mismo valor a ambos lados, la desigualdad se mantiene.',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-11 20:54:29',
            'updated_at' => '2023-04-12 00:00:32'
        ],
        [
            'id' => 169,
            'nombre' => 'Parábola con eje vertical (+):Ecuación,Vértice,Foco,Directriz y Lado Recto',
            'formula' => '$$\\left(x-h\\right)^2=+4a\\left(y-k\\right) \\\\V(h,k)\\\\F(h,k+a)\\\\y=k-a\\\\LR=4a$$',
            'detalle' => 'Elementos de parábola vertical que abre hacia arriba.',
            'indice' => 0,
            'tema_id' => 20,
            'created_at' => '2023-04-11 21:33:54',
            'updated_at' => '2023-04-11 21:44:02'
        ],
        [
            'id' => 170,
            'nombre' => 'Parábola con eje vertical (-): Ecuación,Vértice,Foco,Directriz y Lado Recto',
            'formula' => '$$\\left(x-h\\right)^2=-4a\\left(y-k\\right)\\\\V(h,k)\\\\F(h,k-a)\\\\y=k+a\\\\LR=4a$$',
            'detalle' => 'Elementos de parábola vertical que abre hacia abajo.',
            'indice' => 0,
            'tema_id' => 20,
            'created_at' => '2023-04-11 21:40:52',
            'updated_at' => '2023-04-11 21:44:23'
        ],
        [
            'id' => 171,
            'nombre' => 'Parábola con eje horizontal (+): Ecuación, Vértice, Foco, Directriz y Lado Recto y',
            'formula' => '$$\\left(y-k\\right)^2=+4a\\left(x-h\\right)\\\\V(h,k)\\\\F(h+a,k)\\\\x=h-a\\\\LR=4a$$',
            'detalle' => 'Elementos de parábola horizontal que abre hacia la derecha.',
            'indice' => 0,
            'tema_id' => 20,
            'created_at' => '2023-04-11 21:52:29',
            'updated_at' => '2023-04-13 05:12:47'
        ],
        [
            'id' => 172,
            'nombre' => 'Parábola con eje horizontal (-): Ecuación, Vértice, Foco, Directriz y Lado Recto',
            'formula' => '$$\\left(y-k\\right)^2=-4a\\left(x-h\\right)\\\\V(h,k)\\\\F(h-a,k)\\\\x=h+a\\\\LR=4a$$',
            'detalle' => 'Elementos de parábola horizontal que abre hacia la izquierda.',
            'indice' => 0,
            'tema_id' => 20,
            'created_at' => '2023-04-11 21:59:29',
            'updated_at' => '2023-04-13 05:14:09'
        ],
        [
            'id' => 173,
            'nombre' => 'MOLARIDAD',
            'formula' => '$$M=\\frac{m}{PM\\cdot V }\\left[\\frac{moles}{litro}\\right]$$',
            'detalle' => 'Concentración molar usando masa, peso molecular y volumen.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-11 22:38:31',
            'updated_at' => '2023-04-11 22:38:31'
        ],
        [
            'id' => 174,
            'nombre' => 'MOLARIDAD',
            'formula' => '$$M\\:=\\frac{D\\cdot C }{PM\\:\\:\\cdot 100\\:\\%}\\:\\:\\:\\:\\left[\\frac{moles}{litro}\\right]$$',
            'detalle' => 'Cálculo de molaridad usando densidad y porcentaje de concentración.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-11 22:42:41',
            'updated_at' => '2023-04-11 22:42:41'
        ],
        [
            'id' => 175,
            'nombre' => 'NORMALIDAD',
            'formula' => '$$N=\\frac{Eq}{V}\\left[\\frac{equivalente}{litro}\\right] \\\\Eq\\:=\\frac{PM}{ oxidación\\:catión}$$',
            'detalle' => 'Concentración normal usando equivalentes químicos por litro.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-11 23:05:03',
            'updated_at' => '2023-08-16 16:43:32'
        ],
        [
            'id' => 176,
            'nombre' => 'h,k,a conociendo la Ec. Gral.de la forma: x2+Dx+Ey+F=0',
            'formula' => '$$h=-\\frac{D}{2}\\\\k=\\frac{D^2-4F}{4E}\\\\\\:a=\\frac{\\left|E\\right|}{4}$$',
            'detalle' => 'Cálculo de parámetros para parábola vertical a partir de forma general.',
            'indice' => 0,
            'tema_id' => 20,
            'created_at' => '2023-04-11 23:32:55',
            'updated_at' => '2023-04-11 23:44:42'
        ],
        [
            'id' => 177,
            'nombre' => 'h,k,a conociendo la Ec. Gral de la forma: y2+Dy+Ex+F=0',
            'formula' => '$$\\:h=\\frac{D^2-4F}{4E}\\\\k=-\\frac{D}{2}\\\\\\:a=\\frac{\\left|E\\right|}{4}$$',
            'detalle' => 'Cálculo de parámetros para parábola horizontal a partir de forma general.',
            'indice' => 0,
            'tema_id' => 20,
            'created_at' => '2023-04-11 23:43:45',
            'updated_at' => '2023-04-11 23:43:45'
        ],
        [
            'id' => 178,
            'nombre' => 'Si el vértice está en el origen (eje vertical +) V(0,0) ; LR= 4a',
            'formula' => '$$x^2=+4ay\\\\F\\left(0,a\\right)\\\\\\:y=-a$$',
            'detalle' => 'Parábola con vértice en origen que abre hacia arriba.',
            'indice' => 0,
            'tema_id' => 20,
            'created_at' => '2023-04-11 23:54:01',
            'updated_at' => '2023-04-11 23:54:01'
        ],
        [
            'id' => 179,
            'nombre' => 'Si el vértice está en el origen (eje vertical -) V(0,0) ; LR= 4a',
            'formula' => '$$x^2=-4ay\\\\\\:F\\left(0,-a\\right)\\\\y=a$$',
            'detalle' => 'Parábola con vértice en origen que abre hacia abajo.',
            'indice' => 0,
            'tema_id' => 20,
            'created_at' => '2023-04-11 23:57:11',
            'updated_at' => '2023-04-11 23:57:11'
        ],
        [
            'id' => 180,
            'nombre' => 'Teorema 3: Multiplicación por un numero positivo',
            'formula' => '$$Si\\:a>b\\:y\\:c>0\\Rightarrow ac>bc$$',
            'detalle' => 'Al multiplicar ambos lados por un positivo, la desigualdad se mantiene.',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-11 23:58:55',
            'updated_at' => '2023-04-12 00:00:54'
        ],
    /**$$$$$$$$$$$$$$$$$$$ */
        [
            'id' => 181,
            'nombre' => 'Teorema 4',
            'formula' => '$$\\left\\lbrace {a,b,c,d}\\right\\rbrace \\in \\mathbb {R}\\\\Si\\:a>b\\:; c>d\\\\\\Rightarrow (a+c)>(b+d)$$',
            'detalle' => 'Suma de desigualdades: si a > b y c > d, entonces (a + c) > (b + d).',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-12 00:04:03',
            'updated_at' => '2023-04-13 02:43:51'
        ],
        [
            'id' => 182,
            'nombre' => 'Cuadrado de un binomio (suma)',
            'formula' => '$$\\left(a+b\\right)^2=a^2+2ab+b^2$$',
            'detalle' => 'Desarrollo del cuadrado de una suma de dos términos.',
            'indice' => 0,
            'tema_id' => 40,
            'created_at' => '2023-04-12 02:16:14',
            'updated_at' => '2023-06-14 18:22:57'
        ],
        [
            'id' => 183,
            'nombre' => 'Cuadrado de un binomio (Diferencia)',
            'formula' => '$$\\left(a-b\\right)^2=a^2-2ab+b^2$$',
            'detalle' => 'Desarrollo del cuadrado de una diferencia de dos términos.',
            'indice' => 0,
            'tema_id' => 40,
            'created_at' => '2023-04-12 02:18:58',
            'updated_at' => '2023-06-14 18:22:31'
        ],
        [
            'id' => 184,
            'nombre' => 'Producto de suma por diferencia de dos cantidades',
            'formula' => '$$\\left(a+b\\right)\\left(a-b\\right)=a^2-b^2$$',
            'detalle' => 'Diferencia de cuadrados: producto de suma por diferencia.',
            'indice' => 0,
            'tema_id' => 40,
            'created_at' => '2023-04-12 02:23:53',
            'updated_at' => '2023-06-14 18:24:24'
        ],
        [
            'id' => 185,
            'nombre' => 'Cubo de un binomio (Suma)',
            'formula' => '$$\\left(a+b\\right)^3=a^3+3a^2b+3ab^2+b^3$$',
            'detalle' => 'Desarrollo del cubo de una suma de dos términos.',
            'indice' => 0,
            'tema_id' => 40,
            'created_at' => '2023-04-12 02:29:38',
            'updated_at' => '2023-06-14 18:25:08'
        ],
        [
            'id' => 186,
            'nombre' => 'Cubo de un binomio (Diferencia)',
            'formula' => '$$\\left(a-b\\right)^3=a^3-3a^2b+3ab^2-b^3$$',
            'detalle' => 'Desarrollo del cubo de una diferencia de dos términos.',
            'indice' => 0,
            'tema_id' => 40,
            'created_at' => '2023-04-12 02:31:25',
            'updated_at' => '2023-06-14 18:25:49'
        ],
        [
            'id' => 187,
            'nombre' => 'Suma de Cubos',
            'formula' => '$$a^3+b^3=\\left(a+b\\right)\\left(a^2-ab+b^2\\right)$$',
            'detalle' => 'Factorización de la suma de dos cubos.',
            'indice' => 0,
            'tema_id' => 40,
            'created_at' => '2023-04-12 02:36:20',
            'updated_at' => '2023-04-12 02:36:20'
        ],
        [
            'id' => 188,
            'nombre' => 'Diferencia de Cubos',
            'formula' => '$$a^3-b^3=\\left(a-b\\right)\\left(a^2+ab+b^2\\right)$$',
            'detalle' => 'Factorización de la diferencia de dos cubos.',
            'indice' => 0,
            'tema_id' => 40,
            'created_at' => '2023-04-12 02:38:54',
            'updated_at' => '2023-04-12 02:38:54'
        ],
        [
            'id' => 189,
            'nombre' => 'Cuadrado de un Trinomio',
            'formula' => '$$\\left(a+b+c\\right)^2=a^2+b^2+c^2+2ab+2ac+2bc$$',
            'detalle' => 'Desarrollo del cuadrado de un trinomio.',
            'indice' => 0,
            'tema_id' => 40,
            'created_at' => '2023-04-12 02:46:20',
            'updated_at' => '2023-04-12 02:46:20'
        ],
        [
            'id' => 190,
            'nombre' => 'Multiplicaciones de un Binomio por Trinomio',
            'formula' => '$$\\left(a+b\\right)\\left(a^2-ab+b^2\\right)=a^3+b^3$$',
            'detalle' => 'Producto que resulta en suma de cubos.',
            'indice' => 0,
            'tema_id' => 40,
            'created_at' => '2023-04-12 03:12:02',
            'updated_at' => '2023-04-12 03:12:02'
        ],
        [
            'id' => 191,
            'nombre' => 'Multiplicaciones de un Binomio por Trinomio',
            'formula' => '$$\\left(a-b\\right)\\left(a^2+ab+b^2\\right)=a^3-b^3$$',
            'detalle' => 'Producto que resulta en diferencia de cubos.',
            'indice' => 0,
            'tema_id' => 40,
            'created_at' => '2023-04-12 03:12:49',
            'updated_at' => '2023-04-12 03:13:33'
        ],
        [
            'id' => 192,
            'nombre' => 'Si el vértice está en el origen (eje horizontal +) V(0,0) ; LR= 4a',
            'formula' => '$$y^2=+4ax\\\\F\\left(a,0\\right)\\\\y=-a$$',
            'detalle' => 'Parábola con vértice en origen que abre hacia la derecha.',
            'indice' => 0,
            'tema_id' => 20,
            'created_at' => '2023-04-12 03:31:15',
            'updated_at' => '2023-04-12 03:31:15'
        ],
        [
            'id' => 193,
            'nombre' => 'Si el vértice está en el origen (eje horizontal -) V(0,0) ; LR= 4a',
            'formula' => '$$y^2=-4ax\\\\\\:F\\left(-a,0\\right)\\\\y=a$$',
            'detalle' => 'Parábola con vértice en origen que abre hacia la izquierda.',
            'indice' => 0,
            'tema_id' => 20,
            'created_at' => '2023-04-12 03:33:36',
            'updated_at' => '2023-04-12 03:33:36'
        ],
        [
            'id' => 194,
            'nombre' => 'Binomio de Newton',
            'formula' => '$$\\left(a+b\\right)^n=\\frac{a^n}{0!}+n\\cdot \\frac{a^{n-1}\\cdot b}{1!}+n\\left(n-1\\right)\\cdot \\frac{a^{n-2}\\cdot b^2}{2!}+n\\left(n-1\\right)\\cdot \\frac{\\left(n-2\\right)}{3!}\\cdot a^{n-3}\\cdot b^3+......+b^n$$',
            'detalle' => 'Expansión de un binomio elevado a cualquier potencia n.',
            'indice' => 0,
            'tema_id' => 40,
            'created_at' => '2023-04-12 04:50:43',
            'updated_at' => '2023-06-14 18:31:35'
        ],
        [
            'id' => 195,
            'nombre' => 'Ecuación canónica de la Elipse de eje horizontal: C(h,k)  ; a^2=b^2+c^2; LR=2b^2/a; EM= 2a;  Em= 2b',
            'formula' => '$$\\frac{\\left(x-h\\right)^2}{a^2}+\\frac{\\left(y-k\\right)^2}{b^2}=1\\\\V(h\\pm{a},k)\\:\\:\\:F(h\\pm{c},k)$$',
            'detalle' => 'Elementos de elipse horizontal con centro en (h,k).',
            'indice' => 0,
            'tema_id' => 21,
            'created_at' => '2023-04-12 20:38:26',
            'updated_at' => '2023-04-15 02:27:34'
        ],
        [
            'id' => 196,
            'nombre' => 'NORMALIDAD',
            'formula' => '$$N\\:=OXI\\cdot \\text{ M}\\:\\:\\left[\\frac{equivalente}{moles}\\right]\\\\OXI=\\frac{eq}{mol}$$',
            'detalle' => 'Relación entre normalidad y molaridad usando equivalente oxidación.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-12 22:47:24',
            'updated_at' => '2023-08-16 16:44:01'
        ],
        [
            'id' => 197,
            'nombre' => 'PESO EQUIVALENTES PARA ACIDOS',
            'formula' => '$$Eq\\:=\\frac{PM}{oxidación\\:catión}$$',
            'detalle' => 'Cálculo de equivalentes para ácidos basado en oxidación del catión.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-12 22:53:49',
            'updated_at' => '2023-04-12 22:53:49'
        ],
        [
            'id' => 198,
            'nombre' => 'EQUIVALENTES PARA HIDROXIDOS',
            'formula' => '$$Eq\\:=\\frac{PM}{oxidación\\:aniòn}$$',
            'detalle' => 'Cálculo de equivalentes para hidróxidos basado en oxidación del anión.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-12 22:55:54',
            'updated_at' => '2023-04-12 22:55:54'
        ],
        [
            'id' => 199,
            'nombre' => 'PESO EQUIVALENTES PARA SALES',
            'formula' => '$$Eq\\:=\\frac{PM}{oxidación\\:catión}$$',
            'detalle' => 'Cálculo de equivalentes para sales basado en oxidación del catión.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-12 22:58:58',
            'updated_at' => '2023-04-12 22:58:58'
        ],
        [
            'id' => 200,
            'nombre' => 'MOLALIDAD',
            'formula' => '$$\\overline{m}\\:=\\frac{n}{m}\\:\\left[\\frac{moles\\:de\\:soluto}{Kilogramo\\:agua}\\right]$$',
            'detalle' => 'Concentración molal: moles de soluto por kilogramo de solvente.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-12 23:03:01',
            'updated_at' => '2023-04-20 19:30:35'
        ],
    /**$$$$$$$$$$$$$$$$$$$ */
        [
            'id' => 201,
            'nombre' => 'SOLUBILIDAD',
            'formula' => '$$S\\:=\\frac{m\\left(soluto\\right)}{m\\left(solvente\\right)}$$',
            'detalle' => 'Relación entre masa de soluto y masa de solvente en una solución.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-12 23:34:42',
            'updated_at' => '2023-04-12 23:34:42'
        ],
        [
            'id' => 202,
            'nombre' => 'SOLUBILIDAD GENERAL',
            'formula' => '$$\\frac{S-S_1}{S_2-S_1}\\:=\\frac{T-T_1}{T_2-T_1}$$',
            'detalle' => 'Relación de solubilidad entre diferentes temperaturas.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-12 23:39:25',
            'updated_at' => '2023-04-12 23:39:25'
        ],
        [
            'id' => 203,
            'nombre' => 'VOLUMEN EN CONDICIONES NORMALES',
            'formula' => '$$V=V_m \\cdot n (litro)   V_m=22.4\\:\\lfloor \\frac{litro}{moles}\\rfloor$$',
            'detalle' => 'Cálculo de volumen molar en condiciones normales de temperatura y presión.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-12 23:55:12',
            'updated_at' => '2023-05-09 16:01:29'
        ],
        [
            'id' => 204,
            'nombre' => 'Suma de Números Complejos',
            'formula' => '$$\\left(a+bi\\right)+\\left(c+di\\right)=\\left(a+c\\right)+\\left(b+d\\right)i$$',
            'detalle' => 'Suma de partes reales e imaginarias por separado.',
            'indice' => 0,
            'tema_id' => 45,
            'created_at' => '2023-04-13 02:27:22',
            'updated_at' => '2023-04-13 02:27:22'
        ],
        [
            'id' => 205,
            'nombre' => 'Resta de Números Complejos',
            'formula' => '$$\\left(a+bi\\right)-\\left(c+di\\right)=\\left(a-c\\right)+\\left(b-d\\right)i$$',
            'detalle' => 'Resta de partes reales e imaginarias por separado.',
            'indice' => 0,
            'tema_id' => 45,
            'created_at' => '2023-04-13 02:32:57',
            'updated_at' => '2023-04-13 02:32:57'
        ],
        [
            'id' => 206,
            'nombre' => 'Multiplicación de Números Complejos',
            'formula' => '$$\\left(a+bi\\right)\\left(c+di\\right)=\\left(ac-bd\\right)+\\left(ad+cb\\right)i$$',
            'detalle' => 'Producto aplicando distributiva y considerando i² = -1.',
            'indice' => 0,
            'tema_id' => 45,
            'created_at' => '2023-04-13 02:37:30',
            'updated_at' => '2023-04-13 02:37:30'
        ],
        [
            'id' => 207,
            'nombre' => 'División de Números Complejos',
            'formula' => '$$\\frac{a+bi}{c+di}=(\\frac{ac+bd}{c^2+d^2})+(\\frac{bc-ad}{c^2+d^2})i$$',
            'detalle' => 'División usando conjugado del denominador para racionalizar.',
            'indice' => 0,
            'tema_id' => 45,
            'created_at' => '2023-04-13 04:37:14',
            'updated_at' => '2023-04-19 16:53:19'
        ],
        [
            'id' => 208,
            'nombre' => 'Dominio para funciones logarítmicas ( Caso 2 )',
            'formula' => '$$f\\left(x\\right)=\\log_{b\\left(x\\right)}\\left[h\\left(x\\right)\\right]\\\\b\\left(x\\right)>0$$',
            'detalle' => 'Restricción adicional: base del logaritmo debe ser positiva.',
            'indice' => 0,
            'tema_id' => 16,
            'created_at' => '2023-04-13 05:24:19',
            'updated_at' => '2023-04-13 05:24:19'
        ],
        [
            'id' => 209,
            'nombre' => 'Limite de una Constante',
            'formula' => '$$\\lim _{x\\to C}\\left(K\\right)=K$$',
            'detalle' => 'El límite de una constante es la misma constante.',
            'indice' => 0,
            'tema_id' => 23,
            'created_at' => '2023-04-13 05:42:50',
            'updated_at' => '2023-04-13 05:42:50'
        ],
        [
            'id' => 210,
            'nombre' => 'Limite de una función Constante',
            'formula' => '$$\\lim _{x\\to c}\\left(x\\right)=c$$',
            'detalle' => 'Límite de la función identidad cuando x tiende a c.',
            'indice' => 0,
            'tema_id' => 23,
            'created_at' => '2023-04-13 05:54:11',
            'updated_at' => '2023-04-13 05:54:11'
        ],
        [
            'id' => 211,
            'nombre' => 'Limite del Producto de una Constante por una Función',
            'formula' => '$$\\lim _{x\\to c\\:}Kf\\left(x\\right)=K\\lim _{x\\to c}\\:f\\left(x\\right)$$',
            'detalle' => 'La constante puede factorizarse fuera del límite.',
            'indice' => 0,
            'tema_id' => 23,
            'created_at' => '2023-04-13 06:13:03',
            'updated_at' => '2023-04-13 06:13:03'
        ],
        [
            'id' => 212,
            'nombre' => 'Limite de la Suma de dos Funciones',
            'formula' => '$$\\lim _{x\\to c}\\left(\\:f\\left(x\\right)+g\\left(x\\right)\\right)=\\lim _{x\\to c}\\:f\\left(x\\right)+\\lim _{x\\to c}\\:g\\left(x\\right)$$',
            'detalle' => 'Límite de una suma es igual a la suma de los límites.',
            'indice' => 0,
            'tema_id' => 23,
            'created_at' => '2023-04-13 06:21:42',
            'updated_at' => '2023-04-18 01:41:20'
        ],
        [
            'id' => 213,
            'nombre' => 'Limite de la Resta de dos Funciones',
            'formula' => '$$\\lim _{x\\to c}\\left(\\:f\\left(x\\right)-g\\left(x\\right)\\right)=\\lim _{x\\to c}\\:f\\left(x\\right)-\\lim _{x\\to c}\\:g\\left(x\\right)$$',
            'detalle' => 'Límite de una resta es igual a la resta de los límites.',
            'indice' => 0,
            'tema_id' => 23,
            'created_at' => '2023-04-13 06:28:15',
            'updated_at' => '2023-04-18 01:42:04'
        ],
        [
            'id' => 214,
            'nombre' => 'Teorema 5:',
            'formula' => '$$a\\in\\mathbb{R}\\\\a>0\\Leftrightarrow-a<0$$',
            'detalle' => 'Relación entre un número positivo y su opuesto negativo.',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-13 21:02:16',
            'updated_at' => '2023-04-18 16:22:30'
        ],
        [
            'id' => 215,
            'nombre' => 'Ecuación canónica de la Elipse de eje vertical: C(h,k) ; a^2=b^2+c^2; LR=2b^2/a; EM= 2a ; Em= 2b',
            'formula' => '$$\\frac{\\left(y-k\\right)^2}{a^2}+\\frac{\\left(x-h\\right)^2}{b^2}=1\\\\V(h,k\\pm{a})\\:\\:\\:F(h,k\\pm{c})$$',
            'detalle' => 'Elementos de elipse vertical con centro en (h,k).',
            'indice' => 0,
            'tema_id' => 21,
            'created_at' => '2023-04-13 23:27:36',
            'updated_at' => '2023-04-15 02:29:03'
        ],
        [
            'id' => 216,
            'nombre' => 'Elipse de eje horizontal, con centro en el origen ; a^2=b^2+c^2; LR=2b^2/a; EM= 2a; Em= 2b',
            'formula' => '$$\\frac{x^2}{a^2}+\\frac{y^2}{b^2}=1\\\\V(\\pm{a},0)\\:\\:F(\\pm{c}, 0)$$',
            'detalle' => 'Elementos de elipse horizontal con centro en origen.',
            'indice' => 0,
            'tema_id' => 21,
            'created_at' => '2023-04-15 02:37:54',
            'updated_at' => '2023-04-15 02:37:54'
        ],
        [
            'id' => 217,
            'nombre' => 'Elipse de eje vertical, con centro en el origen ; a^2=b^2+c^2; LR=2b^2/a; EM= 2a; Em= 2',
            'formula' => '$$\\frac{y^2}{a^2}+\\frac{x^2}{b^2}=1\\\\V(0, \\pm{a})\\:\\:F(0,\\pm{c})$$',
            'detalle' => 'Elementos de elipse vertical con centro en origen.',
            'indice' => 0,
            'tema_id' => 21,
            'created_at' => '2023-04-15 02:42:04',
            'updated_at' => '2023-04-15 02:42:04'
        ],
        [
            'id' => 218,
            'nombre' => 'Ecuación de la Hipérbola de eje horizontal: c^2=a^2+b^2; C(h,k); ER=2a; EI= 2b; LR= 2b^2/a',
            'formula' => '$$\\frac{(x-h)^2}{a^2}-\\frac{(y-k)^2}{b^2}=1\\\\V(h\\pm{a},k)\\:\\:F(h\\pm{c},k)\\\\y-k=\\pm\\frac{b}{a}(x-h)$$',
            'detalle' => 'Elementos de hipérbola horizontal con centro en (h,k).',
            'indice' => 0,
            'tema_id' => 22,
            'created_at' => '2023-04-15 20:21:46',
            'updated_at' => '2023-04-15 23:27:40'
        ],
        [
            'id' => 219,
            'nombre' => 'Ecuación de la Hipérbola de eje vertical: c^2=a^2+b^2; C(h,k); ER=2a; EI= 2b; LR= 2b^2/a',
            'formula' => '$$\\frac{(y-k)^2}{a^2}-\\frac{(x-k)^2}{b^2}=1\\\\V(h,k±a)\\:\\:\\: F(h,k±c)\\\\y-k=\\pm\\frac{a}{b}(x-h)$$',
            'detalle' => 'Elementos de hipérbola vertical con centro en (h,k).',
            'indice' => 0,
            'tema_id' => 22,
            'created_at' => '2023-04-15 23:11:09',
            'updated_at' => '2023-04-15 23:29:02'
        ],
        [
            'id' => 220,
            'nombre' => 'Hipérbola con Centro en el origen C(0,0) y eje horizontal',
            'formula' => '$$\\frac{x^2}{a^2}-\\frac{y^2}{b^2}=1\\\\V(\\pm{a},0)\\:\\:F(\\pm{c},0)\\\\y=\\pm\\frac{b}{a}x$$',
            'detalle' => 'Elementos de hipérbola horizontal con centro en origen.',
            'indice' => 0,
            'tema_id' => 22,
            'created_at' => '2023-04-15 23:26:19',
            'updated_at' => '2023-04-15 23:26:19'
        ],
        [
            'id' => 221,
            'nombre' => 'Hipérbola con centro en el origen C(0,0) y eje vertical',
            'formula' => '$$\\frac{y^2}{a^2}-\\frac{x^2}{b^2}=1\\\\V(0,\\pm{a})\\:\\:F(0,\\pm{c})\\\\y=\\pm\\frac{a}{b}x$$',
            'detalle' => 'Elementos de hipérbola vertical con centro en origen.',
            'indice' => 0,
            'tema_id' => 22,
            'created_at' => '2023-04-15 23:38:01',
            'updated_at' => '2023-04-15 23:38:01'
        ],
        [
            'id' => 222,
            'nombre' => 'Teorema 6:',
            'formula' => '$$\\left\\lbrace {a,b,} \\right\\rbrace \\in \\mathbb {R}\\\\a>b\\Leftrightarrow -a<-b$$',
            'detalle' => 'Relación entre desigualdad y sus inversos aditivos.',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-17 15:50:46',
            'updated_at' => '2023-04-18 16:23:17'
        ],
        [
            'id' => 223,
            'nombre' => 'Ecuación general de la elipse de eje horizontal: semiejes a,b,c y C(h,k)',
            'formula' => '$$Ax^2+By^2+Dx+Ey+F=0\\:\\:B>A\\\\a=\\sqrt{B};\\:\\:b=\\sqrt{A};\\:\\:c=\\sqrt{B-A}\\\\h=-\\frac{D}{2A};\\:\\:k=-\\frac{E}{2B}\\\\Si:F=\\frac{D^2}{4A}+\\frac{E^2}{4B}-AB$$',
            'detalle' => 'Forma general y parámetros de elipse horizontal.',
            'indice' => 0,
            'tema_id' => 21,
            'created_at' => '2023-04-17 16:46:16',
            'updated_at' => '2023-04-17 16:46:16'
        ],
        [
            'id' => 224,
            'nombre' => 'Ecuación general dela elipse de eje vertical: semiejes a,b,c y C(h,k)',
            'formula' => '$$Ay^2+Bx^2+Dy+Ex+F=0;\\:\\:A>B\\\\a=\\sqrt{B};\\:b=\\sqrt{A};\\:c=\\sqrt{A-B}\\\\h=-\\frac{E}{2B};\\:k=-\\frac{D}{2A}\\\\Si: F=\\frac{D^2}{4A}+\\frac{E^2}{4B}-AB$$',
            'detalle' => 'Forma general y parámetros de elipse vertical.',
            'indice' => 0,
            'tema_id' => 21,
            'created_at' => '2023-04-17 17:04:14',
            'updated_at' => '2023-04-17 17:04:14'
        ],
        [
            'id' => 225,
            'nombre' => 'Ecuación general de la hipérbola de eje horizontal: semiejes a,b,c y C(h,k)',
            'formula' => '$$Ax^2-By^2+Dx+Ey+F=0\\\\a=\\sqrt{B};\\:b=\\sqrt{A};\\:c=\\sqrt{A+B}\\\\h=-\\frac{D}{2A};\\:k=\\frac{E}{2B}\\\\Si:\\:\\:\\:\\:F=\\frac{D^2}{4A}-\\frac{E^2}{4B}-AB$$',
            'detalle' => 'Forma general y parámetros de hipérbola horizontal.',
            'indice' => 0,
            'tema_id' => 22,
            'created_at' => '2023-04-17 17:25:54',
            'updated_at' => '2023-04-17 17:25:54'
        ],
    /**$$$$$$$$$$$$$$$$$$$ */
        [
            'id' => 226,
            'nombre' => 'Ecuación general de la hipérbola de eje vertical: semiejes a,b,c y C(h,k)',
            'formula' => '$$Ay^2-Bx^2+Dy+Ex+F=0\\\\a=\\sqrt{B};\\:b=\\sqrt{A};\\:c=\\sqrt{A+B}\\\\h=\\frac{E}{2B};k=-\\frac{D}{2A}\\\\Si: F=\\frac{D^2}{4A}-\\frac{E^2}{4B}-AB$$',
            'detalle' => 'Forma general y parámetros de hipérbola vertical con centro en (h,k).',
            'indice' => 0,
            'tema_id' => 22,
            'created_at' => '2023-04-17 17:40:36',
            'updated_at' => '2023-04-17 17:40:36'
        ],
        [
            'id' => 227,
            'nombre' => 'Sistema de ecuaciones de 2x2 ( por Cramer)',
            'formula' => '$$a_1x+b_1y=c_1\\\\a_2x+b_2y=c_2\\\\\\Delta=a_1b_2-a_2b_1;\\Delta_x=b_2c_1-b_1c_2;\\Delta_y=a_1c_2-a_2c_1\\\\x=\\frac{\\Delta x}{\\Delta};\\:\\:y=\\frac{\\Delta y}{\\Delta}$$',
            'detalle' => 'Método de Cramer para resolver sistemas de 2 ecuaciones con 2 incógnitas.',
            'indice' => 0,
            'tema_id' => 14,
            'created_at' => '2023-04-17 18:28:26',
            'updated_at' => '2023-04-17 18:29:15'
        ],
        [
            'id' => 228,
            'nombre' => 'Sistema de ecuaciones de 3x3 ( Cramer)',
            'formula' => '$$a_1x+b_1y+c_1z=d_1\\\\a_2x+b_2y+c_2z=d_2\\\\a_3x+b_3y+c_3z=d_3\\\\\\Delta=a_1(b_2c_3-b_3c_2)-b_1(a_2c_3-a_3c_2)+c_1(a_2b_3-a_3b_2)\\\\\\Delta_x=d_1(b_2c_3-b_3c_2)-b_1(d_2c_3-d_3c_2)+c_1(d_2b_3-d_3b_2)\\\\\\Delta_y=a_1(d_2c_3-d_3c_2)-d_1(a_2c_3-a_3c_2)+c_1(a_2d_3-a_3d_2)\\\\\\Delta_z=a_1(b_2d_3-b_3d_2)-b_1(a_2d_3-a_3d_2)+d_1(a_2b_3-a_3b_2)\\\\x=\\frac{\\Delta_x}{\\Delta};y=\\frac{\\Delta_y}{\\Delta};z=\\frac{\\Delta_z}{\\Delta}$$',
            'detalle' => 'Método de Cramer extendido para sistemas de 3 ecuaciones con 3 incógnitas.',
            'indice' => 0,
            'tema_id' => 14,
            'created_at' => '2023-04-17 18:56:06',
            'updated_at' => '2023-04-17 18:56:06'
        ],
        [
            'id' => 243,
            'nombre' => 'No negatividad',
            'formula' => '$$|x|\\geq0;\\:\\forall \\:a\\:\\in\\:\\mathbb{R}$$',
            'detalle' => 'El valor absoluto siempre es mayor o igual a cero para cualquier número real.',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-19 16:06:56',
            'updated_at' => '2023-04-19 16:06:56'
        ],
        [
            'id' => 229,
            'nombre' => 'Limite del Cociente de dos Funciones',
            'formula' => '$$\\lim _{x\\to c}\\left(\\frac{f\\left(x\\right)}{g\\left(x\\right)}\\right)=\\frac{\\lim _{x\\to c}\\:\\:f\\:\\left(x\\right)}{\\lim _{x\\to c}\\:g\\left(x\\right)}$$',
            'detalle' => 'Límite de un cociente es igual al cociente de los límites (si denominador ≠ 0).',
            'indice' => 0,
            'tema_id' => 23,
            'created_at' => '2023-04-18 01:58:36',
            'updated_at' => '2023-04-18 01:58:36'
        ],
        [
            'id' => 230,
            'nombre' => 'Limite de la Potencia de dos Funciones',
            'formula' => '$$\\lim _{x\\to c}\\:\\left(f\\left(x\\right)^{g\\left(x\\right)}\\right)=\\lim _{x\\to c}\\left(f\\left(x\\right)^{\\lim _{x\\to c}\\left(g\\left(x\\right)\\right)}\\right)$$',
            'detalle' => 'Límite de una potencia es la potencia de los límites individuales.',
            'indice' => 0,
            'tema_id' => 23,
            'created_at' => '2023-04-18 02:22:33',
            'updated_at' => '2023-04-18 02:22:33'
        ],
        [
            'id' => 231,
            'nombre' => 'Factorial de un número natural y Combinación de \'\'n\'\' en \'\'k\'\'',
            'formula' => '$$n!=n·(n-1)·(n-2)·(n-3).......·3·2·1\\\\\\begin{pmatrix}n\\\\ k\\end{pmatrix}=\\frac{n!}{k!\\left(n-k\\right)!}$$',
            'detalle' => 'Definición de factorial y fórmula para combinaciones matemáticas.',
            'indice' => 0,
            'tema_id' => 42,
            'created_at' => '2023-04-18 16:13:08',
            'updated_at' => '2023-04-18 16:13:08'
        ],
        [
            'id' => 232,
            'nombre' => 'Desarrollo del Binomio de Newton',
            'formula' => '$$(a+b)^n=\\sum _{k=0}^n\\:\\begin{pmatrix}n\\\\ k\\end{pmatrix}a^{n-k}b^k$$',
            'detalle' => 'Expansión del binomio usando coeficientes combinatorios.',
            'indice' => 0,
            'tema_id' => 42,
            'created_at' => '2023-04-18 16:24:59',
            'updated_at' => '2023-04-18 19:13:13'
        ],
        [
            'id' => 233,
            'nombre' => 'Teorema 7:',
            'formula' => '$$Si\\:a>b\\:y\\:c<0\\Rightarrow ac<bc$$',
            'detalle' => 'Multiplicación por negativo invierte la desigualdad.',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-18 16:28:31',
            'updated_at' => '2023-04-18 16:31:15'
        ],
        [
            'id' => 234,
            'nombre' => 'Término general ; k+1 es la posición del término buscado',
            'formula' => '$$T_{k+1}=\\:\\begin{pmatrix}n\\\\ k\\end{pmatrix}a^{n-k}b^k$$',
            'detalle' => 'Fórmula para encontrar cualquier término en el desarrollo binomial.',
            'indice' => 0,
            'tema_id' => 42,
            'created_at' => '2023-04-18 16:29:04',
            'updated_at' => '2023-04-18 16:29:04'
        ],
        [
            'id' => 235,
            'nombre' => 'FRACCION MOLAR',
            'formula' => '$$X_A=\\frac{N_A}{N_T}\\\\X_B=\\frac{N_B}{N_T}\\\\N_A=\\frac{M_A}{PM_A}\\\\N_B=\\frac{M_B}{PM_B}\\\\N_T=N_A+N_B$$',
            'detalle' => 'Relación entre moles de componente y moles totales en una mezcla.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-18 16:34:47',
            'updated_at' => '2023-04-18 16:35:51'
        ],
        [
            'id' => 236,
            'nombre' => 'Teorema 8:',
            'formula' => '$$Si\\:a\\neq 0\\Rightarrow a^2>0$$',
            'detalle' => 'El cuadrado de cualquier número real no nulo es positivo.',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-18 16:44:18',
            'updated_at' => '2023-04-18 16:44:18'
        ],
        [
            'id' => 237,
            'nombre' => 'Término central si \'\'n\'\' es par',
            'formula' => '$$m=\\frac{n+2}{2};\\:\\:T_m=\\begin{pmatrix}n\\\\ m-1\\end{pmatrix}a^{n-m+1}b^{m-1}$$',
            'detalle' => 'Fórmula para encontrar el término central en desarrollo binomial con n par.',
            'indice' => 0,
            'tema_id' => 42,
            'created_at' => '2023-04-18 16:44:26',
            'updated_at' => '2023-04-18 16:44:26'
        ],
        [
            'id' => 238,
            'nombre' => 'Teorema 9:',
            'formula' => '$$Si\\:a>0\\Longleftrightarrow \\frac{1}{a}>0$$',
            'detalle' => 'Un número positivo tiene inverso positivo y viceversa.',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-18 16:56:15',
            'updated_at' => '2023-04-18 17:00:13'
        ],
        [
            'id' => 239,
            'nombre' => 'Términos centrales si \'\'n\'\' es impar',
            'formula' => '$$m_1=\\frac{n+1}{2};\\:\\:m_2=\\frac{n+3}{2}\\\\\\:T_{m_1}=\\begin{pmatrix}n\\\\ m_1-1\\end{pmatrix}a^{n-m_1+1}b^{m_1-1}\\\\T_{m_2}=\\begin{pmatrix}n\\\\m_2-1\\end{pmatrix}a^{n-m_2+1}b^{m_2-1}$$',
            'detalle' => 'Fórmula para los dos términos centrales en desarrollo binomial con n impar.',
            'indice' => 0,
            'tema_id' => 42,
            'created_at' => '2023-04-18 17:01:41',
            'updated_at' => '2023-04-18 19:03:09'
        ],
        [
            'id' => 240,
            'nombre' => 'Teorema 10:',
            'formula' => '$$Si\\:a>b\\:\\:y\\:\\:c>0\\Rightarrow \\frac{a}{c}>\\frac {b}{c}$$',
            'detalle' => 'División por positivo mantiene la desigualdad.',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-18 17:11:56',
            'updated_at' => '2023-04-18 17:13:10'
        ],
        [
            'id' => 241,
            'nombre' => 'Teorema 11:',
            'formula' => '$$Si\\:a>b\\:\\:y\\:\\:c<0\\Rightarrow \\frac{a}{c}<\\frac {b}{c}\\\\Si\\:a<b\\:\\:y\\:\\:c<0\\Rightarrow \\frac{a}{c}>\\frac {b}{c}$$',
            'detalle' => 'División por negativo invierte la desigualdad.',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-18 17:20:40',
            'updated_at' => '2023-04-18 17:20:40'
        ],
        [
            'id' => 242,
            'nombre' => 'Definiciones de valor absoluto',
            'formula' => '$$\\left|x\\right|=\\begin{pmatrix}x;\\:si\\:x\\ge 0\\\\ \\:-x;\\:si\\:x<0\\end{pmatrix}$$',
            'detalle' => 'Definición por casos del valor absoluto de un número real.',
            'indice' => 0,
            'tema_id' => 10,
            'created_at' => '2023-04-18 19:45:32',
            'updated_at' => '2023-04-18 19:45:32'
        ],
        [
            'id' => 244,
            'nombre' => 'Formas de representación de un número complejo',
            'formula' => '$$z=a+bi;\\:\\: r=\\sqrt{a^2+b^2};\\:\\:\\theta=tan^{-1}(\\frac{b}{a})\\\\Forma\\: Binómica:z=a+bi\\\\Forma\\:\\: Polar :z=r·(cos\\theta+sin\\theta i)\\\\Forma \\:Exponencial:z=r·e^{\\theta i}$$',
            'detalle' => 'Diferentes representaciones matemáticas de números complejos.',
            'indice' => 0,
            'tema_id' => 45,
            'created_at' => '2023-04-19 16:31:16',
            'updated_at' => '2023-04-19 16:31:16'
        ],
        [
            'id' => 245,
            'nombre' => 'Cuadrado de un número complejo z=a+bi',
            'formula' => '$$z^2=(a^2-b^2)+(2ab)i\\:\\:( Binómica)\\\\z^2=r^2·[cos(2\\theta)+sin(2\\theta)]\\:\\:(Polar)\\\\z^2=r^2·e^{(2\\theta) i}\\:\\:(Exponencial)$$',
            'detalle' => 'Fórmulas para calcular el cuadrado en diferentes representaciones.',
            'indice' => 0,
            'tema_id' => 45,
            'created_at' => '2023-04-19 16:51:49',
            'updated_at' => '2023-04-19 17:03:05'
        ],
        [
            'id' => 246,
            'nombre' => 'Potencia de un número complejo z=a+bi',
            'formula' => '$$z^n=r^n·[cos(n\\theta)+sin(n\\theta)i]\\:\\:(Polar)\\\\z^n=r^n·e^{(n\\theta) i}\\:\\:(Exponencial)$$',
            'detalle' => 'Fórmula de De Moivre para potencias de números complejos.',
            'indice' => 0,
            'tema_id' => 45,
            'created_at' => '2023-04-19 16:59:35',
            'updated_at' => '2023-04-19 17:04:29'
        ],
        [
            'id' => 247,
            'nombre' => 'Raíz de un número complejo; z=a+bi',
            'formula' => '$$\\sqrt[n]{z}=\\sqrt[n]{z}·[cos(\\frac{\\theta+360ºk}{n})+sin(\\frac{\\theta+360ºk}{n})i]\\\\Para:\\:k=0,1,2,...,(n-1)$$',
            'detalle' => 'Fórmula para calcular raíces n-ésimas de números complejos.',
            'indice' => 0,
            'tema_id' => 45,
            'created_at' => '2023-04-19 18:11:22',
            'updated_at' => '2023-04-19 18:11:22'
        ],
        [
            'id' => 248,
            'nombre' => 'Logaritmo natural y logaritmo de base cualquiera de un número complejo; z= a+bi',
            'formula' => '$$Ln( z)=Ln(r)+\\theta i;\\:\\:\\:\\theta=en\\:\\:rads\\\\Log_m(z)=Log_m(r)+[\\theta·Log_m(e)]i$$',
            'detalle' => 'Fórmulas para logaritmos de números complejos en forma polar.',
            'indice' => 0,
            'tema_id' => 45,
            'created_at' => '2023-04-19 18:54:33',
            'updated_at' => '2023-04-19 18:54:33'
        ],
        [
            'id' => 249,
            'nombre' => 'PRIMERA LEY DE LA TERMODINAMICA',
            'formula' => '$$Q\\:=(U_2-U_1)+\\frac{\\overline{m}\\left(V^2_2-V^2_1\\right)}{2Q_C}+\\frac{\\overline{m}^{ }\\left(Z_2-Z_1\\right)}{Q_C}+W$$',
            'detalle' => 'Conservación de la energía en sistemas termodinámicos.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-19 19:07:02',
            'updated_at' => '2023-04-19 19:07:02'
        ],
        [
            'id' => 250,
            'nombre' => 'FLUJO CALORIMETRO',
            'formula' => '$$\\overline{m}\\:=\\frac{q}{t}\\:\\left[\\frac{calorias}{segundo}\\right]$$',
            'detalle' => 'Cálculo del flujo de calor por unidad de tiempo.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-19 19:15:41',
            'updated_at' => '2023-04-19 19:15:41'
        ],
    /**$$$$$$$$$$$$$$$$$$$ */
        [
            'id' => 251,
            'nombre' => 'FLUJO VOLUMETRICO',
            'formula' => '$$v=\\frac{V}{\\:M}\\:\\left[\\frac{m^3}{Kgr}\\right]$$',
            'detalle' => 'Relación entre volumen y masa en un flujo volumétrico.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-19 19:19:33',
            'updated_at' => '2023-04-19 19:19:33'
        ],
        [
            'id' => 252,
            'nombre' => 'ECUACION DE VANN DER WAALS',
            'formula' => '$$\\left(P+\\frac{a·n^2}{V^2}\\right)·\\left(V-n·b\\right)=n·R·T$$',
            'detalle' => 'Ecuación de estado para gases reales que considera volumen molecular y fuerzas intermoleculares.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-19 19:26:06',
            'updated_at' => '2023-04-19 19:26:06'
        ],
        [
            'id' => 253,
            'nombre' => 'Definición de la derivada de una función f(x)',
            'formula' => '$$f\'_{(x)}=\\frac{dy}{dx}=lim_{\\Delta x->0}\\frac{{f(x+\\Delta x})-f(x)}{\\Delta x}$$',
            'detalle' => 'Definición fundamental de derivada como límite del cociente incremental.',
            'indice' => 0,
            'tema_id' => 24,
            'created_at' => '2023-04-19 19:34:13',
            'updated_at' => '2023-04-19 19:34:13'
        ],
        [
            'id' => 254,
            'nombre' => 'ENTALPIA DEFORMACION',
            'formula' => '$$H_f=H_{reactantes}-H_{productos} \\\\A_R+B_{_R}\\rightarrow \\:C_p+D_p$$',
            'detalle' => 'Diferencia de entalpías entre reactantes y productos en una reacción química.',
            'indice' => 0,
            'tema_id' => 92,
            'created_at' => '2023-04-19 19:42:37',
            'updated_at' => '2023-04-19 19:42:37'
        ],
        [
            'id' => 255,
            'nombre' => 'Tabla de derivadas: Derivada de una constante',
            'formula' => '$$f(x)=a \\\\f\'(x)= 0$$',
            'detalle' => 'La derivada de cualquier constante es siempre cero.',
            'indice' => 0,
            'tema_id' => 24,
            'created_at' => '2023-04-19 19:48:48',
            'updated_at' => '2023-06-20 16:34:40'
        ],
        [
            'id' => 256,
            'nombre' => 'Ley de identidad (Reflexividad)',
            'formula' => '$$p\\rightarrow p\\\\p\\longleftrightarrow p$$',
            'detalle' => 'Principio lógico que establece que toda proposición implica y es equivalente a sí misma.',
            'indice' => 0,
            'tema_id' => 9,
            'created_at' => '2023-04-20 16:04:22',
            'updated_at' => '2023-04-20 16:04:22'
        ],
        [
            'id' => 257,
            'nombre' => 'Ley de No contradicción',
            'formula' => '$$\\backsim (p\\land\\backsim p )$$',
            'detalle' => 'Principio lógico que establece que una proposición no puede ser verdadera y falsa simultáneamente.',
            'indice' => 0,
            'tema_id' => 9,
            'created_at' => '2023-04-20 16:53:17',
            'updated_at' => '2023-04-20 16:53:17'
        ],
        [
            'id' => 258,
            'nombre' => 'Cubo',
            'formula' => '$$V=L^3\\\\A_T=6L^3$$',
            'detalle' => 'Volumen: lado al cubo. Área total: 6 veces el cuadrado del lado.',
            'indice' => 0,
            'tema_id' => 29,
            'created_at' => '2023-04-20 19:31:48',
            'updated_at' => '2023-11-14 18:56:08'
        ],
        [
            'id' => 259,
            'nombre' => 'Prisma regular',
            'formula' => '$$V=A_b\\cdot h$$',
            'detalle' => 'Volumen: área de la base por altura.',
            'indice' => 0,
            'tema_id' => 29,
            'created_at' => '2023-04-20 19:33:49',
            'updated_at' => '2023-04-24 15:59:52'
        ],
        [
            'id' => 260,
            'nombre' => 'Pirámide',
            'formula' => '$$V=\\frac{1}{3}\\cdot A_b\\cdot h$$',
            'detalle' => 'Volumen: un tercio del área de la base por la altura.',
            'indice' => 0,
            'tema_id' => 29,
            'created_at' => '2023-04-20 19:35:45',
            'updated_at' => '2023-04-20 19:40:14'
        ],
        [
            'id' => 261,
            'nombre' => 'Cilindro',
            'formula' => '$$V=\\pi\\cdot r^2\\cdot h$$',
            'detalle' => 'Volumen: π por radio al cuadrado por altura.',
            'indice' => 0,
            'tema_id' => 29,
            'created_at' => '2023-04-20 19:37:25',
            'updated_at' => '2023-04-24 15:53:02'
        ],
        [
            'id' => 262,
            'nombre' => 'Cono',
            'formula' => '$$V=\\frac{1}{3}\\cdot\\pi \\cdot r^2\\cdot h$$',
            'detalle' => 'Volumen: un tercio de π por radio al cuadrado por altura.',
            'indice' => 0,
            'tema_id' => 29,
            'created_at' => '2023-04-20 19:38:43',
            'updated_at' => '2023-04-20 19:38:43'
        ],
        [
            'id' => 263,
            'nombre' => 'Esfera',
            'formula' => '$$V=\\frac{4}{3}\\cdot\\pi \\cdot r^3$$',
            'detalle' => 'Volumen: cuatro tercios de π por radio al cubo.',
            'indice' => 0,
            'tema_id' => 29,
            'created_at' => '2023-04-20 19:39:36',
            'updated_at' => '2023-04-20 19:39:36'
        ],
        [
            'id' => 264,
            'nombre' => 'Derivada de \'\'x\'\'',
            'formula' => '$$f ( x ) = x \\\\f \'(x)=1$$',
            'detalle' => 'La derivada de la función identidad es siempre 1.',
            'indice' => 0,
            'tema_id' => 24,
            'created_at' => '2023-04-21 19:56:33',
            'updated_at' => '2023-06-20 18:30:01'
        ],
        [
            'id' => 265,
            'nombre' => 'Derivada de una potencia',
            'formula' => '$$f ( x ) = x^n \\\\ f \'( x ) = n⋅x ^{n-1}$$',
            'detalle' => 'Regla de la potencia: exponente multiplica a x elevado a exponente menos uno.',
            'indice' => 0,
            'tema_id' => 24,
            'created_at' => '2023-04-21 23:54:44',
            'updated_at' => '2023-06-20 18:30:29'
        ],
        [
            'id' => 266,
            'nombre' => 'Derivada de una función exponencial',
            'formula' => '$$f ( x ) = e ^x \\\\f ′ ( x ) = e^x$$',
            'detalle' => 'La función exponencial natural es su propia derivada.',
            'indice' => 0,
            'tema_id' => 24,
            'created_at' => '2023-04-21 23:56:45',
            'updated_at' => '2023-06-20 18:30:57'
        ],
        [
            'id' => 267,
            'nombre' => 'Derivada de una función exponencial de base ctte.',
            'formula' => '$$f ( x ) = a^x \\\\f ′ ( x ) = a ^x· l n a$$',
            'detalle' => 'Derivada de exponencial con base distinta de e: función por logaritmo natural de la base.',
            'indice' => 0,
            'tema_id' => 24,
            'created_at' => '2023-04-21 23:59:38',
            'updated_at' => '2023-06-20 18:31:22'
        ],
        [
            'id' => 268,
            'nombre' => 'Derivada de una función exponencial de base y exponente variable',
            'formula' => '$$f ( x ) = x^x \\\\f ′ ( x ) = x^x· ( l n x + 1 )$$',
            'detalle' => 'Derivada de función con variable en base y exponente: x^x(lnx + 1).',
            'indice' => 0,
            'tema_id' => 24,
            'created_at' => '2023-04-22 00:01:50',
            'updated_at' => '2023-06-20 18:31:47'
        ],
        [
            'id' => 269,
            'nombre' => 'Derivada de un logaritmo neperiano',
            'formula' => '$$f ( x ) = l n x \\\\f \'( x ) =\\frac{1} x$$',
            'detalle' => 'Derivada del logaritmo natural: inverso de x.',
            'indice' => 0,
            'tema_id' => 24,
            'created_at' => '2023-04-22 00:04:19',
            'updated_at' => '2023-06-20 18:32:16'
        ],
        [
            'id' => 270,
            'nombre' => 'Derivada de un logaritmo en cualquier base \'\'a\'\' ;a>0',
            'formula' => '$$f ( x ) = l o g_ax \\\\ f \'( x ) = \\frac{log_a e}{x}$$',
            'detalle' => 'Derivada de logaritmo en base a: (log_a e)/x.',
            'indice' => 0,
            'tema_id' => 24,
            'created_at' => '2023-04-22 00:07:55',
            'updated_at' => '2023-06-20 18:32:54'
        ],
        [
            'id' => 271,
            'nombre' => 'Derivada dela función SECANTE',
            'formula' => '$$f(x)=sec\\:x\\\\f\'(x)=sec\\:x·tan\\:x$$',
            'detalle' => 'Derivada de secante: secante por tangente.',
            'indice' => 0,
            'tema_id' => 24,
            'created_at' => '2023-04-22 00:17:19',
            'updated_at' => '2023-06-20 18:29:32'
        ],
        [
            'id' => 272,
            'nombre' => 'Limite de un Logaritmo',
            'formula' => '$$\\lim _{x\\to c}\\:Log\\:f\\left(x\\right)=Log\\:\\lim _{x\\to c}\\:f\\left(x\\right)$$',
            'detalle' => 'El límite del logaritmo es el logaritmo del límite (para funciones continuas).',
            'indice' => 0,
            'tema_id' => 23,
            'created_at' => '2023-04-22 00:57:31',
            'updated_at' => '2023-04-22 00:57:31'
        ],
        [
            'id' => 273,
            'nombre' => 'Función inversa f(x)= arc sinx',
            'formula' => '$$f\\left(x\\right)=sin^{-1}x\\\\f\'\\left(x\\right)=\\frac{1}{\\sqrt{1-x^2}}$$',
            'detalle' => 'Derivada del arcoseno: inverso de raíz cuadrada de (1 - x²).',
            'indice' => 0,
            'tema_id' => 24,
            'created_at' => '2023-04-22 16:36:50',
            'updated_at' => '2023-06-20 18:24:27'
        ],
        [
            'id' => 274,
            'nombre' => 'Regla del producto f(u,v) ;u(x) ;v(x)',
            'formula' => '$$(u·v)\'=u\'·v+u·v\'$$',
            'detalle' => 'Derivada de un producto: derivada del primero por el segundo sin derivar, más el primero sin derivar por derivada del segundo.',
            'indice' => 0,
            'tema_id' => 24,
            'created_at' => '2023-04-22 16:56:07',
            'updated_at' => '2023-06-20 18:47:39'
        ],
        [
            'id' => 275,
            'nombre' => 'Regla del cociente f(u,v) u(x) , v(x)',
            'formula' => '$$(\\frac{u}{v})\'=\\frac{u\'·v-u·v\'}{v^2}$$',
            'detalle' => 'Derivada de un cociente: (derivada del numerador por denominador - numerador por derivada del denominador) sobre denominador al cuadrado.',
            'indice' => 0,
            'tema_id' => 24,
            'created_at' => '2023-04-22 17:07:06',
            'updated_at' => '2023-06-20 18:46:16'
        ],
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 276,
        'nombre' => 'Derivada de la función COSENO',
        'formula' => '$$f ( x ) = c o s x \\\\f \'( x ) = − s i n x$$',
        'detalle' => 'Fórmula para derivar la función coseno.',
        'indice' => 0,
        'tema_id' => 24,
        'created_at' => '2023-04-22 17:42:44',
        'updated_at' => '2023-06-20 18:33:32'
    ],
    [
        'id' => 277,
        'nombre' => 'Derivada de la función TANGENTE',
        'formula' => '$$f ( x ) = t a n x \\\\ f \'( x ) = s e c^2x$$',
        'detalle' => 'Fórmula para derivar la función tangente.',
        'indice' => 0,
        'tema_id' => 24,
        'created_at' => '2023-04-22 19:52:04',
        'updated_at' => '2023-06-20 18:34:11'
    ],
    [
        'id' => 278,
        'nombre' => 'Derivada de la función SENO',
        'formula' => '$$f ( x ) = s i n x \\\\f\'( x ) = c o s x$$',
        'detalle' => 'Fórmula para derivar la función seno.',
        'indice' => 0,
        'tema_id' => 24,
        'created_at' => '2023-04-22 19:53:42',
        'updated_at' => '2023-06-20 18:34:44'
    ],
    [
        'id' => 279,
        'nombre' => 'Derivada de la función COTANGENTE',
        'formula' => '$$f ( x ) = c o t x \\\\ f\'( x ) = − c s c^2x$$',
        'detalle' => 'Fórmula para derivar la función cotangente.',
        'indice' => 0,
        'tema_id' => 24,
        'created_at' => '2023-04-22 19:55:46',
        'updated_at' => '2023-06-20 18:36:01'
    ],
    [
        'id' => 280,
        'nombre' => 'Cuadrado de lado \'\'a\'\'',
        'formula' => '$$P=4a$$',
        'detalle' => 'Perímetro de un cuadrado.',
        'indice' => 0,
        'tema_id' => 36,
        'created_at' => '2023-04-24 15:58:04',
        'updated_at' => '2023-04-24 15:58:04'
    ],
    [
        'id' => 281,
        'nombre' => 'Tetraedro',
        'formula' => '$$V=\\frac{\\sqrt{2}}{12}\\cdot a^3\\\\a=Arista$$',
        'detalle' => 'Volumen de un tetraedro regular.',
        'indice' => 0,
        'tema_id' => 29,
        'created_at' => '2023-04-24 15:59:11',
        'updated_at' => '2023-04-25 15:55:06'
    ],
    [
        'id' => 282,
        'nombre' => 'Rectángulo de largo o base \'\'b\'\' y ancho o altura \'\'a\'\'',
        'formula' => '$$P=2(a+b)$$',
        'detalle' => 'Perímetro de un rectángulo.',
        'indice' => 0,
        'tema_id' => 36,
        'created_at' => '2023-04-24 16:00:54',
        'updated_at' => '2023-04-24 16:00:54'
    ],
    [
        'id' => 283,
        'nombre' => 'Triángulo de lados \'\'a\'\' , \'\'b\'\' y \'\'c\'\'',
        'formula' => '$$P=a+b+c$$',
        'detalle' => 'Perímetro de un triángulo.',
        'indice' => 0,
        'tema_id' => 36,
        'created_at' => '2023-04-24 16:03:56',
        'updated_at' => '2023-04-24 16:03:56'
    ],
    [
        'id' => 284,
        'nombre' => 'Circuferencia de radio \'\'r\'\'',
        'formula' => '$$P=l =2\\pi r$$',
        'detalle' => 'Perímetro (circunferencia) de un círculo.',
        'indice' => 0,
        'tema_id' => 36,
        'created_at' => '2023-04-24 16:07:27',
        'updated_at' => '2023-04-24 16:07:27'
    ],
    [
        'id' => 285,
        'nombre' => 'Elipse de semiejes \'\'a\'\' y \'\'b\'\'',
        'formula' => '$$P=\\pi[3(a+b)-\\sqrt{(3a+b)(a+3b)}  ]\\:\\:(aprox.)$$',
        'detalle' => 'Fórmula aproximada del perímetro de una elipse.',
        'indice' => 0,
        'tema_id' => 36,
        'created_at' => '2023-04-24 18:45:34',
        'updated_at' => '2023-04-24 18:45:34'
    ],
    [
        'id' => 286,
        'nombre' => 'Perímetro de un polígono regular, dado el radio \'\'r\'\' ; número de lados \'\'n\'\'',
        'formula' => '$$P= n·l; \\:\\:\\theta=\\frac{360}{n};\\:\\:\\:l=r\\sqrt{2(1-cos \\theta)}$$',
        'detalle' => 'Cálculo del perímetro de un polígono regular.',
        'indice' => 0,
        'tema_id' => 36,
        'created_at' => '2023-04-24 18:56:04',
        'updated_at' => '2023-04-24 19:03:07'
    ],
    [
        'id' => 287,
        'nombre' => 'uno',
        'formula' => '$$\\frac{a^2-b^2}{a+b}=a-b$$',
        'detalle' => 'Identidad algebraica notable.',
        'indice' => 0,
        'tema_id' => 41,
        'created_at' => '2023-04-24 19:08:54',
        'updated_at' => '2023-04-24 19:08:54'
    ],
    [
        'id' => 288,
        'nombre' => 'dos',
        'formula' => '$$\\frac{a^2-b^2}{a-b}=a+b$$',
        'detalle' => 'Identidad algebraica notable.',
        'indice' => 0,
        'tema_id' => 41,
        'created_at' => '2023-04-24 19:10:13',
        'updated_at' => '2023-04-24 19:10:13'
    ],
    [
        'id' => 289,
        'nombre' => 'tres',
        'formula' => '$$\\frac{a^3+b^3}{a+b}=a^2-ab+b^2$$',
        'detalle' => 'Identidad algebraica notable.',
        'indice' => 0,
        'tema_id' => 41,
        'created_at' => '2023-04-24 19:11:59',
        'updated_at' => '2023-04-24 19:11:59'
    ],
    [
        'id' => 290,
        'nombre' => 'cuatro',
        'formula' => '$$\\frac{a^3+b^3}{a^2-ab+b^2}=a+b$$',
        'detalle' => 'Identidad algebraica notable.',
        'indice' => 0,
        'tema_id' => 41,
        'created_at' => '2023-04-24 19:14:18',
        'updated_at' => '2023-04-24 19:14:18'
    ],
    [
        'id' => 291,
        'nombre' => 'cinco',
        'formula' => '$$\\frac{a^3-b^3}{a-b}=a^2+ab+b^2$$',
        'detalle' => 'Identidad algebraica notable.',
        'indice' => 0,
        'tema_id' => 41,
        'created_at' => '2023-04-24 19:18:17',
        'updated_at' => '2023-04-24 19:18:17'
    ],
    [
        'id' => 292,
        'nombre' => 'seis',
        'formula' => '$$\\frac{a^3-b^3}{a^2+ab+b^2}=a-b$$',
        'detalle' => 'Identidad algebraica notable.',
        'indice' => 0,
        'tema_id' => 41,
        'created_at' => '2023-04-24 19:20:04',
        'updated_at' => '2023-04-24 19:20:04'
    ],
    [
        'id' => 293,
        'nombre' => 'siete',
        'formula' => '$$\\frac{a^n+b^n}{a+b}=a^{n-1}-a^{n-2}b+a^{n-3}b^2-..\\pm a^2b^{n-3}\\mp ab^{n-2}\\pm b^{n-1}\\\\n\\neq 2^m; n_ym =naturales$$',
        'detalle' => 'Identidad algebraica general.',
        'indice' => 0,
        'tema_id' => 41,
        'created_at' => '2023-04-24 19:38:46',
        'updated_at' => '2023-04-25 16:09:53'
    ],
    [
        'id' => 294,
        'nombre' => 'Limite por Definición General',
        'formula' => '$$\\lim _{x\\to a}\\left(nx+b\\right)=na+b$$',
        'detalle' => 'Fórmula general para calcular límites de funciones lineales.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-04-25 00:22:05',
        'updated_at' => '2023-04-25 00:22:05'
    ],
    [
        'id' => 296,
        'nombre' => 'Tronco de pirámide',
        'formula' => '$$V=\\frac{(A_B+A_b+\\sqrt{A_B\\cdot A_b})\\cdot h}{3}\\\\A_B=Área\\:base\\:mayor\\\\A_b=Área\\:base\\:menor$$',
        'detalle' => 'Volumen de un tronco de pirámide.',
        'indice' => 0,
        'tema_id' => 29,
        'created_at' => '2023-04-25 15:54:07',
        'updated_at' => '2023-04-25 15:54:07'
    ],
    [
        'id' => 297,
        'nombre' => 'Tronco de cono',
        'formula' => '$$V=\\frac{\\pi\\cdot h( R^2+r^2+R\\cdot r)}{3}\\\\R=Radio\\:mayor\\\\r=Radio\\:\\:menor$$',
        'detalle' => 'Volumen de un tronco de cono.',
        'indice' => 0,
        'tema_id' => 29,
        'created_at' => '2023-04-25 16:02:35',
        'updated_at' => '2023-04-25 16:02:35'
    ],
    [
        'id' => 298,
        'nombre' => 'Zona esférica',
        'formula' => '$$V=\\frac{\\pi\\cdot h( h^2+3R^2+3r^2)}{3}\\\\R=Radio\\:mayor\\\\r=Radio\\:\\:menor$$',
        'detalle' => 'Volumen de una zona esférica.',
        'indice' => 0,
        'tema_id' => 29,
        'created_at' => '2023-04-25 16:05:44',
        'updated_at' => '2023-04-25 16:05:44'
    ],
    [
        'id' => 299,
        'nombre' => 'Casquete esférico',
        'formula' => '$$V=\\frac{\\pi\\cdot h^2(3R-h)}{3}\\\\R=Radio\\:mayor$$',
        'detalle' => 'Volumen de un casquete esférico.',
        'indice' => 0,
        'tema_id' => 29,
        'created_at' => '2023-04-25 16:07:59',
        'updated_at' => '2023-04-25 16:07:59'
    ],
    [
        'id' => 300,
        'nombre' => 'Huso o Sector esférico',
        'formula' => '$$V=\\frac{4}{3}\\cdot \\pi \\cdot r^3\\cdot \\frac{n°}{360°}\\\\r=Radio\\\\n°=Ángulo$$',
        'detalle' => 'Volumen de un huso esférico.',
        'indice' => 0,
        'tema_id' => 29,
        'created_at' => '2023-04-25 16:11:36',
        'updated_at' => '2023-04-25 16:11:36'
    ],

    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 301,
        'nombre' => 'ocho',
        'formula' => '$$\\frac{a^n-b^n}{a-b}=a^{n-1}+a^{n-2}b+a^{n-3}b^2..+a^2b^{n-3}+ab^{n-2}+b^{n-1}\\\\n=natural$$',
        'detalle' => 'Identidad algebraica para diferencia de potencias.',
        'indice' => 0,
        'tema_id' => 41,
        'created_at' => '2023-04-25 16:16:26',
        'updated_at' => '2023-04-25 16:16:26'
    ],
    [
        'id' => 302,
        'nombre' => 'Alcance horizontal maximo',
        'formula' => '$$X_{max}=\\frac{V_0 ^2·sin(2\\theta)}{g}$$',
        'detalle' => 'Fórmula para calcular el alcance máximo en movimiento parabólico.',
        'indice' => 0,
        'tema_id' => 57,
        'created_at' => '2023-04-25 16:47:03',
        'updated_at' => '2023-04-25 16:47:03'
    ],
    [
        'id' => 303,
        'nombre' => 'Altura máxima alcanzada',
        'formula' => '$$Y_{max}=\\frac{V_0^2·sin^2\\theta}{2g}$$',
        'detalle' => 'Fórmula para calcular la altura máxima en movimiento parabólico.',
        'indice' => 0,
        'tema_id' => 57,
        'created_at' => '2023-04-25 16:49:53',
        'updated_at' => '2023-04-25 16:49:53'
    ],
    [
        'id' => 304,
        'nombre' => 'Tiempo total de vuelo',
        'formula' => '$$t_T=\\frac{2V_0sin\\theta}{g}$$',
        'detalle' => 'Fórmula para calcular el tiempo total de vuelo en movimiento parabólico.',
        'indice' => 0,
        'tema_id' => 57,
        'created_at' => '2023-04-25 16:52:43',
        'updated_at' => '2023-04-25 16:52:43'
    ],
    [
        'id' => 305,
        'nombre' => 'Relación entre altura máxima y alcance horizontal máximo',
        'formula' => '$$\\frac{Y_{max}}{X_{max}}=\\frac{tan\\theta}{4}$$',
        'detalle' => 'Relación matemática entre altura máxima y alcance en movimiento parabólico.',
        'indice' => 0,
        'tema_id' => 57,
        'created_at' => '2023-04-25 16:56:26',
        'updated_at' => '2023-04-25 16:56:26'
    ],
    [
        'id' => 306,
        'nombre' => 'Componentes y resultante de la velocidad en cualquier instante',
        'formula' => '$$V_x=V_0·cos\\theta\\\\V_y=V_0·sin\\theta-g·t\\\\V_R=\\sqrt{V_x^2+V_y^2}$$',
        'detalle' => 'Componentes vectoriales de velocidad en movimiento parabólico.',
        'indice' => 0,
        'tema_id' => 57,
        'created_at' => '2023-04-25 17:09:02',
        'updated_at' => '2023-06-01 16:10:21'
    ],
    [
        'id' => 307,
        'nombre' => 'Posición de la partícula en cualquier instante de la trayectoria',
        'formula' => '$$X=V_0cos\\theta·t\\\\Y=V_0sin\\theta·t-\\frac{1}{2}·g·t^2$$',
        'detalle' => 'Ecuaciones de posición en movimiento parabólico.',
        'indice' => 0,
        'tema_id' => 57,
        'created_at' => '2023-04-25 17:15:22',
        'updated_at' => '2023-06-01 16:11:20'
    ],
    [
        'id' => 308,
        'nombre' => 'Distancia recorrida al cabo de un tiempo \'\'t\'\'',
        'formula' => '$$d=V_0·t\\pm\\frac{1}{2}·a·t^2$$',
        'detalle' => 'Fórmula general para distancia en movimiento rectilíneo.',
        'indice' => 0,
        'tema_id' => 5,
        'created_at' => '2023-04-25 17:25:27',
        'updated_at' => '2023-08-25 00:29:05'
    ],
    [
        'id' => 309,
        'nombre' => 'Velocidad en cierto instante',
        'formula' => '$$V_f= V_0\\pm a·t$$',
        'detalle' => 'Fórmula para velocidad en movimiento acelerado.',
        'indice' => 0,
        'tema_id' => 5,
        'created_at' => '2023-04-25 17:29:34',
        'updated_at' => '2023-08-25 00:29:36'
    ],
    [
        'id' => 642,
        'nombre' => 'Monto',
        'formula' => '$$M=C_o+I\\\\M=C_o(1+i\\cdot n)$$',
        'detalle' => 'Cálculo del monto total con interés simple.',
        'indice' => 0,
        'tema_id' => 100,
        'created_at' => '2023-09-06 19:56:17',
        'updated_at' => '2023-09-07 22:24:44'
    ],
    [
        'id' => 640,
        'nombre' => 'Tasa de interes',
        'formula' => '$$I=\\frac{I}{C_o\\cdot n}$$',
        'detalle' => 'Fórmula para calcular la tasa de interés.',
        'indice' => 0,
        'tema_id' => 100,
        'created_at' => '2023-09-06 19:46:02',
        'updated_at' => '2023-09-06 19:46:02'
    ],
    [
        'id' => 641,
        'nombre' => 'Monto Final',
        'formula' => '$$C_n=C_o+I\\\\C_n=C_o(1+n\\cdot i)$$',
        'detalle' => 'Cálculo del capital final con interés simple.',
        'indice' => 0,
        'tema_id' => 100,
        'created_at' => '2023-09-06 19:50:13',
        'updated_at' => '2023-09-06 19:50:13'
    ],
    [
        'id' => 310,
        'nombre' => 'Velocidad',
        'formula' => '$$V=\\frac{d}{t}$$',
        'detalle' => 'Fórmula básica de velocidad.',
        'indice' => 0,
        'tema_id' => 4,
        'created_at' => '2023-04-25 17:55:37',
        'updated_at' => '2023-04-25 17:55:37'
    ],
    [
        'id' => 311,
        'nombre' => 'Distancia',
        'formula' => '$$d=V·t$$',
        'detalle' => 'Fórmula básica de distancia.',
        'indice' => 0,
        'tema_id' => 4,
        'created_at' => '2023-04-25 17:56:28',
        'updated_at' => '2023-04-25 17:56:28'
    ],
    [
        'id' => 312,
        'nombre' => 'Tiempo',
        'formula' => '$$t=\\frac{d}{V}$$',
        'detalle' => 'Fórmula básica de tiempo.',
        'indice' => 0,
        'tema_id' => 4,
        'created_at' => '2023-04-25 17:57:36',
        'updated_at' => '2023-04-25 17:57:36'
    ],
    [
        'id' => 313,
        'nombre' => 'Velocidad media',
        'formula' => '$$V_m=\\frac{d_1+d_2+d_3+...+d_n}{t_1+t_2+t_3+...t_n}$$',
        'detalle' => 'Cálculo de velocidad media con múltiples tramos.',
        'indice' => 0,
        'tema_id' => 4,
        'created_at' => '2023-04-25 18:09:22',
        'updated_at' => '2023-04-25 18:13:43'
    ],
    [
        'id' => 314,
        'nombre' => 'Velocidad Promedio',
        'formula' => '$$\\overline{V}=\\frac{V_1+V_2+V_3+...+V_n}{n}$$',
        'detalle' => 'Cálculo de velocidad promedio.',
        'indice' => 0,
        'tema_id' => 4,
        'created_at' => '2023-04-25 18:16:55',
        'updated_at' => '2023-04-25 18:16:55'
    ],
    [
        'id' => 315,
        'nombre' => 'Altura',
        'formula' => '$$h=V_0·t\\pm\\frac{1}{2}·g·t^2$$',
        'detalle' => 'Fórmula para calcular altura en caída libre.',
        'indice' => 0,
        'tema_id' => 56,
        'created_at' => '2023-04-25 18:41:20',
        'updated_at' => '2023-08-25 00:38:12'
    ],
    [
        'id' => 513,
        'nombre' => 'Velocidad instantánea en función de la altura',
        'formula' => '$$V_f^2= V_0^2\\pm 2·g·h$$',
        'detalle' => 'Relación entre velocidad y altura en caída libre.',
        'indice' => 0,
        'tema_id' => 56,
        'created_at' => '2023-06-01 16:07:40',
        'updated_at' => '2023-06-01 16:07:40'
    ],
    [
        'id' => 316,
        'nombre' => 'Velocidad en cualquier instante',
        'formula' => '$$V_f=V_0\\pm g·t$$',
        'detalle' => 'Fórmula para velocidad en caída libre.',
        'indice' => 0,
        'tema_id' => 56,
        'created_at' => '2023-04-25 18:50:12',
        'updated_at' => '2023-08-25 00:38:50'
    ],
    [
        'id' => 638,
        'nombre' => 'Capital',
        'formula' => '$$C_o=\\frac{I}{n\\cdot i}$$',
        'detalle' => 'Cálculo del capital inicial en interés simple.',
        'indice' => 0,
        'tema_id' => 100,
        'created_at' => '2023-09-06 19:43:48',
        'updated_at' => '2023-09-06 19:44:20'
    ],
    [
        'id' => 317,
        'nombre' => 'Altura máxima y tiempo en que lo alcanza',
        'formula' => '$$h_{max}=\\frac{V_0^2}{2·g}\\\\t_{h_{max}}=\\frac{V_0}{g}$$',
        'detalle' => 'Cálculo de altura máxima y tiempo en caída libre.',
        'indice' => 0,
        'tema_id' => 56,
        'created_at' => '2023-04-25 18:57:15',
        'updated_at' => '2023-04-25 18:57:15'
    ],
    [
        'id' => 318,
        'nombre' => 'Divisibilidad del 2',
        'formula' => '$$Todo\\:número\\:par\\\\Que\\:termina\\:en\\:0,\\:2,\\:4,\\:6\\:u\\:8,\\:es\\:divisible\\:entre\\:2.$$',
        'detalle' => 'Criterio de divisibilidad por 2: números pares.',
        'indice' => 0,
        'tema_id' => 48,
        'created_at' => '2023-04-26 15:42:52',
        'updated_at' => '2023-04-26 15:50:23'
    ],
    [
        'id' => 319,
        'nombre' => 'Divisibilidad del 3',
        'formula' => '$$Si\\:la\\:suma\\:de\\:sus\\:dígitos\\:es\\:igual\\:a\\:3\\:o\\:a\\:un\\:múltiplo\\:de\\:3.$$',
        'detalle' => 'Criterio de divisibilidad por 3: suma de dígitos múltiplo de 3.',
        'indice' => 0,
        'tema_id' => 48,
        'created_at' => '2023-04-26 15:46:59',
        'updated_at' => '2023-04-26 15:46:59'
    ],
    [
        'id' => 320,
        'nombre' => 'Divisibilidad del 4',
        'formula' => '$$Si\\:sus\\:últimos\\:dos\\:dígitos\\:son\\:0\\:o\\:un\\:múltiplo\\:de\\:4$$',
        'detalle' => 'Criterio de divisibilidad por 4: últimos dos dígitos múltiplo de 4.',
        'indice' => 0,
        'tema_id' => 48,
        'created_at' => '2023-04-26 15:52:57',
        'updated_at' => '2023-04-26 15:52:57'
    ],
    [
        'id' => 321,
        'nombre' => 'CALOR',
        'formula' => '$$Q\\:=m\\cdot C_V\\cdot \\left(T_2-T_1\\right)$$',
        'detalle' => 'Fórmula para calcular transferencia de calor.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-04-26 15:53:57',
        'updated_at' => '2023-04-26 16:01:49'
    ],
    [
        'id' => 322,
        'nombre' => 'Divisibilidad del 5',
        'formula' => '$$Si\\:su\\:último\\:dígito\\:es\\:un\\:5\\:o\\:un\\:0$$',
        'detalle' => 'Criterio de divisibilidad por 5: termina en 0 o 5.',
        'indice' => 0,
        'tema_id' => 48,
        'created_at' => '2023-04-26 15:58:42',
        'updated_at' => '2023-04-26 16:00:20'
    ],
    [
        'id' => 323,
        'nombre' => 'constante',
        'formula' => '$$\\gamma \\:=\\frac{C_V}{C_P}\\:$$',
        'detalle' => 'Relación entre capacidades caloríficas.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-04-26 16:01:10',
        'updated_at' => '2023-04-26 16:18:59'
    ],
    [
        'id' => 324,
        'nombre' => 'Velocidad angular',
        'formula' => '$$w=\\frac{\\theta}{t};\\:\\:\\:\\:\\:\\:w=\\frac{2\\pi}{T}\\\\w=2\\pi·f\\:;\\:w=\\frac{V}{r}$$',
        'detalle' => 'Diferentes expresiones para velocidad angular.',
        'indice' => 0,
        'tema_id' => 58,
        'created_at' => '2023-04-26 16:03:06',
        'updated_at' => '2023-06-01 16:16:47'
    ],
    [
        'id' => 325,
        'nombre' => 'Divisibilidad del 6',
        'formula' => '$$Un\\:número\\:debe\\:cumplir\\:con\\:los\\:criterios\\:de\\:divisibilidad\\:del\\:2\\:y\\:del\\:3\\:para\\:ser\\:divisible\\:entre\\:6$$',
        'detalle' => 'Criterio de divisibilidad por 6: debe ser divisible por 2 y 3.',
        'indice' => 0,
        'tema_id' => 48,
        'created_at' => '2023-04-26 16:09:04',
        'updated_at' => '2023-04-26 16:09:04'
    ],

    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 326,
        'nombre' => 'Velocidad tangencial o lineal',
        'formula' => '$$V=r·w\\:;\\:\\:\\:V=\\frac{r·\\theta}{t}\\\\V=\\frac{2\\pi ·r}{T}\\:;\\:V=2\\pi·r·f$$',
        'detalle' => 'Diferentes expresiones para velocidad tangencial.',
        'indice' => 0,
        'tema_id' => 58,
        'created_at' => '2023-04-26 16:10:43',
        'updated_at' => '2023-06-01 16:20:29'
    ],
    [
        'id' => 327,
        'nombre' => 'CONSTANTE GENERAL DE GASES',
        'formula' => '$$R\\:=C_P-C_V$$',
        'detalle' => 'Relación entre capacidades caloríficas para gases.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-04-26 16:21:50',
        'updated_at' => '2023-04-26 16:21:50'
    ],
    [
        'id' => 328,
        'nombre' => 'Aceleración centrípeta',
        'formula' => '$$a_c=w^2·r\\\\a_c=\\frac{V^2}{r}\\\\a_c=V·w\\\\$$',
        'detalle' => 'Expresiones para calcular aceleración centrípeta.',
        'indice' => 0,
        'tema_id' => 58,
        'created_at' => '2023-04-26 16:25:25',
        'updated_at' => '2023-06-01 16:24:31'
    ],
    [
        'id' => 329,
        'nombre' => 'Período y Frecuencia',
        'formula' => '$$f=\\frac{1}{T}\\:\\\\T=\\frac{1}{f}$$',
        'detalle' => 'Relación entre período y frecuencia.',
        'indice' => 0,
        'tema_id' => 58,
        'created_at' => '2023-04-26 16:30:28',
        'updated_at' => '2023-06-01 16:25:24'
    ],
    [
        'id' => 330,
        'nombre' => 'Divisibilidad del 7',
        'formula' => '$$Se\\:debe\\:multiplicar\\:el\\:último\\:dígito\\:por\\:2\\:y\\:restarlo\\:al\\:número\\:que\\:conforman\\:los\\:demás\\:dígitos.\\\\Esto,\\:hasta\\:que\\:queda\\:un\\:número\\:de\\:solo\\:un\\:dígito.\\\\Si\\:este\\:es\\:un\\:0\\:o\\:un\\:7,\\:el\\:número\\:es\\:divisible\\:entre\\:7.$$',
        'detalle' => 'Criterio de divisibilidad por 7: método de duplicar y restar.',
        'indice' => 0,
        'tema_id' => 48,
        'created_at' => '2023-04-26 16:38:12',
        'updated_at' => '2023-05-02 16:02:14'
    ],
    [
        'id' => 331,
        'nombre' => 'Distancia Angular',
        'formula' => '$$\\theta=w_0·t\\pm\\frac{1}{2}·\\alpha·t^2$$',
        'detalle' => 'Fórmula para distancia angular en movimiento circular.',
        'indice' => 0,
        'tema_id' => 59,
        'created_at' => '2023-04-26 19:42:07',
        'updated_at' => '2023-08-25 00:41:18'
    ],
    [
        'id' => 637,
        'nombre' => 'Interés simple',
        'formula' => '$$I=C_o\\cdot i\\cdot n$$',
        'detalle' => 'Fórmula básica para cálculo de interés simple.',
        'indice' => 0,
        'tema_id' => 100,
        'created_at' => '2023-09-06 19:39:21',
        'updated_at' => '2023-09-07 22:22:51'
    ],
    [
        'id' => 332,
        'nombre' => 'Velocidad angular final o instantánea',
        'formula' => '$$w_f=w_o\\pm \\alpha·t$$',
        'detalle' => 'Fórmula para velocidad angular en movimiento circular.',
        'indice' => 0,
        'tema_id' => 59,
        'created_at' => '2023-04-27 16:11:08',
        'updated_at' => '2023-08-25 00:42:17'
    ],
    [
        'id' => 636,
        'nombre' => 'Velocidad final en función de la distancia angular',
        'formula' => '$$w_f=w_o\\pm \\alpha·t$$',
        'detalle' => 'Relación entre velocidad angular y distancia.',
        'indice' => 0,
        'tema_id' => 59,
        'created_at' => '2023-08-25 00:48:32',
        'updated_at' => '2023-08-25 00:48:32'
    ],
    [
        'id' => 333,
        'nombre' => 'Aceleración tangencial y aceleración normal',
        'formula' => '$$a_t=\\alpha·r\\:\\:;\\:\\:a_N=\\sqrt{a_c^2+a_t^2}\\\\a_c \\:\\:en\\:un\\:instante\\:\'\'t\'\' del\\:movimiento$$',
        'detalle' => 'Componentes de aceleración en movimiento circular.',
        'indice' => 0,
        'tema_id' => 59,
        'created_at' => '2023-04-27 16:17:23',
        'updated_at' => '2023-04-27 18:03:43'
    ],
    [
        'id' => 334,
        'nombre' => 'Dilatación Lineal',
        'formula' => '$$L_f=L_o·(1+\\alpha·\\Delta T)\\\\\\Delta T=T_f-T_o\\\\\\Delta L=L_f-L_o\\\\\\Delta L=L_o·\\alpha ·\\Delta T$$',
        'detalle' => 'Fórmulas para dilatación lineal de materiales.',
        'indice' => 0,
        'tema_id' => 52,
        'created_at' => '2023-04-27 18:46:02',
        'updated_at' => '2023-06-14 18:09:15'
    ],
    [
        'id' => 337,
        'nombre' => 'Formula fundamental',
        'formula' => '$$\\frac{ºC}{5}=\\frac{ºF-32º}{9}=\\frac{ºK-273º}{5}$$',
        'detalle' => 'Relación fundamental entre escalas termométricas.',
        'indice' => 0,
        'tema_id' => 51,
        'created_at' => '2023-04-28 17:14:06',
        'updated_at' => '2023-04-28 17:14:06'
    ],
    [
        'id' => 335,
        'nombre' => 'Dilatación Superficial',
        'formula' => '$$S_f=S_o·(1+\\beta·\\Delta T)\\\\\\beta=2·\\alpha\\\\\\Delta S=S_f-S_o\\:;\\\\\\Delta S=S_o·\\beta·\\Delta T$$',
        'detalle' => 'Fórmulas para dilatación superficial de materiales.',
        'indice' => 0,
        'tema_id' => 52,
        'created_at' => '2023-04-27 19:26:27',
        'updated_at' => '2023-06-14 18:10:36'
    ],
    [
        'id' => 336,
        'nombre' => 'Dilatación Cúbica',
        'formula' => '$$V_f=V_o·(1+\\gamma·\\Delta T)\\\\\\gamma=3·\\alpha\\\\\\Delta V=V_f-V_o\\\\\\Delta V=V_o·\\gamma·\\Delta T$$',
        'detalle' => 'Fórmulas para dilatación volumétrica de materiales.',
        'indice' => 0,
        'tema_id' => 52,
        'created_at' => '2023-04-27 19:48:44',
        'updated_at' => '2023-06-14 18:11:44'
    ],
    [
        'id' => 338,
        'nombre' => 'Conversión de ºF a ºC',
        'formula' => '$$ºC=\\frac{5}{9}(ºF-32)$$',
        'detalle' => 'Fórmula para convertir Fahrenheit a Celsius.',
        'indice' => 0,
        'tema_id' => 51,
        'created_at' => '2023-04-28 17:18:32',
        'updated_at' => '2023-05-26 15:59:42'
    ],
    [
        'id' => 339,
        'nombre' => 'Conversión de ºK a ºC',
        'formula' => '$$ºC=ºK-273º$$',
        'detalle' => 'Fórmula para convertir Kelvin a Celsius.',
        'indice' => 0,
        'tema_id' => 51,
        'created_at' => '2023-04-28 17:19:49',
        'updated_at' => '2023-04-28 18:43:05'
    ],
    [
        'id' => 340,
        'nombre' => 'Conversión de ºC a ºF',
        'formula' => '$$ºF=\\frac{9}{5}ºC+32º$$',
        'detalle' => 'Fórmula para convertir Celsius a Fahrenheit.',
        'indice' => 0,
        'tema_id' => 51,
        'created_at' => '2023-04-28 18:46:39',
        'updated_at' => '2023-04-28 18:50:14'
    ],
    [
        'id' => 341,
        'nombre' => 'Conversión de ºK a ºF',
        'formula' => '$$ºF=\\frac{9}{5}(ºK-273)+32º$$',
        'detalle' => 'Fórmula para convertir Kelvin a Fahrenheit.',
        'indice' => 0,
        'tema_id' => 51,
        'created_at' => '2023-04-28 18:49:47',
        'updated_at' => '2023-05-26 16:00:09'
    ],
    [
        'id' => 342,
        'nombre' => 'Conversión de ºC a ºK',
        'formula' => '$$ºK=ºC+273º$$',
        'detalle' => 'Fórmula para convertir Celsius a Kelvin.',
        'indice' => 0,
        'tema_id' => 51,
        'created_at' => '2023-04-28 18:52:33',
        'updated_at' => '2023-04-28 18:52:33'
    ],
    [
        'id' => 343,
        'nombre' => 'Conversión de ºF a ºK',
        'formula' => '$$ºK=\\frac{5}{9}(ºF-32)+273º$$',
        'detalle' => 'Fórmula para convertir Fahrenheit a Kelvin.',
        'indice' => 0,
        'tema_id' => 51,
        'created_at' => '2023-04-28 18:57:10',
        'updated_at' => '2023-05-26 16:00:43'
    ],
    [
        'id' => 344,
        'nombre' => 'Magnitudes Fundamentales',
        'formula' => '$$Longitud:[l]=L\\\\Tiempo:\\:[t]=T\\\\Masa:\\:[m]=M\\\\Intensidad\\:de\\:corriente:[I]=I\\\\Intensidad\\:luminosa:[Il]=J\\\\Cantidad\\:de\\:sustancia:[n]=N$$',
        'detalle' => 'Definición de magnitudes fundamentales en física.',
        'indice' => 0,
        'tema_id' => 90,
        'created_at' => '2023-04-28 19:44:41',
        'updated_at' => '2023-05-02 16:14:01'
    ],
    [
        'id' => 345,
        'nombre' => 'Magnitudes Derivadas',
        'formula' => '$$Velocidad:\\:[v]=LT^{-1}\\\\Aceleración:[a]=LT^{-2}\\\\Fuerza\\:y\\:peso:[F]=MLT^{-2}\\\\Trabajo\\:y\\:energía:[W;E]=ML^2T^{-2}\\\\Potencia:[P]=ML^2T^{-1}\\\\Area:[A]=L^2\\\\Volumen:[V]=L^3\\\\Densidad:[\\delta]=ML^{-3} \\\\Presión:[P]=ML^{-1}T^{-2}$$',
        'detalle' => 'Definición de magnitudes derivadas en física.',
        'indice' => 0,
        'tema_id' => 90,
        'created_at' => '2023-04-28 19:58:56',
        'updated_at' => '2023-04-29 02:20:07'
    ],
    [
        'id' => 346,
        'nombre' => 'Divisibilidad del 8',
        'formula' => '$$Los\\:últimos\\:tres\\:dígitos\\:deben\\:ser\\:múltiplos\\:de\\:ocho\\:o\\:iguales\\:a\\:0$$',
        'detalle' => 'Criterio de divisibilidad por 8: últimos tres dígitos múltiplo de 8.',
        'indice' => 0,
        'tema_id' => 48,
        'created_at' => '2023-05-02 16:09:39',
        'updated_at' => '2023-05-02 16:09:39'
    ],
    [
        'id' => 347,
        'nombre' => 'Divisibilidad del 9',
        'formula' => '$$La\\:suma\\:de\\:los\\:dígitos\\:debe\\:ser\\:un\\:múltiplo\\:de\\:9$$',
        'detalle' => 'Criterio de divisibilidad por 9: suma de dígitos múltiplo de 9.',
        'indice' => 0,
        'tema_id' => 48,
        'created_at' => '2023-05-02 16:12:32',
        'updated_at' => '2023-05-02 16:12:32'
    ],
    [
        'id' => 348,
        'nombre' => 'Divisibilidad del 10',
        'formula' => '$$Para\\:que\\:un\\:número\\:sea\\:divisible\\:entre\\:diez\\:solo\\:debe\\:terminar\\:en\\:0$$',
        'detalle' => 'Criterio de divisibilidad por 10: número termina en 0.',
        'indice' => 0,
        'tema_id' => 48,
        'created_at' => '2023-05-02 16:14:53',
        'updated_at' => '2023-05-02 16:14:53'
    ],
    [
        'id' => 349,
        'nombre' => 'Divisibilidad del 11',
        'formula' => '$$Un\\:número\\:es\\:divisible\\:entre\\:11\\:cuando\\:la\\:suma\\:de\\:los\\:números\\:que\\:ocupan\\:la\\:posición\\:par\\:menos\\:la\\:suma\\:de\\:los\\:números\\:que\\:ocupan\\:la\\:posición\\:impar\\:es\\:igual\\:a\\:0\\:o\\:a\\:un\\:número\\:múltiplo\\:de\\:11.$$',
        'detalle' => 'Criterio de divisibilidad por 11: diferencia entre suma de posiciones.',
        'indice' => 0,
        'tema_id' => 48,
        'created_at' => '2023-05-02 16:24:09',
        'updated_at' => '2023-05-02 16:24:09'
    ],
    [
        'id' => 350,
        'nombre' => 'Divisibilidad del 12',
        'formula' => '$$Un\\:número\\:es\\:divisible\\:por\\:12\\:si\\:es\\:divisible\\:por\\:3\\:y\\:por\\:4\\:al\\:mismo\\:tiempo.$$',
        'detalle' => 'Criterio de divisibilidad por 12: debe ser divisible por 3 y 4.',
        'indice' => 0,
        'tema_id' => 48,
        'created_at' => '2023-05-02 16:28:03',
        'updated_at' => '2023-05-02 16:28:03'
    ],

    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 351,
        'nombre' => 'Divisibilidad del 13',
        'formula' => '$$Un\\:número\\:es\\:divisible\\:entre\\:13\\:hay\\:que\\:restar\\:el\\:número\\:sin\\:la\\:cifra\\:de\\:las\\:unidades\\:y\\:9\\:veces\\:la\\:cifra\\:de\\:las\\:unidades.\\:Si\\:esa\\:resta\\:tiene\\:como\\:resultado\\:0\\:múltiplo\\:de\\:13\\:entonces\\:el\\:número\\:es\\:divisible\\:entre\\:13.$$',
        'detalle' => 'Criterio de divisibilidad por 13: método de multiplicar y restar.',
        'indice' => 0,
        'tema_id' => 48,
        'created_at' => '2023-05-02 16:32:08',
        'updated_at' => '2023-05-02 16:32:08'
    ],
    [
        'id' => 352,
        'nombre' => 'Trabajo realizado por una fuerza',
        'formula' => '$$W= F·d\\:\\:;Si\\:Festá\\:en\\:direción\\\\del\\:desplazamiento\\\\W=F·cos\\theta·d;\\:Si\\:F\\:forma\\:un\\:ángulo\\:\\theta\\\\respecto\\:del\\:desplazamiento$$',
        'detalle' => 'Fórmulas para calcular trabajo mecánico.',
        'indice' => 0,
        'tema_id' => 85,
        'created_at' => '2023-05-02 16:37:44',
        'updated_at' => '2023-05-02 16:49:32'
    ],
    [
        'id' => 353,
        'nombre' => 'Energía mecánica',
        'formula' => '$$E_m=E_c+E_p\\\\E_c=\\frac{1}{2}·m·V^2;\\:\\:\\:E_p=m·g.h$$',
        'detalle' => 'Definición de energía mecánica y sus componentes.',
        'indice' => 0,
        'tema_id' => 85,
        'created_at' => '2023-05-02 16:55:56',
        'updated_at' => '2023-05-02 16:55:56'
    ],
    [
        'id' => 354,
        'nombre' => 'Energía Cinética',
        'formula' => '$$E_c=\\frac{1}2·m·V^2$$',
        'detalle' => 'Fórmula para calcular energía cinética.',
        'indice' => 0,
        'tema_id' => 83,
        'created_at' => '2023-05-02 17:31:35',
        'updated_at' => '2023-08-04 16:16:20'
    ],
    [
        'id' => 355,
        'nombre' => 'Energía potencial',
        'formula' => '$$E_p= m·g·h$$',
        'detalle' => 'Fórmula para calcular energía potencial gravitatoria.',
        'indice' => 0,
        'tema_id' => 83,
        'created_at' => '2023-05-02 17:31:41',
        'updated_at' => '2023-08-04 16:18:07'
    ],
    [
        'id' => 356,
        'nombre' => 'Conservación de la energía (si no hay rozamiento)',
        'formula' => '$$E_{m_o}=E_{m_f}\\\\E_{c_o}+E_{p_o}=E_{c_f}+E_{p_f}\\\\\\frac{1}{2}mV_o^2+mgh_o=\\frac{1}2mV_f^2+mgh_f$$',
        'detalle' => 'Principio de conservación de la energía mecánica.',
        'indice' => 0,
        'tema_id' => 83,
        'created_at' => '2023-05-02 17:32:21',
        'updated_at' => '2023-08-04 16:28:59'
    ],
    [
        'id' => 357,
        'nombre' => 'Ley de Coulomb',
        'formula' => '$$F=K\\cdot \\frac {q_1\\cdot q_2}{r^2}\\\\q_1,q_2=Cargas\\:electricas\\\\r=Distancia\\\\K=Constante$$',
        'detalle' => 'Ley que describe la fuerza entre cargas eléctricas.',
        'indice' => 0,
        'tema_id' => 62,
        'created_at' => '2023-05-03 19:28:45',
        'updated_at' => '2023-05-04 18:50:27'
    ],
    [
        'id' => 358,
        'nombre' => 'Potencia en función del trabajo y el tiempo',
        'formula' => '$$P=\\frac{W}{t}$$',
        'detalle' => 'Definición básica de potencia mecánica.',
        'indice' => 0,
        'tema_id' => 85,
        'created_at' => '2023-05-04 15:53:53',
        'updated_at' => '2023-05-04 15:53:53'
    ],
    [
        'id' => 359,
        'nombre' => 'Potencia en función de la fuerza y la velocidad',
        'formula' => '$$P=F·V$$',
        'detalle' => 'Relación entre potencia, fuerza y velocidad.',
        'indice' => 0,
        'tema_id' => 85,
        'created_at' => '2023-05-04 15:55:51',
        'updated_at' => '2023-05-04 15:55:51'
    ],
    [
        'id' => 360,
        'nombre' => 'Equilibrio térmico',
        'formula' => '$$Q_1+Q_2+...+Q_n= 0$$',
        'detalle' => 'Condición para equilibrio térmico en sistemas.',
        'indice' => 0,
        'tema_id' => 74,
        'created_at' => '2023-05-04 16:02:20',
        'updated_at' => '2023-05-04 16:02:20'
    ],
    [
        'id' => 361,
        'nombre' => 'RELACION PRESION DE VAPOR',
        'formula' => '$$P_A=X_A\\cdot P_O$$',
        'detalle' => 'Relación para calcular presión de vapor.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-05-04 16:07:43',
        'updated_at' => '2023-05-04 16:07:43'
    ],
    [
        'id' => 362,
        'nombre' => 'Temperatura de equilibrio de un sistema de dos sustancias',
        'formula' => '$$m_1Ce_1(T-T_1)+m_2Ce_2(T-T_2)=0\\\\T=\\frac{m_1Ce_1T_1+m_2Ce_2T_2}{m_1Ce_1+m_2Ce_2}$$',
        'detalle' => 'Fórmula para calcular temperatura de equilibrio.',
        'indice' => 0,
        'tema_id' => 74,
        'created_at' => '2023-05-04 16:14:45',
        'updated_at' => '2023-05-04 16:14:45'
    ],
    [
        'id' => 363,
        'nombre' => 'TEMPERATURA DE EBULLICION',
        'formula' => '$$T_b=K_b*\\overline m  :\\\\ K_b=1.86\\:\\left[\\frac{K_{gr}\\cdot ºC}{mol}\\right]$$',
        'detalle' => 'Fórmula para calcular temperatura de ebullición.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-05-04 16:19:11',
        'updated_at' => '2023-05-05 22:45:16'
    ],
    [
        'id' => 364,
        'nombre' => 'TEMPERATURA DE CONGELAMIENTO',
        'formula' => '$$T_c=K_c\\cdot\\overline m\\:\\:\\:\\:;\\:K_c=0.52\\:\\left[\\frac{K_{gr}\\cdot ºC}{mol}\\right]$$',
        'detalle' => 'Fórmula para calcular temperatura de congelamiento.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-05-04 16:23:50',
        'updated_at' => '2023-05-05 22:46:35'
    ],
    [
        'id' => 365,
        'nombre' => 'En serie',
        'formula' => '$$\\frac{1}{Ce}=\\frac{1}{C_1}+\\frac{1}{C_2}+...+\\frac{1}{C_n}\\\\q_T=q_1=q_2=.....=q_n\\\\\\Delta V=V_1+V_2+....+V_n$$',
        'detalle' => 'Configuración de capacitores en serie.',
        'indice' => 0,
        'tema_id' => 67,
        'created_at' => '2023-05-04 16:39:14',
        'updated_at' => '2023-05-04 16:39:14'
    ],
    [
        'id' => 366,
        'nombre' => 'En paralelo',
        'formula' => '$$C_e=C_1+C_2+...+C_n\\\\q_T=q_1+q_2+...+q_n\\\\\\Delta V=V_1=V_2=...=V_n$$',
        'detalle' => 'Configuración de capacitores en paralelo.',
        'indice' => 0,
        'tema_id' => 67,
        'created_at' => '2023-05-04 16:44:21',
        'updated_at' => '2023-05-04 16:44:21'
    ],
    [
        'id' => 367,
        'nombre' => 'Campo eléctrico generado por una carga \'\'Q\'\' a una distancia \'\'d\'\'',
        'formula' => '$$E=\\frac{K·Q}{d^2}$$',
        'detalle' => 'Fórmula para calcular campo eléctrico.',
        'indice' => 0,
        'tema_id' => 63,
        'created_at' => '2023-05-04 16:52:04',
        'updated_at' => '2023-05-04 16:52:04'
    ],
    [
        'id' => 368,
        'nombre' => 'Campo eléctrico en función de la fuerza y la carga \'\'q\'\' que interactúa con la carga \'\'Q\'\'',
        'formula' => '$$E=\\frac{F}{q}$$',
        'detalle' => 'Definición de campo eléctrico como fuerza por unidad de carga.',
        'indice' => 0,
        'tema_id' => 63,
        'created_at' => '2023-05-04 16:55:21',
        'updated_at' => '2023-05-04 16:55:21'
    ],
    [
        'id' => 369,
        'nombre' => 'Potencial eléctrico en función de la energía potencial eléctrica',
        'formula' => '$$V=\\frac{U}{q_o}$$',
        'detalle' => 'Definición de potencial eléctrico.',
        'indice' => 0,
        'tema_id' => 64,
        'created_at' => '2023-05-04 17:13:07',
        'updated_at' => '2023-05-04 17:13:07'
    ],
    [
        'id' => 370,
        'nombre' => 'Potencial como función del campo',
        'formula' => '$$V=E·d\\:;\\:\\:\\:V=\\frac{K·q}{d}$$',
        'detalle' => 'Relaciones para calcular potencial eléctrico.',
        'indice' => 0,
        'tema_id' => 64,
        'created_at' => '2023-05-04 17:15:50',
        'updated_at' => '2023-05-04 17:15:50'
    ],
    [
        'id' => 371,
        'nombre' => 'Fuerza eléctrica total',
        'formula' => '$$F_{total}=F_1+F_2+F_3+...\\\\=K\\cdot \\frac {Q_1\\cdot q}{r^2}u_1+K\\cdot \\frac {Q_2\\cdot q}{r^2}u_2+.....$$',
        'detalle' => 'Principio de superposición para fuerzas eléctricas.',
        'indice' => 0,
        'tema_id' => 62,
        'created_at' => '2023-05-04 18:56:36',
        'updated_at' => '2023-05-04 18:56:36'
    ],
    [
        'id' => 372,
        'nombre' => 'Fuerza eléctrica por campo electrico',
        'formula' => '$$F_q=q\\cdot\\vec{E}$$',
        'detalle' => 'Fuerza eléctrica en términos de campo eléctrico.',
        'indice' => 0,
        'tema_id' => 62,
        'created_at' => '2023-05-04 18:59:19',
        'updated_at' => '2023-05-04 18:59:19'
    ],
    [
        'id' => 373,
        'nombre' => 'Resistencias en serie',
        'formula' => '$$R_e=R_1+R_2+...+R_n\\\\I_T=I_1=I_2=...=I_n\\\\V_T=V_1+V_2+...+V_n$$',
        'detalle' => 'Configuración de resistencias en serie.',
        'indice' => 0,
        'tema_id' => 68,
        'created_at' => '2023-05-04 19:18:34',
        'updated_at' => '2023-05-04 19:18:34'
    ],
    [
        'id' => 374,
        'nombre' => 'Resistencias en paralelo',
        'formula' => '$$\\frac{1}{R_e}=\\frac{1}{R_1}+\\frac{1}{R_2}+...+\\frac{1}{R_n}\\\\V_T=V_1=V_2=...=V_n\\\\I_T=I_1+I_2+...+I_n$$',
        'detalle' => 'Configuración de resistencias en paralelo.',
        'indice' => 0,
        'tema_id' => 68,
        'created_at' => '2023-05-04 19:23:34',
        'updated_at' => '2023-05-04 19:23:34'
    ],
    [
        'id' => 375,
        'nombre' => 'Ecuación de la recta : abscisa y ordenada',
        'formula' => '$$y=mx\\:+b$$',
        'detalle' => 'Forma pendiente-ordenada al origen de la ecuación de una recta.',
        'indice' => 0,
        'tema_id' => 7,
        'created_at' => '2023-05-05 00:26:00',
        'updated_at' => '2023-05-05 00:26:00'
    ],
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 376,
        'nombre' => 'Ec.',
        'formula' => '$$y=m\\sqrt{2}$$',
        'detalle' => 'Ecuación con raíz cuadrada.',
        'indice' => 0,
        'tema_id' => 7,
        'created_at' => '2023-05-05 00:33:34',
        'updated_at' => '2023-07-22 23:10:03'
    ],
    [
        'id' => 377,
        'nombre' => 'Ec.',
        'formula' => '$$y$$',
        'detalle' => 'Variable dependiente.',
        'indice' => 0,
        'tema_id' => 7,
        'created_at' => '2023-05-05 00:53:23',
        'updated_at' => '2023-07-22 23:10:44'
    ],
    [
        'id' => 564,
        'nombre' => 'Oxidos Metalicos',
        'formula' => '$$M^+O^{-2}\\\\Metal+O_2\\leftrightarrows M^+ O^{-2}$$',
        'detalle' => 'Compuestos binarios formados por metal y oxígeno.',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-01 22:17:01',
        'updated_at' => '2023-08-02 19:38:31'
    ],
    [
        'id' => 544,
        'nombre' => 'Velocidad Final',
        'formula' => '$$Vf=Vo+a\\cdot t$$',
        'detalle' => 'Fórmula para velocidad final en movimiento uniformemente acelerado.',
        'indice' => 0,
        'tema_id' => 55,
        'created_at' => '2023-06-22 23:29:20',
        'updated_at' => '2023-06-22 23:29:57'
    ],
    [
        'id' => 545,
        'nombre' => 'Distancia',
        'formula' => '$$d=Vo\\cdot t+\\frac{1}{2}a\\cdot t^2$$',
        'detalle' => 'Fórmula para distancia recorrida en movimiento uniformemente acelerado.',
        'indice' => 0,
        'tema_id' => 55,
        'created_at' => '2023-06-22 23:33:38',
        'updated_at' => '2023-06-22 23:33:38'
    ],
    [
        'id' => 378,
        'nombre' => 'ELECTROQUIMICA (CARGA)',
        'formula' => '$$Q\\:=I\\cdot t\\left(coul\\right)$$',
        'detalle' => 'Cálculo de carga eléctrica en electroquímica.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-05-05 23:09:37',
        'updated_at' => '2023-05-05 23:09:37'
    ],
    [
        'id' => 379,
        'nombre' => 'MASA DEL METAL',
        'formula' => '$$m\\:=\\frac{I\\cdot t\\cdot M}{n\\cdot F}\\:\\:\\:F=96500\\frac{A\\cdot S}{mol}  n= valencia$$',
        'detalle' => 'Cálculo de masa en procesos electroquímicos.',
        'indice' => 0,
        'tema_id' => 92,
        'created_at' => '2023-05-09 16:38:59',
        'updated_at' => '2023-05-09 16:41:18'
    ],
    [
        'id' => 380,
        'nombre' => 'Cantidad de Calor',
        'formula' => '$$Q=m·C_e·\\Delta T\\\\\\Delta T=T_f-T_o$$',
        'detalle' => 'Fórmula para calcular transferencia de calor.',
        'indice' => 0,
        'tema_id' => 53,
        'created_at' => '2023-05-10 16:13:27',
        'updated_at' => '2023-05-10 16:13:27'
    ],
    [
        'id' => 381,
        'nombre' => 'Capacidad Calorífica',
        'formula' => '$$C_c=\\frac{\\Delta Q}{\\Delta T}$$',
        'detalle' => 'Relación entre calor transferido y cambio de temperatura.',
        'indice' => 0,
        'tema_id' => 53,
        'created_at' => '2023-05-10 16:18:41',
        'updated_at' => '2023-05-10 16:18:41'
    ],
    [
        'id' => 382,
        'nombre' => 'Integral de dx',
        'formula' => '$$\\int dx\\:=x+c$$',
        'detalle' => 'Integral básica de diferencial dx.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-10 22:44:21',
        'updated_at' => '2023-05-10 22:44:21'
    ],
    [
        'id' => 383,
        'nombre' => 'Integral de una Constante por una Función',
        'formula' => '$$\\int Kf\\left(x\\right)dx=K\\int f\\left(x\\right)dx$$',
        'detalle' => 'Propiedad de linealidad de la integral.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-10 23:05:13',
        'updated_at' => '2023-05-10 23:05:13'
    ],
    [
        'id' => 384,
        'nombre' => 'Integral de una Función Elevado a un Exponente',
        'formula' => '$$\\int x^ndx=\\frac{x^{n+1}}{n+1}+c$$',
        'detalle' => 'Fórmula para integrar potencias de x.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-11 00:00:51',
        'updated_at' => '2023-05-11 00:00:51'
    ],
    [
        'id' => 385,
        'nombre' => 'Integrales de la Suma de dos Funciones',
        'formula' => '$$\\int \\left(u+v\\right)dx=\\int \\:udx+\\int \\:vdx$$',
        'detalle' => 'Propiedad aditiva de las integrales.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-11 00:42:56',
        'updated_at' => '2023-05-11 00:42:56'
    ],
    [
        'id' => 386,
        'nombre' => 'Calor Latente : Calor de Fusión y Calor de Vaporización',
        'formula' => '$$Q_f=L_f·m\\\\Q_v=L_v·m$$',
        'detalle' => 'Fórmulas para calor en cambios de fase.',
        'indice' => 0,
        'tema_id' => 53,
        'created_at' => '2023-05-11 19:32:51',
        'updated_at' => '2023-08-25 00:31:36'
    ],
    [
        'id' => 639,
        'nombre' => 'Tiempo',
        'formula' => '$$n=\\frac{I}{C_o\\cdot i}$$',
        'detalle' => 'Cálculo del tiempo en interés simple.',
        'indice' => 0,
        'tema_id' => 100,
        'created_at' => '2023-09-06 19:45:02',
        'updated_at' => '2023-09-06 19:45:13'
    ],
    [
        'id' => 387,
        'nombre' => 'Representación de un número en Notación Científica',
        'formula' => '$$N·10^n\\\\N\\in \\R\\:\\land 1\\leqslant N<10\\\\n\\in \\Z \\:\\land n \\neq 0$$',
        'detalle' => 'Formato estándar de notación científica.',
        'indice' => 0,
        'tema_id' => 50,
        'created_at' => '2023-05-11 19:58:14',
        'updated_at' => '2023-05-12 16:11:37'
    ],
    [
        'id' => 388,
        'nombre' => 'Límite fundamental trigonométrico 1',
        'formula' => '$$\\lim _{x\\to \\:0}\\left(\\frac{\\sin \\left(x\\right)}{x}\\right)=1$$',
        'detalle' => 'Primer límite trigonométrico fundamental.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-11 23:45:03',
        'updated_at' => '2023-05-11 23:54:20'
    ],
    [
        'id' => 389,
        'nombre' => 'Límite fundamental trigonométrico 2',
        'formula' => '$$\\lim _{x\\to \\:0}\\left(\\frac{1-cos\\left(x\\right)}{x}\\right)=0$$',
        'detalle' => 'Segundo límite trigonométrico fundamental.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-11 23:48:30',
        'updated_at' => '2023-05-11 23:54:47'
    ],
    [
        'id' => 390,
        'nombre' => 'Límite fundamental trigonométrico 3',
        'formula' => '$$\\lim _{x\\to \\:0}\\left(\\frac{tan\\left(x\\right)}{x}\\right)=1$$',
        'detalle' => 'Tercer límite trigonométrico fundamental.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-11 23:53:51',
        'updated_at' => '2023-05-11 23:53:51'
    ],
    [
        'id' => 391,
        'nombre' => 'Límite fundamental trigonométrico 4',
        'formula' => '$$\\lim _{x\\to \\:0}\\left(\\frac{arsen\\left(x\\right)}{x}\\right)=1$$',
        'detalle' => 'Cuarto límite trigonométrico fundamental.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-12 00:03:08',
        'updated_at' => '2023-05-15 22:21:20'
    ],
    [
        'id' => 392,
        'nombre' => 'Límite fundamental trigonométrico 5',
        'formula' => '$$\\lim _{x\\to \\:0}\\left(\\frac{arctan\\left(x\\right)}{x}\\right)=1$$',
        'detalle' => 'Quinto límite trigonométrico fundamental.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-12 00:04:53',
        'updated_at' => '2023-05-12 00:05:37'
    ],
    [
        'id' => 393,
        'nombre' => 'Límite fundamental exponencial 1',
        'formula' => '$$\\lim _{x\\to \\:0}\\left(\\frac{e^x-1}{x}\\right)=1$$',
        'detalle' => 'Primer límite exponencial fundamental.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-12 00:25:41',
        'updated_at' => '2023-05-12 00:25:41'
    ],
    [
        'id' => 394,
        'nombre' => 'Suma y resta de números en N.C.',
        'formula' => '$$N_1·10^n+N_2·10^n+...+N_m·10^n=\\\\(N_1+N_2+...+N_m)·10^n$$',
        'detalle' => 'Operaciones con números en notación científica.',
        'indice' => 0,
        'tema_id' => 50,
        'created_at' => '2023-05-12 01:41:43',
        'updated_at' => '2023-05-12 01:41:43'
    ],
    [
        'id' => 395,
        'nombre' => 'Multiplicación de números en N.C.',
        'formula' => '$$(N_1·10^{n_1})·(N_2·10^{n_2})·...·(N_m·10^{n_m})=\\\\(N_1·N_2·...·N_m)·10^{n_1+n_2+...+n_m}$$',
        'detalle' => 'Multiplicación de números en notación científica.',
        'indice' => 0,
        'tema_id' => 50,
        'created_at' => '2023-05-12 01:48:27',
        'updated_at' => '2023-05-12 01:48:27'
    ],
    [
        'id' => 396,
        'nombre' => 'División de dos números en N.C.',
        'formula' => '$$\\frac{N_1·10^{n_1}}{N_2·10^{n_2}}=(N_1/N_2)·10^{n_1-n_2}$$',
        'detalle' => 'División de números en notación científica.',
        'indice' => 0,
        'tema_id' => 50,
        'created_at' => '2023-05-12 01:54:17',
        'updated_at' => '2023-05-12 01:54:17'
    ],
    [
        'id' => 397,
        'nombre' => 'Raíz de un número en N.C.',
        'formula' => '$$\\sqrt[m]{N·10^{n}}=\\sqrt[m]{N}·10^{\\frac{n}{m}}\\:\\:\\leftrightarrow n=múltiplo\\:de\\: m$$',
        'detalle' => 'Cálculo de raíces en notación científica.',
        'indice' => 0,
        'tema_id' => 50,
        'created_at' => '2023-05-12 02:07:00',
        'updated_at' => '2023-05-12 02:07:00'
    ],
    [
        'id' => 398,
        'nombre' => 'Caudal en función del volumen y el tiempo',
        'formula' => '$$Q=\\frac{v}t\\\\Q=A·V$$',
        'detalle' => 'Fórmulas para calcular caudal.',
        'indice' => 0,
        'tema_id' => 81,
        'created_at' => '2023-05-12 02:16:41',
        'updated_at' => '2023-05-12 02:16:41'
    ],
    [
        'id' => 399,
        'nombre' => 'Ecuación de la continuidad',
        'formula' => '$$Q_1=Q_2\\\\A_1·V_1=A_2·V_2$$',
        'detalle' => 'Principio de conservación del caudal.',
        'indice' => 0,
        'tema_id' => 81,
        'created_at' => '2023-05-12 02:19:00',
        'updated_at' => '2023-05-12 02:19:00'
    ],
    [
        'id' => 400,
        'nombre' => 'Cuadrado de lado \'\'a\'\'',
        'formula' => '$$A=a^2\\\\X_g=\\frac{a}2;\\:\\:Y_g=\\frac{a}2\\\\Ix=\\frac{a^4}3;\\:\\:Iy=\\frac{a^4}3\\\\Ix_g=\\frac{a^4}{12};\\:\\:Iy_g=\\frac{a^4}{12}$$',
        'detalle' => 'Propiedades geométricas de un cuadrado.',
        'indice' => 0,
        'tema_id' => 77,
        'created_at' => '2023-05-12 18:59:08',
        'updated_at' => '2023-06-14 17:52:10'
    ],
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 401,
        'nombre' => 'Rectángulo de base \'\'b\'\' y altura \'\'h\'\'',
        'formula' => '$$A=bh\\\\X_g=\\frac{b}{2};\\:\\:Y_g=\\frac{h}{2}\\\\Ix=\\frac{bh^3}{3};\\:\\:Iy=\\frac{b^3h}{3\\:}\\\\Ix_g=\\frac{bh^3}{12};\\:\\:Iy_g=\\frac{b^3h}{12}$$',
        'detalle' => 'Propiedades geométricas de un rectángulo.',
        'indice' => 0,
        'tema_id' => 77,
        'created_at' => '2023-05-12 19:11:05',
        'updated_at' => '2023-06-14 17:54:19'
    ],
    [
        'id' => 402,
        'nombre' => 'Triángulo rectángulo de base \'\'b\'\' y altura \'\'h\'\'',
        'formula' => '$$A=\\frac{bh}{2}\\\\X_g=\\frac{b}{3};\\:\\:Y_g=\\frac{h}{3}\\\\Ix=\\frac{bh^3}{12};\\:\\:Iy=\\frac{b^3h}{12}\\\\Ix_g=\\frac{bh^3}{36};\\:\\:Iy_g=\\frac{b^3h}{36}$$',
        'detalle' => 'Propiedades geométricas de un triángulo rectángulo.',
        'indice' => 0,
        'tema_id' => 77,
        'created_at' => '2023-05-12 19:18:14',
        'updated_at' => '2023-06-14 17:56:20'
    ],
    [
        'id' => 403,
        'nombre' => 'Triángulo equilátero de lado \'\'a\'\'',
        'formula' => '$$A=\\frac{a^2\\sqrt{3}}{4}\\\\X_g=\\frac{a}{2};\\:\\:Y_g=\\frac{a\\sqrt{3}}{6}\\\\Ix=\\frac{a^4\\sqrt{3}}{32};\\:\\:Iy=\\frac{7a^4\\sqrt{3}}{96\\:}\\\\Ix_g=\\frac{a^4\\sqrt{3}}{96};\\:\\:Iy_g=\\frac{a^4\\sqrt{3}}{72}$$',
        'detalle' => 'Propiedades geométricas de un triángulo equilátero.',
        'indice' => 0,
        'tema_id' => 77,
        'created_at' => '2023-05-12 19:47:14',
        'updated_at' => '2023-06-14 17:58:21'
    ],
    [
        'id' => 404,
        'nombre' => 'Integral de un numero elevado a una función',
        'formula' => '$$\\int \\:a^udu=\\:\\frac{a^u}{ln\\:\\left(a\\right)}+c$$',
        'detalle' => 'Fórmula para integrar una constante elevada a una función.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-12 22:56:55',
        'updated_at' => '2023-05-12 22:56:55'
    ],
    [
        'id' => 405,
        'nombre' => 'Límite fundamental exponencial 2',
        'formula' => '$$\\lim _{x\\to \\:0}\\left(\\frac{e^{kx}-1}{x}\\right)=k$$',
        'detalle' => 'Segundo límite exponencial fundamental con constante k.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-13 00:02:28',
        'updated_at' => '2023-05-13 00:02:28'
    ],
    [
        'id' => 406,
        'nombre' => 'Límite fundamental exponencial 3',
        'formula' => '$$\\lim _{x\\to \\:0}\\left(\\frac{a^{x}-1}{x}\\right)=lna$$',
        'detalle' => 'Tercer límite exponencial fundamental con base a.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-13 00:04:18',
        'updated_at' => '2023-05-13 22:23:48'
    ],
    [
        'id' => 407,
        'nombre' => 'Límite fundamental exponencial 4',
        'formula' => '$$\\lim _{x\\to \\:0}\\left(\\frac{a^{kx}-1}{x}\\right)=klna$$',
        'detalle' => 'Cuarto límite exponencial fundamental con constante k.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-13 00:12:51',
        'updated_at' => '2023-05-13 22:23:15'
    ],
    [
        'id' => 408,
        'nombre' => 'Triángulo isósceles de lados iguales \'\'a\'\' y base \'\'b\'\'',
        'formula' => '$$h=\\frac{1}{2}\\sqrt{4a^2-b^2};\\:\\:A=\\frac{bh}{2}\\\\X_g=\\frac{b}{2};\\:\\:Y_g=\\frac{h}{3}\\\\\\:Ix=\\frac{bh^3}{12};\\:\\:Iy=\\frac{7b^3h}{48}\\\\Ix_g=\\frac{bh^3}{36};\\:\\:Iy_{g=}\\frac{b^3h}{48}$$',
        'detalle' => 'Propiedades geométricas de un triángulo isósceles.',
        'indice' => 0,
        'tema_id' => 77,
        'created_at' => '2023-05-13 01:27:37',
        'updated_at' => '2023-06-14 18:01:18'
    ],
    [
        'id' => 409,
        'nombre' => 'Integral de e elevado a una función',
        'formula' => '$$\\int \\:e^xdx=e^x+C$$',
        'detalle' => 'Fórmula básica para integrar la función exponencial.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-13 01:29:38',
        'updated_at' => '2023-05-13 01:29:38'
    ],
    [
        'id' => 410,
        'nombre' => 'Circunferencia de radio \'\'r\'\'',
        'formula' => '$$A=\\pi r^2\\\\X_g=0;\\:\\:\\:\\:Y_g=0\\\\\\:Ix=\\frac{\\pi }{4}r^4;\\:\\:\\:\\:Iy=\\frac{\\pi }{4}r^4\\\\Ix_g=\\frac{\\pi }{4}r^4;\\:\\:\\:\\:Iy_{g=}\\frac{\\pi }{4}r^4$$',
        'detalle' => 'Propiedades geométricas de una circunferencia.',
        'indice' => 0,
        'tema_id' => 77,
        'created_at' => '2023-05-13 01:35:39',
        'updated_at' => '2023-06-14 18:02:49'
    ],
    [
        'id' => 411,
        'nombre' => 'Semicircunferencia',
        'formula' => '$$A=\\frac{1}{2}\\pi r^2\\\\X_g=0;\\:\\:\\:\\:Y_g=\\frac{4r}{3\\pi }\\\\Ix=\\frac{\\pi }{8}r^4;\\:\\:\\:\\:Iy=\\frac{\\pi }{8}r^4\\\\Ix_g=\\frac{r^4}{72\\pi }\\left(9\\pi ^2-64\\right);\\:\\:\\:\\:Iy_{g=}\\frac{\\pi }{8}r^4$$',
        'detalle' => 'Propiedades geométricas de una semicircunferencia.',
        'indice' => 0,
        'tema_id' => 77,
        'created_at' => '2023-05-13 01:47:52',
        'updated_at' => '2023-06-14 18:04:04'
    ],
    [
        'id' => 412,
        'nombre' => 'Cuarto de circunferencia',
        'formula' => '$$A=\\frac{1}{4}\\pi r^2\\\\X_g=\\frac{4r}{3\\pi };\\:\\:\\:\\:Y_g=\\frac{4r}{3\\pi }\\\\Ix=\\frac{\\pi }{16}r^4;\\:\\:\\:\\:Iy=\\frac{r^4}{16}\\left(\\pi +2\\right)\\\\Ix_g=\\frac{r^4}{144\\pi }\\left(9\\pi ^2-64\\right)\\\\Iy_{g=}\\frac{r^4}{144\\pi }\\left(9\\pi ^2+18\\pi -64\\right)$$',
        'detalle' => 'Propiedades geométricas de un cuarto de circunferencia.',
        'indice' => 0,
        'tema_id' => 77,
        'created_at' => '2023-05-13 01:57:51',
        'updated_at' => '2023-06-14 18:05:25'
    ],
    [
        'id' => 413,
        'nombre' => 'Conversión de un número muy pequeño a N.C. (Ejemplos)',
        'formula' => '$$0,0000000234=2,34·10^{-8}\\\\0,0000456·10^{-n}=4,56·10^{-n-5}\\\\0,000978·10^n=9,78·10^{n-4}$$',
        'detalle' => 'Ejemplos de conversión a notación científica para números pequeños.',
        'indice' => 0,
        'tema_id' => 50,
        'created_at' => '2023-05-13 16:17:11',
        'updated_at' => '2023-05-13 16:17:11'
    ],
    [
        'id' => 414,
        'nombre' => 'Conversión de un número muy grande a N.C.',
        'formula' => '$$234000000000=2,34·10^{11}\\\\56700000·10^n=5,67·10^{n+7}\\\\85400000·10^{-n}=8,54·10^{-n+7}$$',
        'detalle' => 'Ejemplos de conversión a notación científica para números grandes.',
        'indice' => 0,
        'tema_id' => 50,
        'created_at' => '2023-05-13 16:25:08',
        'updated_at' => '2023-05-13 16:25:08'
    ],
    [
        'id' => 415,
        'nombre' => 'Límite fundamental exponencial 5',
        'formula' => '$$\\lim _{x\\to +\\infty }\\left(\\frac{a}{b}\\right)^x=0\\\\si\\:\\left(\\frac{a}{b}\\right)<\\:1$$',
        'detalle' => 'Quinto límite exponencial fundamental para fracciones menores que 1.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-13 22:29:52',
        'updated_at' => '2023-05-13 22:30:59'
    ],
    [
        'id' => 416,
        'nombre' => 'Límite fundamental exponencial 6',
        'formula' => '$$\\lim _{x\\to \\:-\\infty }\\left(\\frac{a}{b}\\right)^x\\:=+\\infty \\\\si\\:\\left(\\frac{a}{b}\\right)<\\:1$$',
        'detalle' => 'Sexto límite exponencial fundamental para fracciones menores que 1.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-13 22:40:45',
        'updated_at' => '2023-05-13 22:40:45'
    ],
    [
        'id' => 417,
        'nombre' => 'Límite fundamental exponencial 7',
        'formula' => '$$\\lim _{x\\to \\:+\\infty }\\frac{e^x}{\\ln \\left(x\\right)}\\:=+\\infty \\:$$',
        'detalle' => 'Séptimo límite exponencial fundamental comparando crecimiento.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-13 22:47:34',
        'updated_at' => '2023-05-13 22:47:34'
    ],
    [
        'id' => 418,
        'nombre' => 'Distancia entre dos cargas electricas',
        'formula' => '$$r=\\sqrt{K\\cdot \\frac {q_1\\cdot q_2}{F}}\\\\q_1,q_2=Cargas\\:electricas\\\\F=Fuerza\\\\K=Constante$$',
        'detalle' => 'Fórmula para calcular distancia entre cargas según la ley de Coulomb.',
        'indice' => 0,
        'tema_id' => 62,
        'created_at' => '2023-05-15 16:01:57',
        'updated_at' => '2023-05-15 16:02:28'
    ],
    [
        'id' => 419,
        'nombre' => 'Carga electrica',
        'formula' => '$$q_1=\\frac {F\\cdot r^2}{K\\cdot q_2}\\\\q_1,q_2=Cargas\\:electricas\\\\r=Distancia\\\\F=Fuerza\\\\K=Constante$$',
        'detalle' => 'Fórmula para calcular una carga según la ley de Coulomb.',
        'indice' => 0,
        'tema_id' => 62,
        'created_at' => '2023-05-15 16:05:55',
        'updated_at' => '2023-05-15 16:05:55'
    ],
    [
        'id' => 420,
        'nombre' => 'Límite fundamental exponencial 7',
        'formula' => '$$\\lim _{x\\to \\infty }\\left(1+\\frac{1}{\\:x}\\right)^x=e$$',
        'detalle' => 'Séptimo límite exponencial fundamental que define el número e.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-15 22:24:00',
        'updated_at' => '2023-05-15 22:24:00'
    ],
    [
        'id' => 421,
        'nombre' => 'Límite fundamental exponencial 8',
        'formula' => '$$\\lim _{x\\to \\infty }\\left(1-\\frac{1}{\\:x}\\right)^x=\\frac{1}{e}$$',
        'detalle' => 'Octavo límite exponencial fundamental relacionado con 1/e.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-15 22:27:18',
        'updated_at' => '2023-05-15 22:27:18'
    ],
    [
        'id' => 422,
        'nombre' => 'Integral del Seno de una Función',
        'formula' => '$$\\int \\:\\sin \\left(u\\right)du=-\\:\\cos \\left(u\\right)+c$$',
        'detalle' => 'Fórmula para integrar la función seno.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-15 22:28:34',
        'updated_at' => '2023-05-15 22:28:34'
    ],
    [
        'id' => 423,
        'nombre' => 'Integral del coseno de una Función',
        'formula' => '$$\\int \\:\\cos \\left(u\\right)du=\\:\\sin \\left(u\\right)+c$$',
        'detalle' => 'Fórmula para integrar la función coseno.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-15 22:31:15',
        'updated_at' => '2023-05-15 22:31:15'
    ],
    [
        'id' => 424,
        'nombre' => 'Límite fundamental exponencial 8',
        'formula' => '$$\\lim _{x\\to \\infty }\\left(1+x\\right)^{\\frac{1}{x}}=e$$',
        'detalle' => 'Octavo límite exponencial fundamental alternativo.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-15 22:38:53',
        'updated_at' => '2023-05-15 22:38:53'
    ],
    [
        'id' => 425,
        'nombre' => 'Integral del tangente de una Función',
        'formula' => '$$\\int \\:\\tan \\left(u\\right)du=\\:\\ln \\left(\\sec \\left(u\\right)\\right)+c$$',
        'detalle' => 'Fórmula para integrar la función tangente.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-15 22:39:30',
        'updated_at' => '2023-05-15 22:39:30'
    ],
    
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 426,
        'nombre' => 'Límite fundamental logarítmico 1',
        'formula' => '$$\\lim _{x\\to 0}\\ln \\left(\\frac{1+x}{x}\\right)=1$$',
        'detalle' => 'Primer límite logarítmico fundamental.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-15 22:42:08',
        'updated_at' => '2023-05-15 22:42:08'
    ],
    [
        'id' => 427,
        'nombre' => 'Límite fundamental logarítmico 2',
        'formula' => '$$\\lim _{x\\to 0}\\frac{\\log _a\\left(1+x\\right)}{x}=\\frac{1}{\\ln \\left(a\\right)}$$',
        'detalle' => 'Segundo límite logarítmico fundamental con base a.',
        'indice' => 0,
        'tema_id' => 23,
        'created_at' => '2023-05-15 22:52:03',
        'updated_at' => '2023-05-15 22:52:03'
    ],
    [
        'id' => 428,
        'nombre' => 'Integrales de Secante de una Función',
        'formula' => '$$\\int \\sec \\left(u\\right)du=\\ln \\left(\\sec \\left(u\\right)+\\tan \\left(u\\right)\\right)$$',
        'detalle' => 'Fórmula para integrar la función secante.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-16 00:16:27',
        'updated_at' => '2023-05-16 00:16:27'
    ],
    [
        'id' => 429,
        'nombre' => 'Integral del Cosecante de una Función',
        'formula' => '$$\\int \\csc \\left(u\\right)du=\\:\\ln \\left(\\csc \\left(u\\right)-\\cot \\left(u\\right)\\right)+c$$',
        'detalle' => 'Fórmula para integrar la función cosecante.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-16 01:08:30',
        'updated_at' => '2023-05-16 01:08:30'
    ],
    [
        'id' => 430,
        'nombre' => 'Involutiva',
        'formula' => '$$(A´)´=A$$',
        'detalle' => 'Propiedad de conjuntos: el complemento del complemento es el conjunto original.',
        'indice' => 0,
        'tema_id' => 15,
        'created_at' => '2023-05-16 16:03:42',
        'updated_at' => '2023-05-16 16:03:42'
    ],
    [
        'id' => 431,
        'nombre' => 'Idempotencia',
        'formula' => '$$A \\cup A=A$$',
        'detalle' => 'Propiedad de conjuntos: la unión o intersección de un conjunto consigo mismo es el mismo conjunto.',
        'indice' => 0,
        'tema_id' => 15,
        'created_at' => '2023-05-16 16:07:00',
        'updated_at' => '2023-05-16 16:07:00'
    ],
    [
        'id' => 432,
        'nombre' => 'Conmutativa',
        'formula' => '$$A \\cup B=B\\cup A\\\\A \\cap B=B\\cap A$$',
        'detalle' => 'Propiedad de conjuntos: el orden en las operaciones de unión e intersección no altera el resultado.',
        'indice' => 0,
        'tema_id' => 15,
        'created_at' => '2023-05-16 16:10:52',
        'updated_at' => '2023-05-16 16:10:52'
    ],
    [
        'id' => 433,
        'nombre' => 'Ecuación de Bernoulli 1',
        'formula' => '$$P_1+\\frac{1}{2}\\rho V_1^2+\\rho gh_1=P_2+\\frac{1}{2}\\rho V_2^2+\\rho gh_2$$',
        'detalle' => 'Primera forma de la ecuación de Bernoulli para fluidos.',
        'indice' => 0,
        'tema_id' => 82,
        'created_at' => '2023-05-16 16:13:55',
        'updated_at' => '2023-05-16 16:13:55'
    ],
    [
        'id' => 434,
        'nombre' => 'Ecuación de Bernoulli 2',
        'formula' => '$$\\frac{P_1}{\\rho}+\\frac{V_1^2}{2}+gh_1=\\frac{P_2}{\\rho}+\\frac{V_2^2}{2}+gh_2$$',
        'detalle' => 'Segunda forma de la ecuación de Bernoulli para fluidos.',
        'indice' => 0,
        'tema_id' => 82,
        'created_at' => '2023-05-16 16:21:11',
        'updated_at' => '2023-05-16 16:21:11'
    ],
    [
        'id' => 435,
        'nombre' => 'Ecuación de Bernoulli 3',
        'formula' => '$$\\frac{P_1}{\\gamma}+\\frac{V_1^2}{2g}+h_1=\\frac{P_2}{\\gamma}+\\frac{V_2^2}{2g}+h_2$$',
        'detalle' => 'Tercera forma de la ecuación de Bernoulli para fluidos.',
        'indice' => 0,
        'tema_id' => 82,
        'created_at' => '2023-05-16 16:25:35',
        'updated_at' => '2023-05-16 16:25:35'
    ],
    [
        'id' => 436,
        'nombre' => 'Asociativa',
        'formula' => '$$(A\\cup B)\\cup C=A\\cup (B\\cup C)$$',
        'detalle' => 'Propiedad de conjuntos: el agrupamiento en operaciones de unión no altera el resultado.',
        'indice' => 0,
        'tema_id' => 15,
        'created_at' => '2023-05-16 16:41:54',
        'updated_at' => '2023-05-16 17:23:24'
    ],
    [
        'id' => 437,
        'nombre' => 'Distributiva',
        'formula' => '$$A\\cup (B\\cap C)=(A\\cup B)\\cap (A\\cup C)\\\\A\\cap (B\\cup C)=(A\\cap B)\\cup (A\\cap C)$$',
        'detalle' => 'Propiedad de conjuntos: distribución entre operaciones de unión e intersección.',
        'indice' => 0,
        'tema_id' => 15,
        'created_at' => '2023-05-16 18:34:48',
        'updated_at' => '2023-05-16 18:34:48'
    ],
    [
        'id' => 438,
        'nombre' => 'De Morgan',
        'formula' => '$$(A\\cup B)´=A´ \\cap B´\\\\(A\\cap B)´=A´ \\cup B´$$',
        'detalle' => 'Leyes de De Morgan para conjuntos: complemento de uniones e intersecciones.',
        'indice' => 0,
        'tema_id' => 15,
        'created_at' => '2023-05-16 18:38:57',
        'updated_at' => '2023-05-16 18:38:57'
    ],
    [
        'id' => 439,
        'nombre' => 'De la Diferencia',
        'formula' => '$$A-B=A\\cap B´$$',
        'detalle' => 'Propiedad de conjuntos: diferencia como intersección con el complemento.',
        'indice' => 0,
        'tema_id' => 15,
        'created_at' => '2023-05-16 18:44:04',
        'updated_at' => '2023-05-16 18:44:04'
    ],
    [
        'id' => 440,
        'nombre' => 'Del complemento',
        'formula' => '$$A\\cup U=U \\:\\:A\\cap U=A\\\\A\\cup\\varnothing=A\\:\\:A\\cap\\varnothing=\\varnothing$$',
        'detalle' => 'Propiedades de conjuntos con el conjunto universal y el conjunto vacío.',
        'indice' => 0,
        'tema_id' => 15,
        'created_at' => '2023-05-16 18:49:53',
        'updated_at' => '2023-05-17 15:57:12'
    ],
    [
        'id' => 441,
        'nombre' => 'De la Unidad',
        'formula' => '$$A\\cup \\cup=\\cup\\\\A\\cap A´=\\varnothing$$',
        'detalle' => 'Propiedades de conjuntos con el conjunto universal y complementos.',
        'indice' => 0,
        'tema_id' => 15,
        'created_at' => '2023-05-16 18:53:22',
        'updated_at' => '2023-05-17 00:49:09'
    ],
    [
        'id' => 442,
        'nombre' => 'Integral del Secante cuadrado de una Función',
        'formula' => '$$\\int \\:\\sec ^2\\left(u\\right)du=\\tan \\left(u\\right)+c$$',
        'detalle' => 'Fórmula para integrar la función secante al cuadrado.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-16 23:01:50',
        'updated_at' => '2023-05-16 23:01:50'
    ],
    [
        'id' => 443,
        'nombre' => 'Integral de Cosecante cuadrado de una Función',
        'formula' => '$$\\int \\:\\csc ^2\\left(u\\right)du=-\\cot \\left(u\\right)+c$$',
        'detalle' => 'Fórmula para integrar la función cosecante al cuadrado.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-16 23:46:23',
        'updated_at' => '2023-05-16 23:46:23'
    ],
    [
        'id' => 444,
        'nombre' => 'Integral del Cotangente de una Función',
        'formula' => '$$\\int \\:\\cot \\left(u\\right)du\\:=\\ln \\left(\\sin \\left(u\\right)\\right)+c$$',
        'detalle' => 'Fórmula para integrar la función cotangente.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-17 00:30:47',
        'updated_at' => '2023-05-17 00:30:47'
    ],
    [
        'id' => 445,
        'nombre' => 'Integral de una secante por tangente de una Función',
        'formula' => '$$\\int \\:\\sec \\left(u\\right)\\cdot \\tan \\left(u\\right)du=\\sec \\left(u\\right)+c$$',
        'detalle' => 'Fórmula para integrar el producto de secante por tangente.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-17 00:36:52',
        'updated_at' => '2023-05-17 00:36:52'
    ],
    [
        'id' => 446,
        'nombre' => 'Integral de Cosecante por Cotangente de una Función',
        'formula' => '$$\\int \\:\\csc \\left(u\\right)\\cdot \\cot \\left(u\\right)du=-\\csc \\left(u\\right)+c$$',
        'detalle' => 'Fórmula para integrar el producto de cosecante por cotangente.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-17 00:44:24',
        'updated_at' => '2023-05-17 00:44:24'
    ],
    [
        'id' => 447,
        'nombre' => 'Integral del Seno cuadrado de una Función',
        'formula' => '$$\\int \\:\\sin ^2\\left(u\\right)du=\\frac{u}{2}-\\frac{\\sin \\left(2u\\right)}{4}+c$$',
        'detalle' => 'Fórmula para integrar la función seno al cuadrado.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-17 00:55:28',
        'updated_at' => '2023-05-17 00:55:28'
    ],
    [
        'id' => 448,
        'nombre' => 'Absorción',
        'formula' => '$$A\\cup (A\\cap B)=A\\\\A\\cap (A\\cup B)=A\\\\A\\cup(A´\\cap B)=A\\cup B\\\\A\\cap(A´\\cup B)=A\\cap B$$',
        'detalle' => 'Leyes de absorción para conjuntos: simplificación de expresiones con unión e intersección.',
        'indice' => 0,
        'tema_id' => 15,
        'created_at' => '2023-05-17 16:01:02',
        'updated_at' => '2023-05-17 16:01:02'
    ],
    [
        'id' => 449,
        'nombre' => 'Absorción',
        'formula' => '$$A\\cup (A\\cap B)=A\\\\A\\cap (A\\cup B)=A\\\\A\\cup(A´\\cap B)=A\\cup B\\\\A\\cap(A´\\cup B)=A\\cap B$$',
        'detalle' => 'Leyes de absorción para conjuntos (versión duplicada).',
        'indice' => 0,
        'tema_id' => 15,
        'created_at' => '2023-05-17 16:01:45',
        'updated_at' => '2023-05-17 16:01:45'
    ],
    [
        'id' => 450,
        'nombre' => 'Reflexiva',
        'formula' => '$$\\bigtriangledown\\:a\\in A,\\:a\\:R\\:a$$',
        'detalle' => 'Propiedad reflexiva de relaciones: todo elemento está relacionado consigo mismo.',
        'indice' => 0,
        'tema_id' => 17,
        'created_at' => '2023-05-17 19:19:46',
        'updated_at' => '2023-05-17 19:19:46'
    ],
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 451,
        'nombre' => 'Tabla de verdad de la Conjunción (y)',
        'formula' => '$$p\\:\\:\\:\\land\\:\\:\\:q\\\\V\\:\\:\\:V\\:\\:\\:V\\\\V\\:\\:\\:F\\:\\:\\:F\\\\F\\:\\:\\:F\\:\\:\\:V\\\\F\\:\\:\\:F\\:\\:\\:F$$',
        'detalle' => 'Tabla de verdad para el operador lógico AND (conjunción).',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-17 19:23:02',
        'updated_at' => '2023-05-17 19:54:02'
    ],
    [
        'id' => 452,
        'nombre' => 'Tabla de verdad de la Disyunción (o)',
        'formula' => '$$p\\:\\:\\:\\lor\\:\\:\\:q\\\\V\\:\\:\\:V\\:\\:\\:V\\\\V\\:\\:\\:V\\:\\:\\:F\\\\F\\:\\:\\:V\\:\\:\\:V\\\\F\\:\\:\\:F\\:\\:\\:F$$',
        'detalle' => 'Tabla de verdad para el operador lógico OR (disyunción).',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-17 19:27:27',
        'updated_at' => '2023-05-17 19:27:27'
    ],
    [
        'id' => 453,
        'nombre' => 'Tabla de verdad de la Implicación (entonces)',
        'formula' => '$$p\\:\\:\\:\\rightarrow \\:\\:\\:q\\\\V\\:\\:\\:V\\:\\:\\:V\\\\V\\:\\:\\:F\\:\\:\\:F\\\\F\\:\\:\\:V\\:\\:\\:V\\\\F\\:\\:\\:V\\:\\:\\:F$$',
        'detalle' => 'Tabla de verdad para el operador lógico de implicación.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-17 19:33:31',
        'updated_at' => '2023-05-17 19:33:31'
    ],
    [
        'id' => 454,
        'nombre' => 'Tabla de verdad de la Doble Implicación (sí y solo sí)',
        'formula' => '$$p\\:\\:\\:\\leftrightarrow\\:\\:\\:q\\\\V\\:\\:\\:V\\:\\:\\:V\\\\V\\:\\:\\:F\\:\\:\\:F\\\\F\\:\\:\\:F\\:\\:\\:V\\\\F\\:\\:\\:V\\:\\:\\:F$$',
        'detalle' => 'Tabla de verdad para el operador lógico de doble implicación.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-17 19:38:03',
        'updated_at' => '2023-05-17 19:38:03'
    ],
    [
        'id' => 455,
        'nombre' => 'Tabla de verdad de la Disyunción Exclusiva',
        'formula' => '$$p\\:\\:\\:\\veebar\\:\\:\\:q\\\\V\\:\\:\\:F\\:\\:\\:V\\\\V\\:\\:\\:V\\:\\:\\:F\\\\F\\:\\:\\:V\\:\\:\\:V\\\\F\\:\\:\\:F\\:\\:\\:F$$',
        'detalle' => 'Tabla de verdad para el operador lógico XOR (disyunción exclusiva).',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-17 19:44:22',
        'updated_at' => '2023-05-17 19:54:36'
    ],
    [
        'id' => 456,
        'nombre' => 'Antirreflexiva-Irreflexiva',
        'formula' => '$$\\forall a\\in A,\\:a\\not{R}\\:a$$',
        'detalle' => 'Propiedad de relaciones: ningún elemento está relacionado consigo mismo.',
        'indice' => 0,
        'tema_id' => 17,
        'created_at' => '2023-05-17 19:48:07',
        'updated_at' => '2023-05-17 19:57:30'
    ],
    [
        'id' => 457,
        'nombre' => 'Ley de la Asociatividad',
        'formula' => '$$p\\lor(q\\lor r)\\Longleftrightarrow(p\\lor q)\\lor r\\\\p\\land(q\\land r)\\Longleftrightarrow(p\\land q)\\land r$$',
        'detalle' => 'Leyes asociativas para operadores lógicos AND y OR.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-18 15:54:57',
        'updated_at' => '2023-05-18 15:54:57'
    ],
    [
        'id' => 458,
        'nombre' => 'Ley de la Conmutatividad',
        'formula' => '$$p\\lor q\\Longleftrightarrow q\\lor p\\\\p\\land q\\Longleftrightarrow q\\land p$$',
        'detalle' => 'Leyes conmutativas para operadores lógicos AND y OR.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-18 16:01:51',
        'updated_at' => '2023-05-18 16:01:51'
    ],
    [
        'id' => 459,
        'nombre' => 'Ley de la Distributividad',
        'formula' => '$$p\\lor (q\\land r)\\Longleftrightarrow (p\\lor q)\\land(p\\lor r)\\\\p\\land(q\\lor r)\\Longleftrightarrow(p\\land q)\\lor(p\\land r)$$',
        'detalle' => 'Leyes distributivas entre operadores lógicos AND y OR.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-18 16:08:06',
        'updated_at' => '2023-05-18 16:08:06'
    ],
    [
        'id' => 460,
        'nombre' => 'Ley del Elemento Neutro',
        'formula' => '$$p\\lor F\\Longleftrightarrow p\\\\p\\land V\\Longleftrightarrow p$$',
        'detalle' => 'Leyes del elemento neutro para operadores lógicos.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-18 16:12:29',
        'updated_at' => '2023-05-18 16:12:29'
    ],
    [
        'id' => 461,
        'nombre' => 'Ley de Condición de Negación',
        'formula' => '$$p\\lor \\neg  p\\Longleftrightarrow V\\\\P\\land\\neg p\\Longleftrightarrow F$$',
        'detalle' => 'Leyes de negación para operadores lógicos.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-18 16:17:22',
        'updated_at' => '2023-05-18 16:17:22'
    ],
    [
        'id' => 462,
        'nombre' => 'Simetrica',
        'formula' => '$$\\forall a,b\\in A,\\:a\\:R\\:b\\Rightarrow b\\:R\\:a$$',
        'detalle' => 'Propiedad simétrica de relaciones: si a está relacionado con b, entonces b está relacionado con a.',
        'indice' => 0,
        'tema_id' => 17,
        'created_at' => '2023-05-18 16:40:23',
        'updated_at' => '2023-05-18 16:40:23'
    ],
    [
        'id' => 463,
        'nombre' => 'Antisimetrica en sentido amplio',
        'formula' => '$$\\forall a,b\\in A,(a\\:R\\:b\\:\\land\\:b\\:R\\:a)\\Rightarrow a=b$$',
        'detalle' => 'Propiedad antisimétrica: si a está relacionado con b y viceversa, entonces a = b.',
        'indice' => 0,
        'tema_id' => 17,
        'created_at' => '2023-05-18 16:53:28',
        'updated_at' => '2023-05-18 16:56:27'
    ],
    [
        'id' => 464,
        'nombre' => 'Antisimetrica de sentido estricto',
        'formula' => '$$\\forall a\\in A,\\:a\\not{R}\\:a\\Rightarrow b\\not{R}\\:a$$',
        'detalle' => 'Propiedad antisimétrica estricta: ningún elemento está relacionado consigo mismo.',
        'indice' => 0,
        'tema_id' => 17,
        'created_at' => '2023-05-18 16:56:17',
        'updated_at' => '2023-05-18 16:56:17'
    ],
    [
        'id' => 465,
        'nombre' => 'Transitiva',
        'formula' => '$$\\forall a,b,c\\in A,(a\\:R\\:b\\:\\land\\:b\\:R\\:c)\\Rightarrow a\\:R\\:b$$',
        'detalle' => 'Propiedad transitiva: si a está relacionado con b y b con c, entonces a está relacionado con c.',
        'indice' => 0,
        'tema_id' => 17,
        'created_at' => '2023-05-18 16:59:11',
        'updated_at' => '2023-05-18 16:59:11'
    ],
    [
        'id' => 466,
        'nombre' => 'Intransitiva',
        'formula' => '$$\\forall a,b,c\\in A,(a\\:R\\:b\\:\\land\\:b\\:R\\:c)\\Rightarrow a\\not{R}\\:b$$',
        'detalle' => 'Propiedad intransitiva: si a está relacionado con b y b con c, entonces a no está relacionado con c.',
        'indice' => 0,
        'tema_id' => 17,
        'created_at' => '2023-05-18 17:02:17',
        'updated_at' => '2023-05-18 17:02:17'
    ],
    [
        'id' => 467,
        'nombre' => 'Definición de Implicación',
        'formula' => '$$p\\rightarrow q \\Longleftrightarrow \\neg p\\lor q$$',
        'detalle' => 'Equivalencia lógica entre implicación y disyunción con negación.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-18 19:54:48',
        'updated_at' => '2023-05-18 19:54:48'
    ],
    [
        'id' => 468,
        'nombre' => 'Definición de Equivalencia',
        'formula' => '$$p\\leftrightarrow q \\Longleftrightarrow (p\\rightarrow q)\\land(q\\rightarrow p)$$',
        'detalle' => 'Equivalencia lógica entre doble implicación y conjunción de implicaciones.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-18 20:00:55',
        'updated_at' => '2023-05-18 20:00:55'
    ],
    [
        'id' => 469,
        'nombre' => 'Dominio para funciones logarítmicas ( Caso 3 )',
        'formula' => '$$f\\left(x\\right)=\\log _{b\\left(x\\right)}\\left[h\\left(x\\right)\\right]\\\\b\\left(x\\right)\\ne 1$$',
        'detalle' => 'Condición para el dominio de funciones logarítmicas con base variable.',
        'indice' => 0,
        'tema_id' => 16,
        'created_at' => '2023-05-19 01:05:30',
        'updated_at' => '2023-05-19 01:05:30'
    ],
    [
        'id' => 470,
        'nombre' => 'Tiempo de encuentro',
        'formula' => '$$t_e=\\frac{d}{V_a+V_b}$$',
        'detalle' => 'Fórmula para calcular el tiempo de encuentro entre dos móviles.',
        'indice' => 0,
        'tema_id' => 4,
        'created_at' => '2023-05-19 22:27:30',
        'updated_at' => '2023-05-19 22:27:30'
    ],
    [
        'id' => 471,
        'nombre' => 'Tiempo de alcance',
        'formula' => '$$t_a=\\frac{d}{V_a-V_b}$$',
        'detalle' => 'Fórmula para calcular el tiempo de alcance entre dos móviles.',
        'indice' => 0,
        'tema_id' => 4,
        'created_at' => '2023-05-19 22:30:04',
        'updated_at' => '2023-05-19 22:30:28'
    ],
    [
        'id' => 472,
        'nombre' => 'Leyes de Idempotencia',
        'formula' => '$$p\\land p\\Longleftrightarrow p\\\\p\\lor p\\Longleftrightarrow p$$',
        'detalle' => 'Leyes idempotentes para operadores lógicos AND y OR.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-19 23:07:26',
        'updated_at' => '2023-06-29 19:49:41'
    ],
    [
        'id' => 473,
        'nombre' => 'Condición de Tautología y Antitautología',
        'formula' => '$$p\\lor V\\Longleftrightarrow V\\\\p\\land V\\Longleftrightarrow F$$',
        'detalle' => 'Condiciones para tautologías y contradicciones en lógica.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-19 23:14:05',
        'updated_at' => '2023-06-29 19:50:42'
    ],
    [
        'id' => 474,
        'nombre' => 'Leyes  de Absorción',
        'formula' => '$$p\\land(p\\lor q)\\Longleftrightarrow p\\\\p\\lor (p\\land q)\\Longleftrightarrow p$$',
        'detalle' => 'Leyes de absorción para operadores lógicos AND y OR.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-19 23:17:54',
        'updated_at' => '2023-06-29 19:51:28'
    ],
    [
        'id' => 475,
        'nombre' => 'Leyes de Stokes',
        'formula' => '$$\\neg p\\lor(p\\land q)\\Longleftrightarrow \\neg p\\lor q\\\\\\neg p\\land(p\\lor q)\\Longleftrightarrow \\neg p\\land q\\\\p\\lor (\\neg p\\land q)\\Longleftrightarrow p\\lor q\\\\p\\land(\\neg p\\lor q)\\Longleftrightarrow p\\land q$$',
        'detalle' => 'Leyes de Stokes para simplificación de expresiones lógicas.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-19 23:25:28',
        'updated_at' => '2023-06-29 19:53:02'
    ],
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 476,
        'nombre' => 'Definición de Disyunción Exclusiva',
        'formula' => '$$p\\veebar q\\Longleftrightarrow (p\\lor q)\\land \\neg(p\\land q)$$',
        'detalle' => 'Relación lógica entre dos proposiciones donde solo una es verdadera.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-19 23:39:42',
        'updated_at' => '2023-06-29 19:53:39'
    ],
    [
        'id' => 477,
        'nombre' => 'Leyes de Morgan',
        'formula' => '$$\\neg(p\\land q)\\Longleftrightarrow\\neg p\\lor\\neg q\\\\\\neg(p\\lor q)\\Longleftrightarrow\\neg p\\land\\neg q$$',
        'detalle' => 'Reglas para distribuir negaciones en conjunciones y disyunciones.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-19 23:43:40',
        'updated_at' => '2023-06-29 19:54:53'
    ],
    [
        'id' => 478,
        'nombre' => 'Ley de la Doble Negación',
        'formula' => '$$\\neg(\\neg p)\\Longleftrightarrow p$$',
        'detalle' => 'La negación de una negación equivale a la proposición original.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-19 23:45:20',
        'updated_at' => '2023-06-29 19:55:23'
    ],
    [
        'id' => 479,
        'nombre' => 'Primera ley de Newton (Ley de la Inercia)',
        'formula' => '$$\\sum F=0\\\\frac{dv}{dt}=0$$',
        'detalle' => 'Un cuerpo permanece en reposo o movimiento uniforme sin fuerzas externas.',
        'indice' => 0,
        'tema_id' => 61,
        'created_at' => '2023-05-19 23:46:06',
        'updated_at' => '2023-05-19 23:46:06'
    ],
    [
        'id' => 480,
        'nombre' => 'Negación de Tautología y Antitautología',
        'formula' => '$$\\neg V\\Longleftrightarrow F\\\\\\neg F\\Longleftrightarrow V$$',
        'detalle' => 'Negación de valores lógicos verdaderos y falsos.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-19 23:49:32',
        'updated_at' => '2023-06-29 19:56:21'
    ],
    [
        'id' => 481,
        'nombre' => 'Segunda ley de Newton (Ley de la dinámica)',
        'formula' => '$$\\sum F=ma$$',
        'detalle' => 'La fuerza neta es igual a la masa por aceleración.',
        'indice' => 0,
        'tema_id' => 61,
        'created_at' => '2023-05-19 23:52:27',
        'updated_at' => '2023-05-19 23:52:27'
    ],
    [
        'id' => 482,
        'nombre' => 'Tercera ley de Newton (Acción y reacción)',
        'formula' => '$$F_1-_2=F_2-_1$$',
        'detalle' => 'Las fuerzas entre dos cuerpos son iguales y opuestas.',
        'indice' => 0,
        'tema_id' => 61,
        'created_at' => '2023-05-19 23:56:18',
        'updated_at' => '2023-05-19 23:56:18'
    ],
    [
        'id' => 483,
        'nombre' => 'Condicionales Asociadas: Recíprocos, Contrarios y Contrarecíprocos',
        'formula' => '$$(p\\rightarrow q)\\:\\:\\:Recíprocos\\:\\:\\:(q\\rightarrow p)\\\\(p\\rightarrow q) \\:\\:\\:Contrarios(\\neg p\\rightarrow\\neg q)\\\\(p\\rightarrow q)\\:\\:\\:Contrarrecíprocos\\:\\:\\:(\\neg q\\rightarrow \\neg p)$$',
        'detalle' => 'Variantes de una implicación lógica.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-20 00:18:44',
        'updated_at' => '2023-05-20 00:18:44'
    ],
    [
        'id' => 484,
        'nombre' => 'Reglas de Inferencia Logica',
        'formula' => '$$Adición (A):\\:\\:\\: 1. - \\underline{P}$$',
        'detalle' => 'Reglas básicas para derivar conclusiones lógicas.',
        'indice' => 0,
        'tema_id' => 9,
        'created_at' => '2023-05-20 00:18:45',
        'updated_at' => '2023-05-20 00:28:16'
    ],
    [
        'id' => 485,
        'nombre' => 'Integral del Coseno Cuadrado de una Función',
        'formula' => '$$\\int \\:\\cos ^2\\left(u\\right)du=\\frac{u}{2}+\\frac{\\sin \\left(2u\\right)}{4}+c$$',
        'detalle' => 'Fórmula para integrar cos²(u).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-22 22:50:02',
        'updated_at' => '2023-05-22 22:50:02'
    ],
    [
        'id' => 486,
        'nombre' => 'Integral de la Tangente cuadrada de una Función',
        'formula' => '$$\\int \\:\\tan ^2\\left(u\\right)du=\\left(\\tan \\left(u\\right)-u\\right)+c$$',
        'detalle' => 'Fórmula para integrar tan²(u).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-22 22:57:29',
        'updated_at' => '2023-05-22 22:57:29'
    ],
    [
        'id' => 487,
        'nombre' => 'Integral de la Cotangente Cuadrada de una Función',
        'formula' => '$$\\int \\:\\cot ^2\\left(u\\right)du=\\left(-\\cot \\left(u\\right)-u\\right)+c$$',
        'detalle' => 'Fórmula para integrar cot²(u).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-22 23:08:09',
        'updated_at' => '2023-05-22 23:08:09'
    ],
    [
        'id' => 488,
        'nombre' => 'Integral de la Fracción de una Función',
        'formula' => '$$\\int \\frac{du}{\\:u}=\\ln \\left|u\\right|+\\ln \\left(c\\right)=\\ln \\left(cu\\right)$$',
        'detalle' => 'Fórmula para integrar 1/u du.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-22 23:23:02',
        'updated_at' => '2023-05-22 23:23:02'
    ],
    [
        'id' => 489,
        'nombre' => 'Integral de la Fracción de la suma de una Función cuadrada y una constante al cuadrado',
        'formula' => '$$\\int \\frac{du}{u^2+a^2}=\\frac{1}{a}arctg\\frac{u}{a}+c$$',
        'detalle' => 'Fórmula para integrar 1/(u²+a²).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-23 00:26:40',
        'updated_at' => '2023-05-23 00:26:40'
    ],
    [
        'id' => 490,
        'nombre' => 'Integral de la Fracción de la resta de una Función cuadrada y una constante al cuadrado',
        'formula' => '$$\\int \\frac{du}{u^2-a^2}=\\frac{1}{2a}ln\\left|\\frac{u-a}{u+a}\\right|+c$$',
        'detalle' => 'Fórmula para integrar 1/(u²-a²).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-23 00:41:25',
        'updated_at' => '2023-05-23 00:41:25'
    ],
    [
        'id' => 491,
        'nombre' => 'Integral de la Fracción de la resta de una constante al cuadrado y una Funcion al cuadrado',
        'formula' => '$$\\int \\frac{du}{a^2-u^2}=\\frac{1}{2a}ln\\left|\\frac{a+u}{a-u}\\right|+c$$',
        'detalle' => 'Fórmula para integrar 1/(a²-u²).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-23 01:16:54',
        'updated_at' => '2023-05-23 01:16:54'
    ],
    [
        'id' => 492,
        'nombre' => 'amplitud',
        'formula' => '$$\\int dx$$',
        'detalle' => 'Integral simple de dx.',
        'indice' => 0,
        'tema_id' => 60,
        'created_at' => '2023-05-24 01:32:27',
        'updated_at' => '2023-05-24 01:32:27'
    ],
    [
        'id' => 493,
        'nombre' => 'Integral de la Fracción de la raíz cuadrada de una resta entre una Función cuadrada y una constante al cuadrado',
        'formula' => '$$\\int \\:\\frac{du}{\\sqrt{u^2-a^2}}=\\ln \\left|u+\\sqrt{u^2-a^2}\\right|$$',
        'detalle' => 'Fórmula para integrar 1/√(u²-a²).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-25 22:54:09',
        'updated_at' => '2023-05-25 22:54:09'
    ],
    [
        'id' => 494,
        'nombre' => 'Integrales que contienen subradicales (a2+x2), (a2-x2)',
        'formula' => '$$\\int\\frac{du}{\\sqrt{a^2-u^2}}=sin^{-1}(\\frac{u}{a})\\\\\\int\\frac{du}{\\sqrt{a^2+u^2}}=Ln[u+\\sqrt{u^2+a^2}]\\\\\\int\\frac{du}{\\sqrt{u^2-a^2}}=Ln[u+\\sqrt{u^2-a^2}]\\\\\\int\\sqrt{a^2-u^2}\\:du=\\frac{u}{2}\\sqrt{a^2-u^2}+\\frac{a^2}{2}sin^{-1}(\\frac{u}{a})\\\\\\int\\sqrt{a^2+u^2}\\:du=\\frac{u}{2}\\sqrt{a^2+u^2} +\\frac{a^2}{2}Ln[u+\\sqrt{a^2+u^2}]$$',
        'detalle' => 'Fórmulas para integrales con expresiones subradicales.',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-25 23:17:42',
        'updated_at' => '2023-05-25 23:17:42'
    ],
    [
        'id' => 495,
        'nombre' => 'Integral de la Fracción de la raíz cuadrada de una resta entre una Constante cuadrada y una Función al cuadrado',
        'formula' => '$$\\int \\:\\frac{du}{\\sqrt{a^2-u^2}}=arcsen\\frac{u}{a}$$',
        'detalle' => 'Fórmula para integrar 1/√(a²-u²).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-25 23:50:23',
        'updated_at' => '2023-05-25 23:50:23'
    ],
    [
        'id' => 496,
        'nombre' => 'Integral de la Fracción de la raíz cuadrada de la suma entre una Función cuadrada y una Constante al cuadrado',
        'formula' => '$$\\int \\:\\frac{du}{\\sqrt{u^2+a^2}}=\\ln \\left|u+\\sqrt{u^2+a^2}\\right|$$',
        'detalle' => 'Fórmula para integrar 1/√(u²+a²).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-26 00:03:31',
        'updated_at' => '2023-05-26 00:03:31'
    ],
    [
        'id' => 497,
        'nombre' => 'Integral de la Fracción de la multiplicación de una función por la raíz cuadrada de la resta entre una Función cuadrada y una Constante al cuadrado',
        'formula' => '$$\\int \\:\\frac{du}{u\\sqrt{u^2-a^2}}=\\frac{1}{a}arcsec\\frac{u}{a}$$',
        'detalle' => 'Fórmula para integrar 1/u√(u²-a²).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-26 00:23:32',
        'updated_at' => '2023-05-26 00:23:32'
    ],
    [
        'id' => 498,
        'nombre' => 'Estados de la materia',
        'formula' => '$$\\bullet\\:Estado\\:Sólido\\\\\\bullet\\:Estado\\:Líquido\\\\\\bullet\\:Estado\\:Gaseoso\\\\\\bullet\\: Estado\\:Plasmático\\\\\\bullet\\:Estado\\:Condensado\\:Fermi\\\\\\bullet\\:Estado\\:Condensado\\:Bose-Einsten\\\\\\bullet\\: Estado\\:Supersólido$$',
        'detalle' => 'Los diferentes estados en que puede encontrarse la materia.',
        'indice' => 0,
        'tema_id' => 75,
        'created_at' => '2023-05-26 19:43:57',
        'updated_at' => '2023-05-26 19:56:11'
    ],
    [
        'id' => 499,
        'nombre' => 'Cambios de un estado a otro',
        'formula' => '$$Sublimación:Sólido\\Longrightarrow Gas\\\\Vaporización:Líquido\\Longrightarrow Gas\\\\Condensación:Gas\\Longrightarrow Líquido\\\\Solidificación:Líquido\\Longrightarrow Sólido\\\\Fusión:\\:Sólido\\Longrightarrow Líquido\\\\Sublimación\\:inversa:Gas\\Longrightarrow Sólido$$',
        'detalle' => 'Transiciones entre estados de la materia.',
        'indice' => 0,
        'tema_id' => 75,
        'created_at' => '2023-05-26 20:03:44',
        'updated_at' => '2023-05-27 00:22:06'
    ],
    [
        'id' => 500,
        'nombre' => 'Integral de la Fracción de la multiplicación de una función por la raíz cuadrada de la suma entre una Constante cuadrada y una Función al cuadrado',
        'formula' => '$$\\int \\:\\:\\:\\frac{du}{u\\sqrt{a^2+u^2}}=-\\frac{1}{a}\\ln \\:\\:\\left(\\frac{a+\\sqrt{u^2+a^2}}{u}\\right)$$',
        'detalle' => 'Fórmula para integrar 1/u√(a²+u²).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-27 00:00:20',
        'updated_at' => '2023-05-27 01:11:05'
    ],
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 501,
        'nombre' => 'Integral de la Fracción de la multiplicación de una función por la raíz cuadrada de la resta entre una Constante cuadrada y una Función al cuadrado',
        'formula' => '$$\\int \\:\\:\\frac{du}{u\\sqrt{a^2-u^2}}=-\\frac{1}{a}Ln\\left(\\frac{a+\\sqrt{a^2-u^2}}{u}\\right)$$',
        'detalle' => 'Fórmula para integrar 1/u√(a²-u²).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-05-27 00:52:37',
        'updated_at' => '2023-05-27 00:52:37'
    ],
    [
        'id' => 502,
        'nombre' => 'Ley de Boyle-Mariotte (Proceso Isotérmico)',
        'formula' => '$$P_1·V_1=P_2·V_2$$',
        'detalle' => 'Relación presión-volumen a temperatura constante.',
        'indice' => 0,
        'tema_id' => 54,
        'created_at' => '2023-05-27 16:17:22',
        'updated_at' => '2023-08-25 00:35:08'
    ],
    [
        'id' => 503,
        'nombre' => 'Ley de Charles (Proceso Isobárico)',
        'formula' => '$$\\frac{V_1}{T_1}=\\frac{V_2}{T_2}$$',
        'detalle' => 'Relación volumen-temperatura a presión constante.',
        'indice' => 0,
        'tema_id' => 54,
        'created_at' => '2023-05-27 16:19:23',
        'updated_at' => '2023-08-25 00:35:50'
    ],
    [
        'id' => 504,
        'nombre' => 'Ley de Gay-Lussac (Proceso Isocórico)',
        'formula' => '$$\\frac{P_1}{T_1}=\\frac{P_2}{T_2}$$',
        'detalle' => 'Relación presión-temperatura a volumen constante.',
        'indice' => 0,
        'tema_id' => 54,
        'created_at' => '2023-05-27 16:21:44',
        'updated_at' => '2023-08-25 00:36:35'
    ],
    [
        'id' => 505,
        'nombre' => 'Ley General o Ley Combinada de los gases',
        'formula' => '$$\\frac{P_1·V_1}{T_1}=\\frac{P_2·V_2}{T_2}$$',
        'detalle' => 'Combinación de las leyes de los gases ideales.',
        'indice' => 0,
        'tema_id' => 54,
        'created_at' => '2023-05-27 16:24:53',
        'updated_at' => '2023-05-27 16:26:08'
    ],
    [
        'id' => 506,
        'nombre' => 'Ecuación de Estado o Ecuación de los gases Ideales',
        'formula' => '$$P·V=n.R.T\\:\\:;\\:\\:n=\\frac{m}{PM}\\\\\\rho=\\frac{P.PM}{R·T}$$',
        'detalle' => 'Ecuación fundamental para gases ideales.',
        'indice' => 0,
        'tema_id' => 54,
        'created_at' => '2023-05-29 16:32:05',
        'updated_at' => '2023-05-29 16:32:05'
    ],
    [
        'id' => 507,
        'nombre' => 'Fuerza magnética sobre una carga',
        'formula' => '$$\\vec{F}=B·[q]·V \\\\si\\:B,FyV ,son\\:perpendiculares\\:entre\\:sí;\\\\además\\:B\\:y\\:Vestén\\:en\\:un\\:plano\\\\\\vec{F}=B·[q]·V·sin\\theta\\\\Si\\:B\\:y\\:V\\:forman\\:un\\:ángulo\\:\\theta\\neq 90º\\\\en\\:un\\:mismo\\:plano$$',
        'detalle' => 'Fuerza de Lorentz sobre una carga en movimiento.',
        'indice' => 0,
        'tema_id' => 73,
        'created_at' => '2023-05-29 17:00:39',
        'updated_at' => '2023-05-29 17:00:39'
    ],
    [
        'id' => 508,
        'nombre' => 'Movimiento de una carga en un campo uniforme',
        'formula' => '$$Radio:\\:\\:r=\\frac{m·V}{[q]·B}\\\\Velocidad\\:angular:w=\\frac{[q]}{m}·B\\\\Periodo:T=\\frac{2\\pi ·m}{q·B}$$',
        'detalle' => 'Parámetros del movimiento circular en campo magnético.',
        'indice' => 0,
        'tema_id' => 73,
        'created_at' => '2023-05-29 17:11:59',
        'updated_at' => '2023-05-29 18:28:36'
    ],
    [
        'id' => 509,
        'nombre' => 'Fuerza magnética sobre un cable conductor recto',
        'formula' => '$$\\vec{F} =I·l·B·sin\\theta$$',
        'detalle' => 'Fuerza sobre conductor con corriente en campo magnético.',
        'indice' => 0,
        'tema_id' => 73,
        'created_at' => '2023-05-29 18:48:10',
        'updated_at' => '2023-05-29 18:48:10'
    ],
    [
        'id' => 510,
        'nombre' => 'Fuerza magnética sobre una espira rectangular',
        'formula' => '$$F=I·b·B·sin\\beta;\\:\\:\\beta\\:ángulo\\:que\\:forma\\\\el\\:plano\\:de\\:la\\:espira\\\\con\\:la\\:dirección\\:del\\:campo\\:magnético\\:B$$',
        'detalle' => 'Fuerza sobre espira conductora en campo magnético.',
        'indice' => 0,
        'tema_id' => 73,
        'created_at' => '2023-05-29 18:55:00',
        'updated_at' => '2023-05-29 18:59:51'
    ],
    [
        'id' => 511,
        'nombre' => 'Momento o Torque que hace girar la espira rectangular',
        'formula' => '$$\\tau=I·S·B·sin\\theta$$',
        'detalle' => 'Torque sobre espira en campo magnético.',
        'indice' => 0,
        'tema_id' => 73,
        'created_at' => '2023-05-29 19:05:16',
        'updated_at' => '2023-05-29 19:05:16'
    ],
    [
        'id' => 512,
        'nombre' => 'Velocidad instantánea en función del desplazamiento',
        'formula' => '$$V_f^2= V_0^2\\pm 2·a·d$$',
        'detalle' => 'Relación velocidad-desplazamiento en MRUV.',
        'indice' => 0,
        'tema_id' => 5,
        'created_at' => '2023-06-01 15:57:52',
        'updated_at' => '2023-06-01 15:57:52'
    ],
    [
        'id' => 514,
        'nombre' => 'Poleas (Opción 1): a=?; T=?',
        'formula' => '$$Si\\:m_1>m_2\\\\a=g\\left(\\frac{m_1-m_2}{m_1+m_2}\\right)\\\\T=\\frac{2gm_1m_2}{m_1+m_2}$$',
        'detalle' => 'Aceleración y tensión en sistema de poleas con m₁>m₂.',
        'indice' => 0,
        'tema_id' => 61,
        'created_at' => '2023-06-01 23:53:05',
        'updated_at' => '2023-06-02 23:03:13'
    ],
    [
        'id' => 515,
        'nombre' => 'Poleas (Opción 2): a=?; T=?',
        'formula' => '$$Si\\:m_2>m_1\\\\a=g\\left(\\frac{m_2-m_1}{m_1+m_2}\\right)\\\\T=\\frac{2gm_1m_2}{m_1+m_2}$$',
        'detalle' => 'Aceleración y tensión en sistema de poleas con m₂>m₁.',
        'indice' => 0,
        'tema_id' => 61,
        'created_at' => '2023-06-02 23:04:01',
        'updated_at' => '2023-06-02 23:04:01'
    ],
    [
        'id' => 516,
        'nombre' => 'Poleas (Opción 3): a=?; T=?',
        'formula' => '$$m_1+m_2\\:estan\\:a\\:la\\:derecha\\\\Si\\:m_1+m_2>m_3\\\\a=g\\left(\\frac{m_1+m_2-m_3}{m_1+m_2+m_3}\\right)\\\\T_1=\\frac{2gm_1m_3}{m_1+m_2+m_3}\\\\T_2=\\frac{2gm_3(m_1+m_2)}{m_1+m_2+m_3}$$',
        'detalle' => 'Sistema de poleas con tres masas (m₁+m₂ vs m₃).',
        'indice' => 0,
        'tema_id' => 61,
        'created_at' => '2023-06-03 00:02:16',
        'updated_at' => '2023-06-24 00:05:50'
    ],
    [
        'id' => 517,
        'nombre' => 'Sean los Vértices de un polígono cerrado de \'n\' lados',
        'formula' => '$$P_1(a_1,b_1),P_2(a_2,b_2),P_3(a_3,b_3)..P_n(a_n,b_n)\\\\A=\\frac{1}2[(a_1b_2+a_2b_3+..+a_{n-1}b_n+a_nb_1)-\\\\(b_1a_2+b_2a_3+..+b_{n-1}a_n+b_na_1)]$$',
        'detalle' => 'Fórmula del área de polígono por coordenadas de vértices.',
        'indice' => 0,
        'tema_id' => 7,
        'created_at' => '2023-06-03 16:22:51',
        'updated_at' => '2023-06-03 16:45:58'
    ],
    [
        'id' => 518,
        'nombre' => 'Fracción decimal exacta',
        'formula' => '$$a,bcd=\\frac{abcd}{10000}$$',
        'detalle' => 'Conversión de decimal exacto a fracción.',
        'indice' => 0,
        'tema_id' => 38,
        'created_at' => '2023-06-05 16:01:32',
        'updated_at' => '2023-06-05 16:01:32'
    ],
    [
        'id' => 519,
        'nombre' => 'Fracción decimal periódica pura',
        'formula' => '$$a,\\overline{bcd}=\\frac{abcd-a}{n*9}\\:\\:$$',
        'detalle' => 'Conversión de decimal periódico puro a fracción.',
        'indice' => 0,
        'tema_id' => 38,
        'created_at' => '2023-06-05 16:07:07',
        'updated_at' => '2023-08-01 17:07:27'
    ],
    [
        'id' => 522,
        'nombre' => 'Area de un triángulo por la fórmula de Herón',
        'formula' => '$$sean\\:a,b\\:y\\:c\\:los\\:lados\\:de\\:un\\:triángulo\\\\S=\\frac{a+b+c}{2} \\\\A=\\frac{1}{2}\\sqrt{(S-a)·(S-b)·(S-c)}$$',
        'detalle' => 'Cálculo de área con lados del triángulo.',
        'indice' => 0,
        'tema_id' => 37,
        'created_at' => '2023-06-05 16:57:20',
        'updated_at' => '2023-06-05 17:01:44'
    ],
    [
        'id' => 523,
        'nombre' => 'Ley de los nudos',
        'formula' => '$$La\\:suma\\:algebráica\\:de\\:la\\:intensidades\\\\de\\:corriente\\:que\\:concurren\\:en\\:un\\:nudo\\\\es\\:igual\\:a\\:cero. \\\\El\\:convenio\\:de\\:signos,es\\:el\\:siguiente:\\\\ Las\\:corrienetes\\:que\\:se\\:dirigen\\:al\\:nudo\\\\son\\:positivas(+),\\:y\\:las\\:que\\:salen\\\\del\\:nudo\\:son\\:negativas(-)\\\\\\sum I=0$$',
        'detalle' => 'Conservación de corriente en nodos de circuito.',
        'indice' => 0,
        'tema_id' => 69,
        'created_at' => '2023-06-07 19:06:18',
        'updated_at' => '2023-06-07 19:17:05'
    ],
    [
        'id' => 524,
        'nombre' => 'Ley de las mallas',
        'formula' => '$$En\\:todo\\:circuito\\:cerrado,la\\:suma\\\\algebráica\\:de\\:las\\:fuerzas\\:electromotrices\\\\en\\:el\\:existente\\:es\\:igual\\:a\\:la\\:suma\\\\algebráica\\:de\\:todas\\:las\\:caídas\\:de\\\\tensión\\:\\:R·I.\\:\\:es\\:decir:\\\\\\sum \\epsilon =\\sum R·I$$',
        'detalle' => 'Conservación de energía en mallas de circuito.',
        'indice' => 0,
        'tema_id' => 69,
        'created_at' => '2023-06-07 19:33:59',
        'updated_at' => '2023-06-07 19:33:59'
    ],
    [
        'id' => 525,
        'nombre' => '1ra.Regla para la aplicación de las leyes de Kirchhoff',
        'formula' => '$$Asumir\\:un\\:sentido\\:para\\:la\\:corriente\\\\en\\:cada\\:conductor\\:del\\:circuito.\\\\No\\:importa\\:si\\:el\\:sentido\\:asumido\\\\es\\:el\\:verdadero\\:o\\:no.$$',
        'detalle' => 'Asignación de sentidos de corriente en circuitos.',
        'indice' => 0,
        'tema_id' => 69,
        'created_at' => '2023-06-07 19:51:54',
        'updated_at' => '2023-06-07 19:57:26'
    ],
    [
        'id' => 526,
        'nombre' => '2da.Regla en la aplicación de las leyes de Kirchhoff',
        'formula' => '$$Elegir\\:un\\:sentido\\:para\\:recorrer\\\\la\\:malla\\:(semi-circuito)\\:ya\\:sea\\\\el\\:sentido\\:de\\:;las\\:manecillas\\:del\\:reloj\\\\o\\:contrario\\:a\\:él.La\\:caída\\:de tensión\\:R·I\\\\ se\\:considera\\:como\\:positivo,si\\:pasamos\\\\por\\:esta\\:resistencia\\:en\\:el\\:sentido\\:asignado\\\\para\\:la\\:corriente\\:de\\:la\\:primera\\:regla\\:y\\:negativo\\:sifluyeensentidocontrario$$',
        'detalle' => 'Convención de signos para análisis de mallas.',
        'indice' => 0,
        'tema_id' => 69,
        'created_at' => '2023-06-07 20:04:11',
        'updated_at' => '2023-06-07 22:47:06'
    ],
    [
        'id' => 527,
        'nombre' => 'Area de un polígono regular',
        'formula' => '$$\\theta\\:\\:ángulo\\:central:\\:\\:\\theta =\\frac{360º}{n}\\:\\:;\\:n=lados\\\\Lado\\:del\\:poligono:\\:\\:l=2·r·sin(\\frac{\\theta }{2})\\\\Apotema\\::a_p=r·cos(\\frac{\\theta}{2})\\\\Perímetro\\::P=n·l=2·n·r·sin(\\frac{\\theta}{2})\\\\Area: A=\\frac{1}{2}·P·a_p=\\frac{n}{2}·r^2·sin\\theta$$',
        'detalle' => 'Fórmulas para polígonos regulares inscritos.',
        'indice' => 0,
        'tema_id' => 28,
        'created_at' => '2023-06-08 01:56:06',
        'updated_at' => '2023-06-08 01:56:06'
    ],
    [
        'id' => 528,
        'nombre' => 'Area de un sector de circunferencia',
        'formula' => '$$A= \\frac{\\theta ·r^2}{2}\\\\P=2·r+\\theta·r$$',
        'detalle' => 'Área y perímetro de sector circular.',
        'indice' => 0,
        'tema_id' => 28,
        'created_at' => '2023-06-08 02:07:13',
        'updated_at' => '2023-06-08 02:07:13'
    ],
    [
        'id' => 529,
        'nombre' => 'Integral de la raiz entre la resta de una constante al cuadrado y una función al cuadrado',
        'formula' => '$$\\int \\:\\sqrt{a^2-u^2}du=\\frac{1}{2}u\\sqrt{a^2-u^2}+\\frac{1}{2}a^2\\cdot arcsen\\frac{u}{a}+c$$',
        'detalle' => 'Fórmula para integrar √(a²-u²).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-06-12 22:52:07',
        'updated_at' => '2023-06-12 22:52:07'
    ],
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 530,
        'nombre' => 'Integral de la raiz entre la suma o resta de una funcion al cuadrado y una constante al cuadrado',
        'formula' => '$$\\int \\:\\sqrt{u^2\\pm a^2}du=\\frac{1}{2}u\\sqrt{u^2\\pm a^2}\\pm \\frac{1}{2}a^2\\ln \\left|u+\\sqrt{u^2\\pm a^2}\\right|+c$$',
        'detalle' => 'Fórmula para integrar √(u²±a²).',
        'indice' => 0,
        'tema_id' => 25,
        'created_at' => '2023-06-12 23:34:23',
        'updated_at' => '2023-06-12 23:34:23'
    ],
    [
        'id' => 532,
        'nombre' => 'Ecuación cuadrática incompleta: ax²+bx=0',
        'formula' => '$$ax^2+bx=0\\\\x_1=0;\\:\\:\\:x_2=-\\frac{b}{a}$$',
        'detalle' => 'Solución para ecuaciones cuadráticas sin término independiente.',
        'indice' => 0,
        'tema_id' => 3,
        'created_at' => '2023-06-14 19:13:42',
        'updated_at' => '2023-06-14 19:13:42'
    ],
    [
        'id' => 533,
        'nombre' => 'Ecuación cuadrática incompleta: ax²+c=0',
        'formula' => '$$ax^2+c=0\\\\x=\\pm\\sqrt{-\\frac{c}{a}}\\\\$$',
        'detalle' => 'Solución para ecuaciones cuadráticas sin término lineal.',
        'indice' => 0,
        'tema_id' => 3,
        'created_at' => '2023-06-14 19:25:53',
        'updated_at' => '2023-06-19 15:57:04'
    ],
    [
        'id' => 534,
        'nombre' => 'Poleas (Opción 4): a=?; T=?',
        'formula' => '$$Si\\:m_3>m_1+m_2\\\\a=g\\left(\\frac{m_3-m_2-m_1}{m_1+m_2+m_3}\\right)\\\\T_1=\\frac{2gm_1m_3}{m_1+m_2+m_3}\\\\T_2=\\frac{2gm_3(m_1+m_2)}{m_1+m_2+m_3}$$',
        'detalle' => 'Sistema de poleas con m₃ > m₁+m₂.',
        'indice' => 0,
        'tema_id' => 61,
        'created_at' => '2023-06-15 01:30:57',
        'updated_at' => '2023-06-15 01:30:57'
    ],
    [
        'id' => 535,
        'nombre' => 'Area y perímetro de un segmento de circunferencia',
        'formula' => '$$A=\\frac{r^2}{2}·(\\theta -sin\\theta ) \\\\P=2r·(1+sin\\frac{\\theta}{2})$$',
        'detalle' => 'Fórmulas para segmento circular.',
        'indice' => 0,
        'tema_id' => 28,
        'created_at' => '2023-06-15 15:59:14',
        'updated_at' => '2023-06-15 15:59:14'
    ],
    [
        'id' => 536,
        'nombre' => 'Plano horizontal (Opción 1): a=?; T=?',
        'formula' => '$$Si\\:m_1>m_2\\\\a=g\\left(\\frac{m_1-\\mu m_2}{m_1+m_2}\\right)\\\\T=\\frac{gm_1m_2(1+\\mu)}{m_1+m_2}$$',
        'detalle' => 'Sistema en plano horizontal con m₁>m₂ y fricción.',
        'indice' => 0,
        'tema_id' => 61,
        'created_at' => '2023-06-17 00:38:48',
        'updated_at' => '2023-06-17 01:24:35'
    ],
    [
        'id' => 537,
        'nombre' => 'Plano horizontal (Opción 2): a=?; T=?',
        'formula' => '$$Si\\:m_2>m_1\\\\a=-g\\left(\\frac{m_1+\\mu m_2}{m_1+m_2}\\right)\\\\T=\\frac{gm_1m_2(1-\\mu)}{m_1+m_2}$$',
        'detalle' => 'Sistema en plano horizontal con m₂>m₁ y fricción.',
        'indice' => 0,
        'tema_id' => 61,
        'created_at' => '2023-06-17 01:23:27',
        'updated_at' => '2023-06-17 01:23:27'
    ],
    [
        'id' => 538,
        'nombre' => 'Plano inclinado (Opción 1): a=?; T=?',
        'formula' => '$$m_1\\:esta\\:a\\:la\\:derecha\\\\Si\\:m_1>m_2\\\\a=g\\left(\\frac{m_1-m_2( \\sin \\left(\\alpha \\right)+\\mu \\cos \\left(\\alpha \\right) )}{m_1+m_2}\\right)\\\\T=\\frac{gm_1m_2( 1+\\sin \\left(\\alpha \\right)+\\mu \\cos \\left(\\alpha \\right) )}{m_1+m_2}$$',
        'detalle' => 'Sistema en plano inclinado con m₁>m₂ y fricción.',
        'indice' => 0,
        'tema_id' => 61,
        'created_at' => '2023-06-17 22:50:56',
        'updated_at' => '2023-06-24 00:06:23'
    ],
    [
        'id' => 539,
        'nombre' => 'Función inversa f(x)= arc cosx',
        'formula' => '$$f\\left(x\\right)=cos^{-1}x\\\\f\'(x)=-\\frac{1}{\\sqrt{1-x^2}}$$',
        'detalle' => 'Derivada de la función arco coseno.',
        'indice' => 0,
        'tema_id' => 24,
        'created_at' => '2023-06-20 16:18:45',
        'updated_at' => '2023-06-20 18:25:17'
    ],
    [
        'id' => 540,
        'nombre' => 'Función inversa f(x)= arc tan x',
        'formula' => '$$f(x)=tan^{-1}x\\\\f\'(x)=\\frac{1}{1+x^2}$$',
        'detalle' => 'Derivada de la función arco tangente.',
        'indice' => 0,
        'tema_id' => 24,
        'created_at' => '2023-06-20 16:21:45',
        'updated_at' => '2023-06-20 18:26:04'
    ],
    [
        'id' => 541,
        'nombre' => 'Función inversa f(x)= arc cot x',
        'formula' => '$$f(x)=cot^{-1}x\\\\f\'(x)=-\\frac{1}{1+x^2}$$',
        'detalle' => 'Derivada de la función arco cotangente.',
        'indice' => 0,
        'tema_id' => 24,
        'created_at' => '2023-06-20 16:23:33',
        'updated_at' => '2023-06-20 18:26:40'
    ],
    [
        'id' => 542,
        'nombre' => 'Función inversa f(x)= arc sec x',
        'formula' => '$$f(x)=sec^{-1}x\\\\f\'(x)=\\frac{1}{x\\sqrt{x^2-1}}$$',
        'detalle' => 'Derivada de la función arco secante.',
        'indice' => 0,
        'tema_id' => 24,
        'created_at' => '2023-06-20 16:25:05',
        'updated_at' => '2023-06-20 18:27:32'
    ],
    [
        'id' => 543,
        'nombre' => 'Función inversa f(x)= arc csc x',
        'formula' => '$$f(x)=csc^{-1}x\\\\f\'(x)=-\\frac{1}{x\\sqrt{x^2-1}}$$',
        'detalle' => 'Derivada de la función arco cosecante.',
        'indice' => 0,
        'tema_id' => 24,
        'created_at' => '2023-06-20 16:26:36',
        'updated_at' => '2023-06-20 18:28:37'
    ],
    [
        'id' => 546,
        'nombre' => 'Velocidad Final al Cuadrada',
        'formula' => '$$Vf^2=Vo^2+2ad$$',
        'detalle' => 'Relación velocidad-aceleración-desplazamiento en MRUV.',
        'indice' => 0,
        'tema_id' => 55,
        'created_at' => '2023-06-22 23:36:47',
        'updated_at' => '2023-06-22 23:36:47'
    ],
    [
        'id' => 547,
        'nombre' => 'Velocidad Inicial al Cuadrada',
        'formula' => '$$Vo^2=Vf^2-2ad$$',
        'detalle' => 'Cálculo de velocidad inicial en MRUV.',
        'indice' => 0,
        'tema_id' => 55,
        'created_at' => '2023-06-22 23:40:24',
        'updated_at' => '2023-06-22 23:40:24'
    ],
    [
        'id' => 548,
        'nombre' => 'Plano inclinado (Opción 2): a=?; T=?',
        'formula' => '$$m_1\\:esta\\:a\\:la\\:derecha\\\\Si\\:m_2>m_1\\\\a=g\\left(\\frac{m_2( \\sin \\left(\\alpha \\right)-\\mu \\cos \\left(\\alpha \\right) )-m_1}{m_1+m_2}\\right)\\\\T=\\frac{gm_1m_2( 1+\\sin \\left(\\alpha \\right)-\\mu \\cos \\left(\\alpha \\right) )}{m_1+m_2}$$',
        'detalle' => 'Sistema en plano inclinado con m₂>m₁ y fricción.',
        'indice' => 0,
        'tema_id' => 61,
        'created_at' => '2023-06-24 00:00:22',
        'updated_at' => '2023-06-24 00:16:46'
    ],
    [
        'id' => 549,
        'nombre' => 'sin(90-x)',
        'formula' => '$$sin(\\frac{\\pi}2-x)=\\cos x$$',
        'detalle' => 'Identidad trigonométrica de cofunción.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 16:29:33',
        'updated_at' => '2023-07-01 16:33:47'
    ],
    [
        'id' => 550,
        'nombre' => 'sin (90+x)',
        'formula' => '$$\\sin(\\frac{\\pi}2+x)=\\cos x$$',
        'detalle' => 'Identidad trigonométrica de desplazamiento de fase.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 16:32:19',
        'updated_at' => '2023-08-01 16:42:12'
    ],
    [
        'id' => 551,
        'nombre' => 'cos (90-x)',
        'formula' => '$$\\cos (\\frac{\\pi}2-x)=\\sin x$$',
        'detalle' => 'Identidad trigonométrica de cofunción.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 16:36:36',
        'updated_at' => '2023-07-01 16:41:35'
    ],
    [
        'id' => 552,
        'nombre' => 'cos (90+x)',
        'formula' => '$$\\cos(\\frac{\\pi}2+x)=-\\sin x$$',
        'detalle' => 'Identidad trigonométrica de desplazamiento de fase.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 16:38:47',
        'updated_at' => '2023-07-01 16:42:50'
    ],
    [
        'id' => 553,
        'nombre' => 'tan (90-x) =',
        'formula' => '$$\\tan(\\frac{\\pi}2-x) =\\cot x$$',
        'detalle' => 'Identidad trigonométrica de cofunción.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 16:45:24',
        'updated_at' => '2023-07-01 16:45:24'
    ],
    [
        'id' => 554,
        'nombre' => 'tan (90+x)',
        'formula' => '$$\\tan(\\frac{\\pi}2+x) =-\\cot x$$',
        'detalle' => 'Identidad trigonométrica de desplazamiento de fase.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 16:47:37',
        'updated_at' => '2023-07-01 16:47:37'
    ],
    [
        'id' => 555,
        'nombre' => 'sin (180-x) =',
        'formula' => '$$\\sin (\\pi -x)=\\sin x$$',
        'detalle' => 'Identidad trigonométrica de suplementarios.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 16:52:08',
        'updated_at' => '2023-07-01 16:55:21'
    ],
    [
        'id' => 556,
        'nombre' => 'sin (180+x)',
        'formula' => '$$\\sin(\\pi +x)=-\\sin x$$',
        'detalle' => 'Identidad trigonométrica de desplazamiento de fase.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 16:53:18',
        'updated_at' => '2023-07-01 16:53:18'
    ],
    [
        'id' => 557,
        'nombre' => 'cos (180-x) =',
        'formula' => '$$\\cos(\\pi-x)=-\\cos x$$',
        'detalle' => 'Identidad trigonométrica de suplementarios.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 16:54:48',
        'updated_at' => '2023-07-01 16:54:48'
    ],
    [
        'id' => 558,
        'nombre' => 'cos (180+x) =',
        'formula' => '$$\\cos(\\pi +x)=-\\cos x$$',
        'detalle' => 'Identidad trigonométrica de desplazamiento de fase.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 16:56:42',
        'updated_at' => '2023-07-01 16:56:42'
    ],
    [
        'id' => 559,
        'nombre' => 'tan (180 -x) =',
        'formula' => '$$\\tan(\\pi-x)=-\\tan x$$',
        'detalle' => 'Identidad trigonométrica de suplementarios.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 16:58:08',
        'updated_at' => '2023-07-01 16:58:08'
    ],
    [
        'id' => 560,
        'nombre' => 'tan (180+x) =',
        'formula' => '$$\\tan(\\pi +x)=\\tan x$$',
        'detalle' => 'Identidad trigonométrica de periodicidad.',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 16:59:45',
        'updated_at' => '2023-07-01 16:59:45'
    ],
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 561,
        'nombre' => 'sin 4x =',
        'formula' => '$$\\sin 4x=8\\sin x\\cos^3x-4\\sin x\\cos x\\\\\\sin 4x=4\\sin x\\cos x-8\\sin^3x\\cos x\\\\\\sin 4x=4\\sin x\\cos^3x-4\\sin^3x\\cos x$$',
        'detalle' => 'Expansiones trigonométricas para sin(4x).',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 17:39:48',
        'updated_at' => '2023-07-01 17:39:48'
    ],
    [
        'id' => 562,
        'nombre' => 'cos 4x =',
        'formula' => '$$\\cos 4x =8\\sin^4x-8\\sin^2x+1\\\\\\cos 4x =8\\cos^4x-8\\cos^2x+1\\\\\\cos 4x =\\cos^4x-6\\cos^2x\\sin^2x+\\sin^4x$$',
        'detalle' => 'Expansiones trigonométricas para cos(4x).',
        'indice' => 0,
        'tema_id' => 13,
        'created_at' => '2023-07-01 17:51:24',
        'updated_at' => '2023-07-01 17:51:24'
    ],
    [
        'id' => 563,
        'nombre' => 'Fuerza de Empuje',
        'formula' => '$$Fb=Finf\\:-\\:Fsup.$$',
        'detalle' => 'Fuerza de flotación sobre cuerpos sumergidos.',
        'indice' => 0,
        'tema_id' => 80,
        'created_at' => '2023-07-18 02:14:12',
        'updated_at' => '2023-07-18 02:14:12'
    ],
    [
        'id' => 565,
        'nombre' => 'Impulso Lineal',
        'formula' => '$$I= F.\\Delta t$$',
        'detalle' => 'Relación entre fuerza y tiempo en impulso.',
        'indice' => 0,
        'tema_id' => 84,
        'created_at' => '2023-08-02 15:58:39',
        'updated_at' => '2023-08-02 15:58:39'
    ],
    [
        'id' => 566,
        'nombre' => 'Cantidad de movimiento',
        'formula' => '$$C = m.V$$',
        'detalle' => 'Definición de momento lineal.',
        'indice' => 0,
        'tema_id' => 84,
        'created_at' => '2023-08-02 15:59:38',
        'updated_at' => '2023-08-02 15:59:38'
    ],
    [
        'id' => 567,
        'nombre' => 'Conservación de la cantidad de movimiento',
        'formula' => '$$C_1+C_2 =C_1\' +C_2\'\\\\m_1.V_1+m_2.V_2=m_1.U_1+m_2.U_2$$',
        'detalle' => 'Principio de conservación del momento lineal.',
        'indice' => 0,
        'tema_id' => 84,
        'created_at' => '2023-08-02 16:05:32',
        'updated_at' => '2023-08-02 16:05:32'
    ],
    [
        'id' => 568,
        'nombre' => 'Peroxidos',
        'formula' => '$$M^+ O{^{-2}_2}\\\\Oxido\\ metálico + O_2 \\leftrightarrows M^+ O{^{-2}_2}$$',
        'detalle' => 'Compuestos binarios con ion peróxido (O₂⁻²).',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-02 16:11:18',
        'updated_at' => '2023-08-03 18:39:16'
    ],
    [
        'id' => 569,
        'nombre' => 'Óxidos Mixtos',
        'formula' => '$$M_3O_4$$',
        'detalle' => 'Óxidos formados por dos óxidos normales de un mismo metal.',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-02 16:13:04',
        'updated_at' => '2023-08-02 18:41:08'
    ],
    [
        'id' => 570,
        'nombre' => 'Conservación de la energía cinética (Choque elástico)',
        'formula' => '$$Ec_1+Ec_2 =Ec\'_1+Ec\'_2\\\\\\frac{1}2.m_1.V_1^2+\\frac{1}2.m_2.V_2^2=\\frac{1}2.m_1.U_1^2+\\frac{1}2.m_1.U_2^2$$',
        'detalle' => 'Conservación de energía en colisiones elásticas.',
        'indice' => 0,
        'tema_id' => 84,
        'created_at' => '2023-08-02 16:15:17',
        'updated_at' => '2023-08-02 16:15:17'
    ],
    [
        'id' => 571,
        'nombre' => 'Conservación de la energía (Choque inelástico)',
        'formula' => '$$Ec_1+Ec_2 =Ec\'_1+Ec\'_2 +W\\\\\\frac{1}2.m_1.V_1^2+\\frac{1}2.m_2.V_2^2=\\frac{1}2.m_1.U_1^2+\\frac{1}2.m_1.U_2^2+W$$',
        'detalle' => 'Conservación de energía en colisiones inelásticas.',
        'indice' => 0,
        'tema_id' => 84,
        'created_at' => '2023-08-02 16:20:50',
        'updated_at' => '2023-08-02 16:20:50'
    ],
    [
        'id' => 572,
        'nombre' => 'Óxidos No metálicos o Anhidridos',
        'formula' => '$$Nm^+O^{-2}\\\\NoMetal+O_2\\leftrightarrows Nm^+O^{-2}$$',
        'detalle' => 'Óxidos formados por no metales y oxígeno.',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-02 19:37:16',
        'updated_at' => '2023-08-02 19:39:10'
    ],
    [
        'id' => 573,
        'nombre' => 'Hidróxidos',
        'formula' => '$$M^+(OH)^{-1}\\\\OxidoMetálico+H_2O\\leftrightarrows M^+(OH)^{-1}$$',
        'detalle' => 'Compuestos con metal unido al grupo hidroxilo (OH⁻).',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-02 19:40:47',
        'updated_at' => '2023-08-02 19:42:13'
    ],
    [
        'id' => 574,
        'nombre' => 'Hidruros Metálicos',
        'formula' => '$$M^+H^{-1}\\\\Metal+H_2\\leftrightarrows M^+ H^{-1}$$',
        'detalle' => 'Combinación de hidrógeno (-1) con metales.',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-02 19:44:35',
        'updated_at' => '2023-08-02 19:47:38'
    ],
    [
        'id' => 575,
        'nombre' => 'Hidruros No Metálicos',
        'formula' => '$$Nm^-H^{+1}\\\\NoMetal+H_2\\leftrightarrows Nm^-H^{+1}$$',
        'detalle' => 'Combinación de hidrógeno con no metales de grupos IIIA-VA.',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-02 19:47:22',
        'updated_at' => '2023-08-02 19:47:22'
    ],
    [
        'id' => 576,
        'nombre' => 'Ácidos Hidrácidos',
        'formula' => '$$H^{+1}Nm^-\\\\H_2+NoMetal\\leftrightarrows H^{+1}Nm^-$$',
        'detalle' => 'Ácidos con hidrógeno unido a halógenos o calcógenos.',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-02 19:50:04',
        'updated_at' => '2023-08-02 19:50:04'
    ],
    [
        'id' => 577,
        'nombre' => 'Ácidos Oxácidos',
        'formula' => '$$H^{+1}Nm^+O^{-2}\\\\Anhidrido+H_2O\\leftrightarrows H^{+1}Nm^+O^{-2}$$',
        'detalle' => 'Ácidos con hidrógeno, no metal y oxígeno (derivados de óxidos).',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-02 19:52:39',
        'updated_at' => '2023-08-02 19:52:39'
    ],
    [
        'id' => 578,
        'nombre' => 'Ácidos Oxácidos Casos Especiales',
        'formula' => '$$Meta:H^{+1}Nm^+O^{-2}\\\\Piro: H{^{+1}_4}Nm{^{+}_2}O^{-2}\\\\Orto:H{^{+1}_{3,4}}Nm^{+}O^{-2}$$',
        'detalle' => 'Formas especiales de ácidos oxácidos (meta, piro, orto).',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-02 20:01:37',
        'updated_at' => '2023-08-02 20:01:37'
    ],
    [
        'id' => 579,
        'nombre' => 'Sal Binaria',
        'formula' => '$$M^{+}Nm^-$$',
        'detalle' => 'Compuestos formados por metal y no metal.',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-02 22:18:21',
        'updated_at' => '2023-08-02 22:18:21'
    ],
    [
        'id' => 580,
        'nombre' => 'Oxisal',
        'formula' => '$$M^{+}Nm^+O^{-2}$$',
        'detalle' => 'Sales con metal, no metal y oxígeno.',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-02 22:21:35',
        'updated_at' => '2023-08-02 22:21:35'
    ],
    [
        'id' => 581,
        'nombre' => 'Sal Binaria Acida',
        'formula' => '$$M^+H^{+1}Nm^-$$',
        'detalle' => 'Sales binarias con hidrógeno ácido.',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-02 22:25:15',
        'updated_at' => '2023-08-02 22:25:15'
    ],
    [
        'id' => 582,
        'nombre' => 'Oxisal Acida',
        'formula' => '$$M^+H^{+1}Nm^-O^{-2}$$',
        'detalle' => 'Oxisales con hidrógeno ácido.',
        'indice' => 0,
        'tema_id' => 95,
        'created_at' => '2023-08-02 22:27:49',
        'updated_at' => '2023-08-02 22:27:49'
    ],
    [
        'id' => 583,
        'nombre' => 'Coeficiente de restitución',
        'formula' => '$$e=\\frac{U_2-U_1}{V_1-V_2}\\:\\:\\:;\\\\e=1 \\:\\:choque\\:completamente\\:elástico\\\\e=0\\:\\:choque\\:completamente\\:inelástico\\\\0<e<1\\:\\:choque\\:inelástico$$',
        'detalle' => 'Medida de elasticidad en colisiones.',
        'indice' => 0,
        'tema_id' => 84,
        'created_at' => '2023-08-03 01:27:11',
        'updated_at' => '2023-08-04 16:10:37'
    ],
    [
        'id' => 584,
        'nombre' => 'Factorial',
        'formula' => '$$n! =n·(n-1)·(n-2)·(n-4)...4·3·2·1$$',
        'detalle' => 'Producto de todos los enteros positivos hasta n.',
        'indice' => 0,
        'tema_id' => 43,
        'created_at' => '2023-08-03 17:13:17',
        'updated_at' => '2023-08-03 17:13:17'
    ],
    [
        'id' => 585,
        'nombre' => 'Permutación simple',
        'formula' => '$$P_n =n!$$',
        'detalle' => 'Arreglos ordenados de n objetos distintos.',
        'indice' => 0,
        'tema_id' => 43,
        'created_at' => '2023-08-03 17:19:54',
        'updated_at' => '2023-08-04 00:20:36'
    ],
    [
        'id' => 586,
        'nombre' => 'Permutaciones circulares',
        'formula' => '$$P_{n-1} =(n-1)!$$',
        'detalle' => 'Arreglos circulares de n objetos.',
        'indice' => 0,
        'tema_id' => 43,
        'created_at' => '2023-08-03 17:21:29',
        'updated_at' => '2023-08-04 00:34:36'
    ],
    [
        'id' => 587,
        'nombre' => 'Alcanos',
        'formula' => '$$C_nH_{2n+2}\\\\CH_3-CH_2-CH_2-$$',
        'detalle' => 'Hidrocarburos saturados (parafinas).',
        'indice' => 0,
        'tema_id' => 97,
        'created_at' => '2023-08-03 19:21:54',
        'updated_at' => '2023-08-04 22:33:24'
    ],
    [
        'id' => 588,
        'nombre' => 'Alquenos',
        'formula' => '$$C_nH_{2n}\\\\CH_3-CH=CH-CH_2-$$',
        'detalle' => 'Hidrocarburos con dobles enlaces (olefinas).',
        'indice' => 0,
        'tema_id' => 97,
        'created_at' => '2023-08-03 19:23:34',
        'updated_at' => '2023-08-04 22:33:48'
    ],
    [
        'id' => 589,
        'nombre' => 'Alquinos',
        'formula' => '$$C_nH_{2n-2}\\\\CH\\equiv C-C\\equiv CH$$',
        'detalle' => 'Hidrocarburos con triples enlaces (acetilénicos).',
        'indice' => 0,
        'tema_id' => 97,
        'created_at' => '2023-08-03 19:38:36',
        'updated_at' => '2023-08-04 22:34:10'
    ],
    [
        'id' => 590,
        'nombre' => 'Permutaciones con repetición',
        'formula' => '$$Sea\\:el\\:arreglo:\\:\\:a,a,a...a,b,b,b..b,c,c,c...c\\\\n_1=veces\\:de\\:\'\'a\'\'\\\\n_2=veces\\:de\\:\'\'b\'\'\\\\n_3=veces\\:de \\:\'\'c\'\'\\\\n=n_1+n_2+n_3\\\\P_n^{n_1,n_2,n_3 }=\\frac{n!}{n_1!n_2!n_3!}$$',
        'detalle' => 'Arreglos con objetos repetidos.',
        'indice' => 0,
        'tema_id' => 43,
        'created_at' => '2023-08-03 19:55:47',
        'updated_at' => '2023-08-04 00:35:11'
    ],
    [
        'id' => 591,
        'nombre' => 'Variaciones simples',
        'formula' => '$$V_{n,r}=\\frac{n!}{(n-r)!}$$',
        'detalle' => 'Arreglos ordenados de r objetos tomados de n.',
        'indice' => 0,
        'tema_id' => 43,
        'created_at' => '2023-08-03 23:56:48',
        'updated_at' => '2023-08-04 00:42:48'
    ],
    [
        'id' => 592,
        'nombre' => 'Variaciones con repetición',
        'formula' => '$$Vr=n^r$$',
        'detalle' => 'Arreglos con repetición permitida.',
        'indice' => 0,
        'tema_id' => 43,
        'created_at' => '2023-08-03 23:59:27',
        'updated_at' => '2023-08-04 00:46:09'
    ],
    [
        'id' => 593,
        'nombre' => 'Combinaciones simples',
        'formula' => '$$C_{n,r}=\\begin{pmatrix}n\\\\ r\\end{pmatrix}=\\frac{n!}{r!\\left(n-r\\right)!}$$',
        'detalle' => 'Subconjuntos de r elementos de n objetos.',
        'indice' => 0,
        'tema_id' => 43,
        'created_at' => '2023-08-04 00:06:55',
        'updated_at' => '2023-08-04 00:33:17'
    ],
    [
        'id' => 594,
        'nombre' => 'Combinaciones con repetición',
        'formula' => '$$Cr=\\begin{pmatrix}n+r-1\\\\ r\\end{pmatrix}=\\frac{(n+r-1)!}{(n-1)!r!}$$',
        'detalle' => 'Subconjuntos con repetición permitida.',
        'indice' => 0,
        'tema_id' => 43,
        'created_at' => '2023-08-04 00:15:25',
        'updated_at' => '2023-08-04 00:54:45'
    ],
    [
        'id' => 597,
        'nombre' => 'Trabajo realizado por un resorte',
        'formula' => '$$E_r=\\frac{1}2·k·x^2$$',
        'detalle' => 'Energía potencial elástica en resortes.',
        'indice' => 0,
        'tema_id' => 85,
        'created_at' => '2023-08-04 02:03:35',
        'updated_at' => '2023-08-04 16:25:15'
    ],
    [
        'id' => 598,
        'nombre' => 'Si el existe rozamiento:',
        'formula' => '$$E_{m_o}=E_{m_f}+W_{fr}\\\\E_{c_o}+E_{p_o}=E_{c_f}+E_{p_f}+W_{fr}\\\\\\frac{1}{2}mV_o^2+mgh_o=\\frac{1}2mV_f^2+mgh_f+W_{fr}$$',
        'detalle' => 'Conservación de energía con fricción.',
        'indice' => 0,
        'tema_id' => 83,
        'created_at' => '2023-08-04 16:35:02',
        'updated_at' => '2023-08-04 16:36:54'
    ],
    [
        'id' => 599,
        'nombre' => 'ALCOHOLES',
        'formula' => '$$Cn H_{2n+1}(OH)\\\\CH_3-CH_2-CH_2OH$$',
        'detalle' => 'Compuestos con grupo hidroxilo (-OH).',
        'indice' => 0,
        'tema_id' => 97,
        'created_at' => '2023-08-04 19:02:31',
        'updated_at' => '2023-08-04 22:35:48'
    ],
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 600,
        'nombre' => 'Aldehídos',
        'formula' => '$$R–CHO\\\\C-C-CHO$$',
        'detalle' => 'Compuestos con grupo funcional carbonilo (-CHO).',
        'indice' => 0,
        'tema_id' => 97,
        'created_at' => '2023-08-04 22:44:45',
        'updated_at' => '2023-08-04 23:19:22'
    ],
    [
        'id' => 601,
        'nombre' => 'Éter',
        'formula' => '$$R-O-R´$$',
        'detalle' => 'Compuestos con puente de oxígeno entre radicales.',
        'indice' => 0,
        'tema_id' => 97,
        'created_at' => '2023-08-05 16:15:59',
        'updated_at' => '2023-08-05 16:15:59'
    ],
    [
        'id' => 602,
        'nombre' => 'Cetona',
        'formula' => '$$R-CO-R´$$',
        'detalle' => 'Compuestos con grupo carbonilo central (-CO-).',
        'indice' => 0,
        'tema_id' => 97,
        'created_at' => '2023-08-05 16:19:17',
        'updated_at' => '2023-08-05 16:19:17'
    ],
    [
        'id' => 603,
        'nombre' => 'Ácidos Carboxílicos',
        'formula' => '$$R-COOH\\\\C-C-COOH$$',
        'detalle' => 'Compuestos con grupo carboxilo (-COOH).',
        'indice' => 0,
        'tema_id' => 97,
        'created_at' => '2023-08-05 16:22:14',
        'updated_at' => '2023-08-05 16:22:14'
    ],
    [
        'id' => 604,
        'nombre' => 'Ésteres',
        'formula' => '$$R-CO-OR´$$',
        'detalle' => 'Derivados de ácidos carboxílicos y alcoholes.',
        'indice' => 0,
        'tema_id' => 97,
        'created_at' => '2023-08-05 16:51:04',
        'updated_at' => '2023-08-05 16:51:04'
    ],
    [
        'id' => 605,
        'nombre' => 'Benceno y sus derivados',
        'formula' => '$$Benceno:C_6H_6\\\\Acido\\:Benzoico:C_6H_6-COOH\\\\Acido\\:bencelsulfónico:C_6H_6-SO_3\\\\Fenol: C_6H_6-OH\\\\Tolueno:C_6H_6-CH_3\\\\Anilla:C_6H_6-NH_2\\\\Nitro:C_6H_6-NO_2\\\\Halógenos:C_6H_6-(Cl-Br)$$',
        'detalle' => 'Derivados del benceno con diferentes sustituyentes.',
        'indice' => 0,
        'tema_id' => 97,
        'created_at' => '2023-08-05 16:55:49',
        'updated_at' => '2023-08-05 17:12:16'
    ],
    [
        'id' => 606,
        'nombre' => 'Amina',
        'formula' => '$$R-NH_2\\\\R-NH-R$$',
        'detalle' => 'Derivados orgánicos del amoníaco.',
        'indice' => 0,
        'tema_id' => 97,
        'created_at' => '2023-08-05 17:01:44',
        'updated_at' => '2023-08-05 17:01:44'
    ],
    [
        'id' => 607,
        'nombre' => 'Amida',
        'formula' => '$$R-NH-CO-R´$$',
        'detalle' => 'Compuestos con grupo funcional amida (-CONH2).',
        'indice' => 0,
        'tema_id' => 97,
        'created_at' => '2023-08-05 17:04:32',
        'updated_at' => '2023-08-05 17:04:32'
    ],
    [
        'id' => 608,
        'nombre' => 'Relación Directa',
        'formula' => '$$\\frac{a}{b}=\\frac{c}{d}\\:es\\:igual\\:(a*d)=(b*c)$$',
        'detalle' => 'Propiedad fundamental de proporciones.',
        'indice' => 0,
        'tema_id' => 32,
        'created_at' => '2023-08-05 19:28:54',
        'updated_at' => '2023-08-05 19:28:54'
    ],
    [
        'id' => 609,
        'nombre' => 'Solubilidad',
        'formula' => '$$S=\\frac{g\\:de\\:soluto}{100g\\:H_2O}$$',
        'detalle' => 'Máxima cantidad de soluto disuelto en solvente.',
        'indice' => 0,
        'tema_id' => 98,
        'created_at' => '2023-08-05 19:36:49',
        'updated_at' => '2023-08-05 19:36:49'
    ],
    [
        'id' => 610,
        'nombre' => 'Porcentaje peso peso %P/P',
        'formula' => '$$\\%𝑃/𝑃=\\frac{𝑚_{soluto}}{𝑚_{solución}} ∗100\\\\𝑚_{soluto}=\\frac{\\%𝑃/𝑃*𝑚_{solución}}{100}\\\\𝑚_{solución}=\\frac{𝑚_{soluto}*100}{\\%𝑃/𝑃}$$',
        'detalle' => 'Concentración expresada en masa de soluto por masa de solución.',
        'indice' => 0,
        'tema_id' => 98,
        'created_at' => '2023-08-05 20:02:09',
        'updated_at' => '2023-08-05 20:02:09'
    ],
    [
        'id' => 611,
        'nombre' => 'Porcentaje volumen/volumen %V/V',
        'formula' => '$$\\%V/V=\\frac{𝑚l_{soluto}}{𝑚l_{solución}} ∗100\\\\𝑚l_{soluto}=\\frac{\\%V/V*𝑚l_{solución}}{100}\\\\𝑚l_{solución}=\\frac{𝑚l_{soluto}*100}{\\%V/V}$$',
        'detalle' => 'Concentración expresada en volumen de soluto por volumen de solución.',
        'indice' => 0,
        'tema_id' => 98,
        'created_at' => '2023-08-09 18:49:45',
        'updated_at' => '2023-08-09 18:49:45'
    ],
    [
        'id' => 612,
        'nombre' => 'Porcentaje volumen/volumen %P/V',
        'formula' => '$$\\%P/V=\\frac{𝑚_{soluto}}{𝑚l_{solución}} ∗100\\\\𝑚_{soluto}=\\frac{\\%P/V*𝑚l_{solución}}{100}\\\\𝑚l_{solución}=\\frac{𝑚_{soluto}*100}{\\%P/V}$$',
        'detalle' => 'Concentración expresada en masa de soluto por volumen de solución.',
        'indice' => 0,
        'tema_id' => 98,
        'created_at' => '2023-08-09 18:52:24',
        'updated_at' => '2023-08-09 18:52:24'
    ],
    [
        'id' => 613,
        'nombre' => 'Partes por millón ppm',
        'formula' => '$$ppm=\\frac{𝑚g_{soluto}}{L_{solución}}\\\\ppm=\\frac{𝑚g_{soluto}}{Kg_{solución}}\\\\ppm=\\frac{g_{soluto}}{m^3_{solución}}$$',
        'detalle' => 'Unidades de concentración muy pequeñas.',
        'indice' => 0,
        'tema_id' => 98,
        'created_at' => '2023-08-09 18:57:57',
        'updated_at' => '2023-08-09 18:57:57'
    ],
    [
        'id' => 614,
        'nombre' => 'Concentración de Neutralidad y Dilución',
        'formula' => '$$C_1*V_1=C_2*V_2$$',
        'detalle' => 'Ley de dilución de soluciones.',
        'indice' => 0,
        'tema_id' => 98,
        'created_at' => '2023-08-09 19:03:06',
        'updated_at' => '2023-08-09 19:03:06'
    ],
    [
        'id' => 615,
        'nombre' => 'Capacidad eléctrica',
        'formula' => '$$C=\\frac{Q}{V}$$',
        'detalle' => 'Relación entre carga almacenada y diferencia de potencial.',
        'indice' => 0,
        'tema_id' => 66,
        'created_at' => '2023-08-09 23:51:56',
        'updated_at' => '2023-08-09 23:51:56'
    ],
    [
        'id' => 616,
        'nombre' => 'Capacidad de un dieléctrico plano',
        'formula' => '$$C=\\epsilon _o· \\frac{A}{d}$$',
        'detalle' => 'Capacitancia para condensadores planos.',
        'indice' => 0,
        'tema_id' => 66,
        'created_at' => '2023-08-09 23:55:25',
        'updated_at' => '2023-08-09 23:55:25'
    ],
    [
        'id' => 617,
        'nombre' => 'Masa del Cuerpo',
        'formula' => '$$m=\\frac{Ep}{gh} m=\\frac{2Ec}{V^2}$$',
        'detalle' => 'Cálculo de masa usando energía potencial o cinética.',
        'indice' => 0,
        'tema_id' => 85,
        'created_at' => '2023-08-10 01:10:28',
        'updated_at' => '2023-08-10 01:16:48'
    ],
    [
        'id' => 618,
        'nombre' => 'Rapidez del Cuerpo',
        'formula' => '$$V=\\sqrt{\\frac{2Ec}{m}}$$',
        'detalle' => 'Cálculo de velocidad usando energía cinética.',
        'indice' => 0,
        'tema_id' => 85,
        'created_at' => '2023-08-10 01:24:45',
        'updated_at' => '2023-08-10 01:24:45'
    ],
    [
        'id' => 619,
        'nombre' => 'Altura',
        'formula' => '$$h=\\frac{Ep}{mg}$$',
        'detalle' => 'Cálculo de altura usando energía potencial.',
        'indice' => 0,
        'tema_id' => 85,
        'created_at' => '2023-08-10 01:29:53',
        'updated_at' => '2023-08-10 01:29:53'
    ],
    [
        'id' => 620,
        'nombre' => 'Raíz Cuadrada',
        'formula' => '$$\\sqrt[2]{a^2}=a$$',
        'detalle' => 'Operación inversa al cuadrado.',
        'indice' => 0,
        'tema_id' => 49,
        'created_at' => '2023-08-10 01:58:22',
        'updated_at' => '2023-08-10 01:58:22'
    ],
    [
        'id' => 621,
        'nombre' => 'Raiz Cubica',
        'formula' => '$$\\sqrt[3]{a^3}=a$$',
        'detalle' => 'Operación inversa al cubo.',
        'indice' => 0,
        'tema_id' => 49,
        'created_at' => '2023-08-10 02:04:48',
        'updated_at' => '2023-08-10 02:04:48'
    ],
    [
        'id' => 622,
        'nombre' => 'CONSTANTE DE EQUILIBRIO. LEY DE ACCIÓN DE MASAS.',
        'formula' => '$$aA+bB\\longleftrightarrow cC+dD\\\\K_c=\\frac{[C]^c\\cdot[D]^d}{[A]^a\\cdot[B]^b}$$',
        'detalle' => 'Expresión matemática del equilibrio químico.',
        'indice' => 0,
        'tema_id' => 99,
        'created_at' => '2023-08-10 16:33:06',
        'updated_at' => '2023-08-10 16:33:06'
    ],
    [
        'id' => 623,
        'nombre' => 'Otras expresiones de la constante de equilibrio',
        'formula' => '$$aA\\longleftrightarrow bB\\\\K_p=\\frac{(P_B)^b}{(P_A)^a}\\\\K_p=K_c(RT)^{\\triangle n}\\\\\\triangle n=(\\sum n_{Productos}-\\sum n_{Reactivos})$$',
        'detalle' => 'Constantes de equilibrio en función de presiones parciales.',
        'indice' => 0,
        'tema_id' => 99,
        'created_at' => '2023-08-10 17:45:41',
        'updated_at' => '2023-08-10 18:44:19'
    ],
    [
        'id' => 624,
        'nombre' => 'Variación del equilibrio con las concentraciones',
        'formula' => '$$aA\\longleftrightarrow bB\\\\K_c=\\frac{[B]^b}{[A]^a}$$',
        'detalle' => 'Relación entre concentraciones en equilibrio.',
        'indice' => 0,
        'tema_id' => 99,
        'created_at' => '2023-08-10 18:46:26',
        'updated_at' => '2023-08-10 18:46:26'
    ],
    [
        'id' => 625,
        'nombre' => 'Constante de equilibrio de un Ácido',
        'formula' => '$$HA\\longleftrightarrow H^++A^-\\\\K_a=\\frac{[H^+][A^-]}{[HA]}$$',
        'detalle' => 'Constante de disociación ácida.',
        'indice' => 0,
        'tema_id' => 99,
        'created_at' => '2023-08-10 18:54:18',
        'updated_at' => '2023-08-10 18:54:18'
    ],
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 626,
        'nombre' => 'Constante de equilibrio de una Base',
        'formula' => '$$BOH\\longleftrightarrow B^++OH^-\\\\K_b=\\frac{[B^+][OH^-]}{[BOH]}$$',
        'detalle' => 'Constante de disociación básica.',
        'indice' => 0,
        'tema_id' => 99,
        'created_at' => '2023-08-10 18:55:33',
        'updated_at' => '2023-08-10 18:55:33'
    ],
    [
        'id' => 627,
        'nombre' => 'Producto iónico del Agua',
        'formula' => '$$K_w=[H^+]\\cdot[OH^-]=1*10^{-14}$$',
        'detalle' => 'Constante de autoionización del agua.',
        'indice' => 0,
        'tema_id' => 99,
        'created_at' => '2023-08-10 18:58:57',
        'updated_at' => '2023-08-10 18:58:57'
    ],
    [
        'id' => 628,
        'nombre' => 'Potencial de hidrogeno pH',
        'formula' => '$$pH=-log[H^+]$$',
        'detalle' => 'Medida de acidez en soluciones acuosas.',
        'indice' => 0,
        'tema_id' => 99,
        'created_at' => '2023-08-10 19:02:26',
        'updated_at' => '2023-08-10 19:02:26'
    ],
    [
        'id' => 629,
        'nombre' => 'Potencial de oxhidrilo pOH',
        'formula' => '$$pOH=-log[OH^-]$$',
        'detalle' => 'Medida de basicidad en soluciones acuosas.',
        'indice' => 0,
        'tema_id' => 99,
        'created_at' => '2023-08-10 19:03:22',
        'updated_at' => '2023-08-10 19:03:22'
    ],
    [
        'id' => 630,
        'nombre' => 'Suma de pH y pOH',
        'formula' => '$$pH+pOH=14$$',
        'detalle' => 'Relación fundamental en soluciones acuosas.',
        'indice' => 0,
        'tema_id' => 99,
        'created_at' => '2023-08-10 19:03:58',
        'updated_at' => '2023-08-10 19:03:58'
    ],
    [
        'id' => 631,
        'nombre' => 'pH en función de su pK',
        'formula' => '$$pH=pK+log\\frac{C_0\\cdot\\alpha}{C_0\\cdot(1-\\alpha)}\\\\pH=pK_a+log\\frac{[SAL]}{[ÁCIDO]}\\\\a=Cf$$',
        'detalle' => 'Ecuación de Henderson-Hasselbalch para buffers.',
        'indice' => 0,
        'tema_id' => 99,
        'created_at' => '2023-08-15 17:46:08',
        'updated_at' => '2023-08-15 17:46:08'
    ],
    [
        'id' => 632,
        'nombre' => 'Sal que deriva de un Acido debil y una Base fuerte',
        'formula' => '$$K_h=\\frac{[BASE][ÁCIDO]}{[SAL\\:NO\\:HIDROLIZADA]}\\\\K_h=\\frac{X^2}{(1-X)V}\\\\K_h=\\frac{CX^2}{1-X}\\\\K_h=\\frac{K_w}{K_a}\\\\ [H^+]=\\sqrt{\\frac{K_w\\cdot K_a}{C}}$$',
        'detalle' => 'Hidrólisis de sales de ácido débil y base fuerte.',
        'indice' => 0,
        'tema_id' => 99,
        'created_at' => '2023-08-15 17:54:02',
        'updated_at' => '2023-08-15 17:54:02'
    ],
    [
        'id' => 633,
        'nombre' => 'Sal que deriva de un Acido fuerte y una Base debil',
        'formula' => '$$K_h=\\frac{[BASE][ÁCIDO]}{[SAL\\:NO\\:HIDROLIZADA]}\\\\K_h=\\frac{X^2}{(1-X)V}\\\\K_h=\\frac{CX^2}{1-X}\\\\K_h=\\frac{K_w}{K_b}\\\\ [H^+]=\\sqrt{\\frac{CK_w}{K_b}}$$',
        'detalle' => 'Hidrólisis de sales de ácido fuerte y base débil.',
        'indice' => 0,
        'tema_id' => 99,
        'created_at' => '2023-08-15 18:37:46',
        'updated_at' => '2023-08-15 18:37:46'
    ],
    [
        'id' => 634,
        'nombre' => 'Sal que deriva de un Acido debil y una Base debil',
        'formula' => '$$K_h=\\frac{[BASE][ÁCIDO]}{[SAL\\:NO\\:HIDROLIZADA]}\\\\K_h=\\frac{X^2}{(1-X)V}\\\\K_h=\\frac{K_w}{K_aK_b}\\\\ [H^+]=\\sqrt{\\frac{K_w\\cdot K_a}{K_b}}$$',
        'detalle' => 'Hidrólisis de sales de ácido débil y base débil.',
        'indice' => 0,
        'tema_id' => 99,
        'created_at' => '2023-08-15 18:39:49',
        'updated_at' => '2023-08-15 18:39:49'
    ],
    [
        'id' => 635,
        'nombre' => 'Solubilidad General',
        'formula' => '$$\\frac{S-S_1}{S_2-S_1}\\:=\\frac{T-T_1}{T_2-T_1}$$',
        'detalle' => 'Interpolación para calcular solubilidad a temperatura intermedia.',
        'indice' => 0,
        'tema_id' => 98,
        'created_at' => '2023-08-15 20:00:09',
        'updated_at' => '2023-08-15 20:00:09'
    ],
    [
        'id' => 643,
        'nombre' => 'Descuento Simple',
        'formula' => '$$D=M\\cdot d\\cdot n\\\\D=\\frac{C_o\\cdot d\\cdot n}{1-d\\cdot n}$$',
        'detalle' => 'Cálculo del descuento comercial simple.',
        'indice' => 0,
        'tema_id' => 100,
        'created_at' => '2023-09-07 22:29:51',
        'updated_at' => '2023-09-07 22:29:51'
    ],
    [
        'id' => 644,
        'nombre' => 'Tasa de descuento',
        'formula' => '$$d=\\frac{1-\\frac{C_o}{M}}{n}\\\\d=\\frac{r}{1+r\\cdot n}$$',
        'detalle' => 'Cálculo de la tasa de descuento comercial.',
        'indice' => 0,
        'tema_id' => 100,
        'created_at' => '2023-09-07 22:31:00',
        'updated_at' => '2023-09-08 15:56:48'
    ],
    [
        'id' => 645,
        'nombre' => 'Tasa de plazo de descuento',
        'formula' => '$$n=\\frac{1-\\frac{C_o}{M}}{d}$$',
        'detalle' => 'Cálculo del plazo en descuento comercial.',
        'indice' => 0,
        'tema_id' => 100,
        'created_at' => '2023-09-07 22:32:26',
        'updated_at' => '2023-09-07 22:32:26'
    ],
    [
        'id' => 646,
        'nombre' => 'Valor comercial',
        'formula' => '$$C_o=M\\cdot D\\\\C_o=M-M\\cdot d\\cdot n\\\\C_o=M(1- d\\cdot n)$$',
        'detalle' => 'Cálculo del valor actual en descuento comercial.',
        'indice' => 0,
        'tema_id' => 100,
        'created_at' => '2023-09-07 22:38:50',
        'updated_at' => '2023-09-07 22:38:50'
    ],
    [
        'id' => 647,
        'nombre' => 'Tasa Nominal (J) a partir de la Tasa Efectiva Anual (e)',
        'formula' => '$$J=[(1+e)^{\\frac{1}{m}}-1]\\cdot m$$',
        'detalle' => 'Conversión entre tasas nominal y efectiva.',
        'indice' => 0,
        'tema_id' => 100,
        'created_at' => '2023-09-08 15:54:24',
        'updated_at' => '2023-09-08 15:54:24'
    ],
    [
        'id' => 648,
        'nombre' => 'Descuento Real',
        'formula' => '$$D_r=M-\\frac{M}{1+i\\cdot n}$$',
        'detalle' => 'Cálculo del descuento racional o matemático.',
        'indice' => 0,
        'tema_id' => 100,
        'created_at' => '2023-09-08 15:55:07',
        'updated_at' => '2023-09-08 15:55:07'
    ],
    [
        'id' => 649,
        'nombre' => 'Tasa de Rendimiento',
        'formula' => '$$r=\\frac{d}{1-d\\cdot n}$$',
        'detalle' => 'Relación entre tasa de descuento y rendimiento.',
        'indice' => 0,
        'tema_id' => 100,
        'created_at' => '2023-09-08 15:57:28',
        'updated_at' => '2023-09-08 15:57:28'
    ],
    [
        'id' => 650,
        'nombre' => 'Monto futuro',
        'formula' => '$$M=C(1+i)^n$$',
        'detalle' => 'Cálculo de valor futuro con interés compuesto.',
        'indice' => 0,
        'tema_id' => 101,
        'created_at' => '2023-09-08 15:59:54',
        'updated_at' => '2023-09-08 15:59:54'
    ],
    /**$$$$$$$$$$$$$$$$$$$ */
    [
        'id' => 651,
        'nombre' => 'Tasa por Periodo de Capitalizacion',
        'formula' => '$$i=\\frac{J}{m}$$',
        'detalle' => 'Cálculo de tasa por periodo en interés compuesto.',
        'indice' => 0,
        'tema_id' => 101,
        'created_at' => '2023-09-08 16:00:37',
        'updated_at' => '2023-09-08 16:00:37'
    ],
    [
        'id' => 652,
        'nombre' => 'Numero de Periodos de Capitalizacion',
        'formula' => '$$n=n_a\\cdot m$$',
        'detalle' => 'Cálculo del número total de periodos de capitalización.',
        'indice' => 0,
        'tema_id' => 101,
        'created_at' => '2023-09-08 16:01:05',
        'updated_at' => '2023-09-08 16:01:05'
    ],
    [
        'id' => 653,
        'nombre' => 'Tasa de Interes',
        'formula' => '$$i=(\\frac{M}{C})^{m\\cdot n}-1$$',
        'detalle' => 'Cálculo de la tasa de interés en función del monto y capital.',
        'indice' => 0,
        'tema_id' => 101,
        'created_at' => '2023-09-08 16:02:14',
        'updated_at' => '2023-09-08 16:02:14'
    ],
    [
        'id' => 654,
        'nombre' => 'Capital',
        'formula' => '$$C=\\frac{M}{(1+i)^n}\\\\C=M(1+i)^{-n}C=\\frac{I}{(1+i)^n-1}$$',
        'detalle' => 'Fórmulas para calcular el capital inicial en interés compuesto.',
        'indice' => 0,
        'tema_id' => 101,
        'created_at' => '2023-09-08 19:44:13',
        'updated_at' => '2023-09-08 19:44:13'
    ],
    [
        'id' => 655,
        'nombre' => 'Tiempo',
        'formula' => '$$n=\\frac{log(\\frac{M}{C})}{log(1+i)}$$',
        'detalle' => 'Cálculo del tiempo necesario en interés compuesto.',
        'indice' => 0,
        'tema_id' => 101,
        'created_at' => '2023-09-08 19:46:55',
        'updated_at' => '2023-09-08 19:46:55'
    ],
    [
        'id' => 656,
        'nombre' => 'Tasa de Interés de un Interés Compuesto',
        'formula' => '$$J=\\left[\\sqrt[n]{\\frac{M}{C}-1}\\right]\\cdot \\:m$$',
        'detalle' => 'Cálculo de la tasa nominal en interés compuesto.',
        'indice' => 0,
        'tema_id' => 101,
        'created_at' => '2023-09-08 19:49:38',
        'updated_at' => '2023-09-08 19:49:38'
    ],
    [
        'id' => 657,
        'nombre' => 'Monto de interés de un Interés Compuesto',
        'formula' => '$$I=C\\left[(1+i)^n-1\\right]$$',
        'detalle' => 'Cálculo del interés generado en interés compuesto.',
        'indice' => 0,
        'tema_id' => 101,
        'created_at' => '2023-09-08 19:52:18',
        'updated_at' => '2023-09-08 19:52:18'
    ],
    [
        'id' => 658,
        'nombre' => 'Tasa Nominal (J) a partir de la Tasa Efectiva Anual (e)',
        'formula' => '$$J=[(1+e)^{\\frac{1}{m}}-1]\\cdot m$$',
        'detalle' => 'Conversión entre tasas nominal y efectiva en interés compuesto.',
        'indice' => 0,
        'tema_id' => 101,
        'created_at' => '2023-09-08 19:53:29',
        'updated_at' => '2023-09-08 19:53:29'
    ],
    [
        'id' => 659,
        'nombre' => 'Monto cuando la Capitalización es continua',
        'formula' => '$$M=C\\cdot e^{i\\cdot t}$$',
        'detalle' => 'Fórmula para capitalización continua.',
        'indice' => 0,
        'tema_id' => 101,
        'created_at' => '2023-09-08 19:54:42',
        'updated_at' => '2023-09-08 19:54:42'
    ],
    [
        'id' => 660,
        'nombre' => 'Tasa Efectiva Anual(e) a partir de la Tasa Nominal',
        'formula' => '$$e=(1+\\frac{J}{m})^m-1$$',
        'detalle' => 'Conversión de tasa nominal a efectiva anual.',
        'indice' => 0,
        'tema_id' => 101,
        'created_at' => '2023-09-08 19:55:46',
        'updated_at' => '2023-09-08 19:55:46'
    ],
    [
        'id' => 661,
        'nombre' => 'Función Constante',
        'formula' => '$$y=f(x)= a\\:\\:;\\:\\:si \\:\\:a\\in\\:\\:\\Re\\\\Df:\\Re\\:\\:\\:;\\:\\:DI:\\{a\\}$$',
        'detalle' => 'Función que siempre devuelve el mismo valor.',
        'indice' => 0,
        'tema_id' => 47,
        'created_at' => '2023-11-14 19:08:30',
        'updated_at' => '2023-11-25 17:48:38'
    ],
    [
        'id' => 662,
        'nombre' => 'Función Lineal',
        'formula' => '$$y=f(x)=mx+b\\\\Df:\\Re\\:\\:\\:;\\:\\:\\:DI:\\Re$$',
        'detalle' => 'Función polinómica de primer grado.',
        'indice' => 0,
        'tema_id' => 47,
        'created_at' => '2023-11-14 19:16:11',
        'updated_at' => '2023-11-25 17:49:03'
    ],
    [
        'id' => 663,
        'nombre' => 'Función Cuadrática',
        'formula' => '$$f\\left(x\\right)=ax^2+bx+c\\:\\:\\\\h=\\frac{-b}{2a}\\:\\:\\:;\\:\\:k=f\\left(h\\right)\\:\\:;Df:\\Re\\:\\:\\:\\\\si\\:\\:\\:a<0\\Longrightarrow\\:DI:]-\\propto;k]\\\\si\\:\\:a>0\\Longrightarrow\\:DI:[k;+\\propto[$$',
        'detalle' => 'Función polinómica de segundo grado.',
        'indice' => 0,
        'tema_id' => 47,
        'created_at' => '2023-11-14 19:20:25',
        'updated_at' => '2023-11-25 17:47:46'
    ],
    [
        'id' => 664,
        'nombre' => 'Función Racional',
        'formula' => '$$f\\left(x\\right)=\\frac{h\\left(x\\right)}{g\\left(x\\right)}\\:\\:$$',
        'detalle' => 'Función definida como cociente de polinomios.',
        'indice' => 0,
        'tema_id' => 47,
        'created_at' => '2023-11-20 20:51:50',
        'updated_at' => '2023-11-20 20:51:50'
    ],
    [
        'id' => 665,
        'nombre' => 'Definición de un logaritmo',
        'formula' => '$$log_a b=c\\:\\:\\Longrightarrow\\:b=a^c\\\\\\forall\\:a,b\\:\\in\\:\\Re^+\\:\\wedge\\:a\\neq1$$',
        'detalle' => 'Definición fundamental de logaritmos.',
        'indice' => 0,
        'tema_id' => 44,
        'created_at' => '2023-11-25 18:17:51',
        'updated_at' => '2023-11-25 18:23:57'
    ],
    [
        'id' => 666,
        'nombre' => 'Logaritmo de la unidad',
        'formula' => '$$log_a 1=0$$',
        'detalle' => 'Propiedad del logaritmo de 1 en cualquier base.',
        'indice' => 0,
        'tema_id' => 44,
        'created_at' => '2023-11-25 18:19:46',
        'updated_at' => '2023-11-25 18:24:17'
    ],
    [
        'id' => 667,
        'nombre' => 'Logaritmo de la base',
        'formula' => '$$log_a a=1\\\\log_{a^m} a^n=\\frac{n}{m}$$',
        'detalle' => 'Propiedades del logaritmo de la base.',
        'indice' => 0,
        'tema_id' => 44,
        'created_at' => '2023-11-25 18:21:03',
        'updated_at' => '2023-11-25 18:40:06'
    ],
    [
        'id' => 668,
        'nombre' => 'Suma de logaritmos de igual base',
        'formula' => '$$log_aA+log_a B=log_a(A·B)$$',
        'detalle' => 'Propiedad del logaritmo de un producto.',
        'indice' => 0,
        'tema_id' => 44,
        'created_at' => '2023-11-25 18:23:34',
        'updated_at' => '2023-11-25 18:29:37'
    ],
    [
        'id' => 669,
        'nombre' => 'Diferencia de logaritmos de igual base',
        'formula' => '$$log_aA-log_a B=log_a(A/B)$$',
        'detalle' => 'Propiedad del logaritmo de un cociente.',
        'indice' => 0,
        'tema_id' => 44,
        'created_at' => '2023-11-25 18:28:54',
        'updated_at' => '2023-11-25 18:28:54'
    ],
    [
        'id' => 670,
        'nombre' => 'Logaritmo de una potencia',
        'formula' => '$$log_a b^n =n·log_a b\\\\log_{a^m} b^n =\\frac{n}{m}·log_a b$$',
        'detalle' => 'Propiedad del logaritmo de una potencia.',
        'indice' => 0,
        'tema_id' => 44,
        'created_at' => '2023-11-25 18:37:10',
        'updated_at' => '2023-11-25 18:37:10'
    ],
    [
        'id' => 671,
        'nombre' => 'Cambio de base de un logaritmo',
        'formula' => '$$log_a b=\\frac{log_c b}{log_c a}$$',
        'formula' => '$$log_a b=\\frac{log_c b}{log_c a}$$',
        'detalle' => 'Fórmula para cambiar la base de un logaritmo.',
        'indice' => 0,
        'tema_id' => 44,
        'created_at' => '2023-11-25 18:54:38',
        'updated_at' => '2023-11-25 18:54:38'
    ],
    [
        'id' => 672,
        'nombre' => 'Potencia de exponente logarítmico',
        'formula' => '$$a^{log_a b} =b$$',
        'detalle' => 'Propiedad de potencias con exponentes logarítmicos.',
        'indice' => 0,
        'tema_id' => 44,
        'created_at' => '2023-11-25 18:57:16',
        'updated_at' => '2023-11-25 18:57:16'
    ],
    [
        'id' => 673,
        'nombre' => 'Logaritmo decimal o de base 10',
        'formula' => '$$log b=log_{10}b$$',
        'detalle' => 'Notación para logaritmos en base 10.',
        'indice' => 0,
        'tema_id' => 44,
        'created_at' => '2023-11-25 18:58:48',
        'updated_at' => '2023-11-25 18:58:48'
    ],
    [
        'id' => 674,
        'nombre' => 'Logaritmo neperiano o logaritmo natural',
        'formula' => '$$ln b =log_e b$$',
        'detalle' => 'Notación para logaritmos en base e (número de Euler).',
        'indice' => 0,
        'tema_id' => 44,
        'created_at' => '2023-11-25 19:01:05',
        'updated_at' => '2023-11-25 19:01:05'
    ],
    [
        'id' => 675,
        'nombre' => 'Producto de dos binomios de la forma 1',
        'formula' => '$$(x+a)·(x+b)=x^2+(a+b)·x+a·b$$',
        'detalle' => 'Fórmula para multiplicar binomios con término común.',
        'indice' => 0,
        'tema_id' => 40,
        'created_at' => '2023-11-27 20:24:37',
        'updated_at' => '2023-11-27 20:24:37'
    ],
    [
        'id' => 676,
        'nombre' => 'Producto de dos binomios de la forma 2',
        'formula' => '$$(ax+b)·(cx+d)=acx^2+(ad+bc)·x+bd$$',
        'detalle' => 'Fórmula general para multiplicar dos binomios.',
        'indice' => 0,
        'tema_id' => 40,
        'created_at' => '2023-11-27 20:27:59',
        'updated_at' => '2023-11-27 20:27:59'
    ]
    /**$$$$$$$$$$$$$$$$$$$ */

];

        foreach ($formulas as $formula) {
            Formula::updateOrCreate(
                ['id' => $formula['id']],
                $formula
            );
        }



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

//         Formula::create([
//         'Fórmula cuadrática', '$$x_1=\\frac{-b\\pm\\sqrt[2]{b^2-4ac}}{2a}$$', '<p>La fórmula cuadrática es una herramienta matemática utilizada para encontrar las soluciones de una ecuación cuadrática de la forma $$ax^2 + bx + c = 0$$, donde a, b y c son coeficientes conocidos. La fórmula utiliza la raíz cuadrada para encontrar las dos posibles soluciones de la ecuación. La fórmula es ampliamente utilizada en álgebra y cálculo, así como en aplicaciones prácticas en ciencias y tecnología.</p>', 0, 3, '2023-04-03 16:18:07', '2023-04-04 22:19:15'
//         'Suma de raices', '$$ x_1+x_2=\\frac{-b}{a} $$ ', 'Esta fórmula es útil en situaciones en las que se necesita encontrar la suma de las raíces de una ecuación cuadrática, por ejemplo, para resolver un problema de aplicación que requiere conocer la suma de las soluciones.', 0, 3, '2023-04-03 16:18:07', '2023-04-03 16:18:07'
//         'Producto de raices', '$$ x_1 \\cdot x_2=\\frac{c}{a} $$', 'La fórmula de producto de las raíces de una ecuación cuadrática es una expresión matemática que nos permite calcular el producto de las dos soluciones de una ecuación cuadrática. Esta fórmula se utiliza comúnmente en matemáticas y en ciencias aplicadas para resolver problemas que involucran ecuaciones cuadráticas.', 0, 3, '2023-04-03 16:18:07', '2023-04-03 16:18:07'
//         'Resta de raices', '$$x_1 - x_2 = \\frac{-b - \\sqrt{b^2 - 4ac}}{2a} - \\frac{-b + \\sqrt{b^2 - 4ac}}{2a}$$', '<p>fdsfds</p>', 0, 20, '2023-04-03 16:18:52', '2023-04-03 16:18:52'
//         'Producto de potencias de la misma base', '$$a^m \\cdot a^n=a^{m+n}$$', '<p>En este caso las bases (a) son iguales y se multiplican, cada base posee un exponente (m) y (n) y el resultado es la misma base (a) y el exponente resultante es la sumatoria de los exponentes de cada base.</p><p>Por ejemplo:</p><p>$$ 5^3 * 5^4 = 5^{(3+4)} = 5^7 $$</p>', 0, 1, '2023-04-03 18:11:18', '2023-04-05 16:04:10'
//         'Producto de potencias de la misma base', '$$a^m \\cdot a^n=a^{n+m}$$', '<p>dsfds</p>', 0, 1, '2023-04-03 18:11:58', '2023-04-03 22:28:10'
//         'raiz enecima de un producto', '$$\\sqrt[n]{a\\cdot b}=\\sqrt[n]{a}\\cdot\\sqrt[n]{b}$$', '<p>&nbsp;sn</p>', 0, 2, '2023-04-03 18:59:34', '2023-04-06 17:42:47'
//         'Potencia de una potencia', '$${(a^n)^m}=a^{n \\cdot m}$$', '<p>Se llama potencia de potencia, a la operación en la que una potencia es sometida a otro exponente adicional. El resultado matemático es otra potencia cuya base es la misma y su exponente es el producto de los exponentes involucrados.</p><p>Por ejemplo:</p><p>Si a = 2, n = 3 y m = 4, entonces:</p><p>$$ (2^3)^4 = 2^{3*4} = 2^{12} = 4096 $$</p>', 0, 1, '2023-04-04 02:06:51', '2023-04-05 16:05:32'
//         'Identidades Pitagoricas 1', '$$sin^2x+cos^2x=1$$', '<p>sl</p>', 0, 13, '2023-04-04 02:25:36', '2023-04-04 18:47:32'
//         'Identidades Pitagoricas 2', '$$1+tan^2x=csc^2x$$', '<p>sm</p>', 0, 13, '2023-04-04 02:28:43', '2023-04-04 18:47:59'
//         'Identidad de la suma y diferencia de ángulos de Seno', '$$\\sin(x\\pm{y})=\\sin{x}\\cdot\\cos{y}\\pm\\cos{x}\\cdot\\sin{y}$$', '<p>sn</p>', 0, 13, '2023-04-04 02:40:36', '2023-04-05 17:27:46'
//         'Identidad de la suma y diferencia de ángulos de Coseno', '$$\\cos(x\\pm{y})=\\cos{x}\\cdot\\cos{y}\\mp\\ sinx\\cdot\\cos{x}$$', '<p>xd</p>', 0, 13, '2023-04-04 02:53:17', '2023-04-05 17:29:08'
//         'Potencia con exponente 0', '$$\\ a^0=1\\:\\:\\:\\:\\:a\\ne 0$$', '<p>Cualquier potencia de exponente 0 es igual a 1 siempre que su base no sea 1. Por ejemplo,&nbsp;</p><p>$$ 2^0 = 1 $$</p><p>$$ \\left(\\frac{3}{4}\\right)^0=1 $$</p>', 0, 1, '2023-04-04 15:55:24', '2023-04-04 16:00:40'
//         'División o cociente de potencias de la misma base', '$$\\frac{a^m}{a^n}=a^{n-m}$$', '<p>En este caso las bases (a) son iguales y se dividen, cada base posee un exponente (m) y (n) y el resultado es la misma base (a) y el exponente resultante es la resta de los exponentes de cada base.</p><p>Por ejemplo:</p><p>$$ \\frac{5^7}{5^4} = 5^{(7-4)} = 5^3 $$</p>', 0, 1, '2023-04-04 16:10:32', '2023-04-05 16:04:47'
//         'resta o diferencia de sus raices', '$$x_1 - x_2 = \\sqrt{\\frac{b^2 - 4ac}{a^2}}$$', '<p>Resta de las raíces: La resta de las raíces de la ecuación cuadrática es $$\\sqrt{\\frac{b^2 - 4ac}{a^2}}$$. Es decir, si las raíces son $$x_1$$ y $$x_2$$, entonces $$x_1 - x_2 = \\sqrt{\\frac{b^2 - 4ac}{a^2}}$$.</p><p>Espero que esto te sea útil. Si tienes alguna pregunta más, no dudes en visitar <a href=\"https://ite.com.bo/\">www.ite.com.bo</a>.</p>', 0, 3, '2023-04-04 16:23:01', '2023-04-04 16:26:02'
//         'Identidad de la suma y diferencia de ángulos de Tangente', '$$\\tan(x\\pm y) = \\frac{\\tan{x}\\pm\\tan{y}}{1\\mp\\tan{x}\\cdot\\tan{y}}$$', '<p>zx</p>', 0, 13, '2023-04-04 18:46:01', '2023-04-05 17:30:01'
//         'Identidad del cociente de Tangente', '$$\\tan{x} = \\frac{\\sin{x}}{\\cos{x}}$$', '<p>de</p>', 0, 13, '2023-04-04 18:54:20', '2023-04-05 17:30:47'
//         'Identidad del cociente de Cotangente', '$$\\cot{x}=\\frac{\\cos{x}}{\\sin{x}}$$', '<p>cf</p>', 0, 13, '2023-04-04 18:57:04', '2023-04-05 17:31:34'
//         'Identidad recíproca de Seno', '$$\\csc{x} =\\frac{1}{\\sin{x}}$$', '<p>hy</p>', 0, 13, '2023-04-04 19:01:34', '2023-04-05 17:33:12'
//         'Identidad recíproca de Coseno', '$$\\sec{x} = \\frac{1}{\\cos{x}}$$', '<p>zc</p>', 0, 13, '2023-04-04 19:03:34', '2023-04-05 17:32:44'
//         'Identidad recíproca de Tangente', '$$\\cot{x}=\\frac{1}{\\tan{x}}$$', '<p>sw</p>', 0, 13, '2023-04-04 19:07:44', '2023-04-05 17:34:03'
//         'Identidad del ángulo doble Seno', '$$\\sin(2x) =2\\cdot\\sin{x}\\cdot\\cos{x}$$', '<p>za</p>', 0, 13, '2023-04-04 19:17:50', '2023-04-05 17:34:46'
//         'Identidad del ángulo doble de Coseno 1', '$$\\cos(2x)=\\cos^2{x} - \\sin^2{x}$$', '<p>sa</p>', 0, 13, '2023-04-04 19:20:39', '2023-04-05 17:35:47'
//         'Identidad del ángulo doble Coseno 2', '$$\\cos(2x) = 1- 2\\cdot\\sin^2{x}$$', '<p>df</p>', 0, 13, '2023-04-04 19:23:28', '2023-04-05 17:36:21'
//         'Identidad del ángulo doble de Coseno 3', '$$\\cos(2x) =  2\\cdot\\cos^2{x}-1$$', '<p>gt</p>', 0, 13, '2023-04-04 19:26:33', '2023-04-05 17:36:57'
//         'Potencia con exponente 1', '$$\\ a^1=a$$', '<p>La potencia de exponente igual a 1 es una ley de los exponentes que establece que cuando el exponente es 1, el resultado será el mismo valor de la base.&nbsp;</p><p>Por ejemplo:</p><p>$$ 2^1 = 2 $$</p><p>$$ x^1 = x $$</p>', 0, 1, '2023-04-04 19:31:41', '2023-04-04 19:31:41'
//         'Identidad del ángulo doble de Tangente', '$$\\tan(2x) =\\frac{2\\cdot\\tan{x}}{1-\\tan^2{x}}$$', '<p>qw</p>', 0, 13, '2023-04-04 19:33:06', '2023-04-05 17:38:07'
//         'Producto de potencias con base diferente y exponentes iguales', '$$a^m\\cdot \\:b^m=\\left(a\\cdot \\:b\\right)^m$$', '<p>Se llama potencia de producto, a la operación en la que un producto es sometido a un exponente adicional. El resultado matemático es otra potencia cuya base es el producto de las bases involucradas y su exponente es el mismo para todas las bases.&nbsp;</p><p>Por ejemplo:</p><p>$$ 2^3 * 3^3 = (2*3)^3 = 6^3 $$</p>', 0, 1, '2023-04-04 19:34:10', '2023-04-05 16:06:08'
//         'Identidad del ángulo doble de Seno 2', '$$\\sin(2x) =\\frac{2\\cdot\\tan{x}}{1+\\tan^2{x}}$$', '<p>dr</p>', 0, 13, '2023-04-04 19:36:58', '2023-04-05 17:39:06'
//         'Identidad del ángulo doble de Coseno 4', '$$\\cos(2x)=\\frac{1-\\tan^2{x}}{1+\\tan^2{x}}$$', '<p>gh</p>', 0, 13, '2023-04-04 19:41:54', '2023-04-05 17:39:45'
//         'radical', '$$\\sqrt[n]{\\frac{a}{b}}=\\frac{\\sqrt[n]{a}}{\\sqrt[n]{b}}$$', '<p>sn</p>', 0, 2, '2023-04-04 19:49:01', '2023-04-06 17:09:43'
//         'Identidad del ángulo triple de Seno 1', '$$\\sin(3x)= 3\\sin{x} -4\\cdot\\sin^3{x}$$', '<p>do</p>', 0, 13, '2023-04-04 19:49:13', '2023-04-05 17:40:32'
//         'Identidad del ángulo triple de Seno 2', '$$\\sin(3x)=3\\cdot\\cos^2{x}\\cdot\\sin{x}-\\sin^3{x}$$', '<p>tg</p>', 0, 13, '2023-04-04 19:52:37', '2023-04-05 17:41:17'
//         'radical', '$$\\sqrt[n]{\\frac{a}{b^{-1}}}=\\sqrt[n]{ab}$$', NULL, 0, 2, '2023-04-04 19:55:45', '2023-04-06 17:38:47'
//         'Identidad del ángulo triple de Coseno 1', '$$\\cos(3x)=4\\cdot\\cos^3{x}-3\\cdot\\cos{x}$$', '<p>dg</p>', 0, 13, '2023-04-04 19:56:31', '2023-04-05 17:42:41'
//         'Identidad del ángulo triple de Coseno 2', '$$\\cos(3x)=\\cos^3{x} -3\\cdot\\sin^2{x}\\cdot\\cos{x}$$', '<p>aq</p>', 0, 13, '2023-04-04 22:13:50', '2023-04-05 17:43:43'
//         'Cociente de potencia del mismo exponente', '$$\\frac{a^n}{b^n}\\:=\\left(\\frac{a}{b}\\right)^n$$', '<p>El cociente de potencias de igual exponente es igual a la fraccion de las bases y elevada al exponente de ambos.</p><p>Por ejemplo:</p><p>$$ \\frac{6^5}{3^5}=\\left(\\frac{6}{3}\\right)^5=2^5=32 $$</p>', 0, 1, '2023-04-04 22:17:57', '2023-04-04 22:20:33'
//         'Teorema de Pitágoras.', '$$c^2=a^2+b^2$$', '<p>El teorema de Pitágoras es una propiedad fundamental de la geometría que establece que, en un triángulo rectángulo, el cuadrado de la longitud de la hipotenusa es igual a la suma de los cuadrados de las longitudes de los otros dos lados. Es decir, $$ c² = a² + b²$$, donde \"c\" es la hipotenusa y \"a\" y \"b\" son los otros dos lados. Esta propiedad es utilizada en diversas áreas de las matemáticas y la física, y es fundamental para la resolución de problemas relacionados con la medición de distancias, el cálculo de áreas y volúmenes, entre otros.</p>', 0, 12, '2023-04-04 22:24:05', '2023-04-04 22:28:05'
//         'Teorema de Pitágoras.', '$$c^2=a^2+b^2$$', '<p>.</p><p>La formula del teorema de Pitágoras es una expresión matemática que relaciona los lados de un triángulo rectángulo. Establece que el cuadrado de la hipotenusa (la longitud de la línea perpendicular al triángulo) es igual a la suma de los cuadrados de los otros dos lados. Esto se expresa matemáticamente como:</p><p>Hipotenusa2 = Lado1 2 + Lado2 2</p><p>Si necesitas ayuda humana contacta con ITE +591 75553338</p>', 0, 12, '2023-04-04 22:33:46', '2023-04-04 22:33:46'
//         'Área de un Triangulo Rectángulo', '$$A=\\frac{b\\cdot h}{2}$$', '<p>&nbsp;</p><p>El área de un triángulo rectángulo se calcula multiplicando la base por la altura y dividiendo el resultado entre dos. Esto se expresa matemáticamente como:</p><p>Área = (Base × Altura) / 2</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 12, '2023-04-04 22:37:46', '2023-04-04 23:37:28'
//         'Perímetro del Triangulo Rectángulo', '$$P=a+b+c$$', '<p>&nbsp;</p><p>El perímetro de un triángulo rectángulo se calcula sumando las tres longitudes de sus lados. Esto se expresa matemáticamente como:</p><p>Perímetro = Lado1 + Lado2 + Hipotenusa</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 12, '2023-04-04 22:41:26', '2023-04-04 23:37:42'
//         'Sumatoria de Ángulos Internos', '$$A+B+C=180º$$', '<p>&nbsp;</p><p>Los ángulos internos de un triángulo se calculan sumando los ángulos internos (A,B,C) del triangulo con un resultado igual a 180.</p><p>&nbsp;</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 12, '2023-04-04 22:46:46', '2023-04-04 23:47:43'
//         'Calculo de uno de los Catetos', '$$a=\\sqrt{c^2-b^2}$$', '<p>&nbsp;del triangulo rectangulo,</p><p>Para calcular uno de los catetos de un triángulo rectángulo se utiliza la regla de Pitágoras. Esto se expresa matemáticamente como:</p><p>a = Raíz cuadrada (c² - b²)</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 12, '2023-04-04 22:52:20', '2023-04-04 23:37:56'
//         'Calculo de uno de los Catetos', '$$b=\\sqrt{c^2-a^2}$$', '<p>&nbsp;del triangulo rectangulo,</p><p>Para calcular uno de los catetos de un triángulo rectángulo se utiliza la regla de Pitágoras. Esto se expresa matemáticamente como:</p><p>b = Raíz cuadrada (c² - a²)</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 12, '2023-04-04 22:56:21', '2023-04-04 23:38:09'
//         'Seno α', '$$\\sin \\left(α\\right)=\\frac{Cateto\\:Opuesto}{Hipotenusa}$$', '<p>.</p><p>Para hallar el seno de alfa para un triángulo rectángulo se usa la ley de los senos. Esto se expresa matemáticamente como:</p><p>Seno(α) = Cateto Opuesto / Hipotenusa</p><p>Si necesitas ayuda de un Profesor contacta con ITE +591 75553338</p>', 0, 11, '2023-04-04 23:02:23', '2023-04-05 00:07:28'
//         'Coseno α', '$$\\cos \\left(α\\right)=\\frac{Cateto\\:Adyacente\\:}{Hipotenusa}$$', '<p>&nbsp;</p><p>El coseno de alfa es una medida de la longitud del lado Adyacente al ángulo alfa en un triángulo rectángulo. Es el cociente entre la hipotenusa y el lado Adyacente al ángulo alfa, y se escribe como cos(α). Esta relación se conoce como la ley del coseno. El coseno de alfa se puede calcular a partir de los valores de los otros dos lados del triángulo con la fórmula:</p><p><br>cos(α) = lado Adyacente/hipotenusa</p><p>&nbsp;</p><p>Si necesitas ayuda de un Profesor contacta con ITE +591 75553338</p>', 0, 11, '2023-04-04 23:07:42', '2023-04-05 00:07:41'
//         'Tangente α', '$$\\tan \\left(α\\right)=\\frac{Cateto\\:Opuesto}{Cateto\\:Adyacente}$$', '<p>&nbsp;</p><p>El tangente de alfa es una medida de la longitud del lado opuesto al ángulo alfa en un triángulo rectángulo. Es el cociente entre la longitud del lado opuesto al ángulo y la longitud del lado adyacente, y se escribe como tan(α). Esta relación se conoce como la ley del tangente. El tangente de alfa se puede calcular a partir de los valores de los otros dos lados del triángulo con la fórmula:</p><p>tan(α) = Cateto opuesto/Cateto adyacente</p><p>&nbsp;</p><p>Si necesitas ayuda de un Profesor contacta con ITE +591 75553338</p>', 0, 11, '2023-04-04 23:13:47', '2023-04-05 00:07:51'
//         'Cosecante α', '$$\\csc \\left(α\\right)=\\frac{Hipotenusa}{Cateto\\:Opuesto}$$', '<p>,</p><p>El cosecante de alfa es una medida de la longitud del lado opuesto al ángulo alfa en un triángulo rectángulo. Es el cociente entre la hipotenusa y el lado opuesto al ángulo alfa, y se escribe como csc(α). Esta relación se conoce como la ley del cosecante. El cosecante de alfa se puede calcular a partir de los valores de los otros dos lados del triángulo con la fórmula:</p><p>csc(α) = hipotenusa/Cateto opuesto</p><p>&nbsp;</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 11, '2023-04-04 23:21:09', '2023-04-05 00:08:02'
//         'Secante α', '$$\\sec \\left(α\\right)=\\frac{Hipotenusa\\:}{Cateto\\:Adyacente}$$', '<p>,</p><p>El secante de alfa es una medida de la longitud del lado opuesto al ángulo alfa en un triángulo rectángulo. Es el cociente entre el lado opuesto y el lado adyacente al ángulo alfa, y se escribe como sec(α). Esta relación se conoce como la ley del secante. El secante de alfa se puede calcular a partir de los valores de los otros dos lados del triángulo con la fórmula:</p><p>sec(α) = Hipotenusa/Cateto adyacente</p><p>&nbsp;</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 11, '2023-04-04 23:25:51', '2023-04-05 00:08:15'
//         'Cotangente α', '$$\\cot \\left(α\\right)=\\frac{Cateto\\:Adyacente\\:}{Cateto\\:Opuesto}$$', '<p>,</p><p>El cotangente de alfa es una medida de la longitud del lado opuesto al ángulo alfa en un triángulo rectángulo. Es el cociente entre el lado adyacente y el lado opuesto, y se escribe como cot(α). Esta relación se conoce como la ley del cotangente. El cotangente de alfa se puede calcular a partir de los valores de los otros dos lados del triángulo con la fórmula:</p><p>cot(α) = lado adyacente/lado opuesto</p><p>&nbsp;</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 11, '2023-04-04 23:30:24', '2023-04-05 00:08:26'
//         'Cotangente de Alfa', '$$\\cot \\left(α\\right)=\\frac{b}{a}$$', '<p>,</p><p>El cotangente de alfa es una medida de la longitud del lado opuesto al ángulo alfa en un triángulo rectángulo. Es el cociente entre el lado adyacente y el lado opuesto, y se escribe como cot(α). Esta relación se conoce como la ley del cotangente. El cotangente de alfa se puede calcular a partir de los valores de los otros dos lados del triángulo con la fórmula:</p><p>cot(α) = lado adyacente/lado opuesto</p><p>&nbsp;</p><p>Si necesitas ayuda humana contacta con ITE +591 75553338</p>', 0, 11, '2023-04-04 23:30:25', '2023-04-04 23:30:25'
//         'Definici', '$$\\log _B\\left(A\\cdot \\:C\\right)=\\log _B\\left(A\\right)+\\log _B\\left(C\\right)$$', NULL, 0, 6, '2023-04-05 01:52:54', '2023-04-05 01:52:54'
//         'Definición de logaritmos', '$$\\log _B\\left(A\\right)=C$$', NULL, 0, 6, '2023-04-05 01:53:33', '2023-04-05 01:53:33'
//         'Logaritmo de un producto', '$$\\log_b\\left(ac\\right)=\\log_b\\left(a\\right)+\\log_b\\left(c\\right)$$', '<p>SN</p>', 0, 6, '2023-04-05 02:19:38', '2023-04-05 22:25:54'
//         'Ley de exponente negativo', '$$\\ a^{-n}=\\frac{1}{a^n}\\:\\:\\:\\:\\:\\:\\:a\\ne 0$$', '<p>La ley de exponente negativo establece que cuando un número se eleva a un exponente negativo, dividimos 1 por la base elevada a un exponente positivo.</p><p>Por ejemplo:</p><p>$$ \\ 3^{-2}=\\frac{1}{3^2}=\\frac{1}{9} $$</p>', 0, 1, '2023-04-05 15:51:55', '2023-04-05 15:51:55'
//         'Identidades de Producto en Suma o Diferencia de ángulos 1', '$$\\sin{x}\\cdot\\cos{y}=\\frac{1}{2}\\cdot[\\sin(x+y)+\\sin(x-y)]$$', '<p>ft</p>', 0, 13, '2023-04-05 15:55:05', '2023-04-05 16:04:12'
//         'Raíz de una potencia', '$$\\sqrt[n]{a^{^m}}=a^{\\frac{m}{n}}$$', '<p>La potencia de una raíz es igual a la raíz de índice igual a la de la potencia dividida por el índice de la raíz original.</p><p>Por ejemplo:</p><p>$$ \\sqrt[4]{9^{^2}}=9^{\\frac{2}{4}}=9^{\\frac{1}{2}} $$</p>', 0, 1, '2023-04-05 15:59:30', '2023-04-05 15:59:30'
//         'Identidad de Producto en Suma o Diferencia de ángulos 2', '$$\\sin{x}\\cdot\\sin{y}=\\frac12\\cdot[\\cos(x-y)-\\cos(x+y)]$$', '<p>yj</p>', 0, 13, '2023-04-05 15:59:43', '2023-04-05 16:10:27'
//         'Identidad de Producto en Suma o Diferencia de ángulos 3', '$$\\cos{x}\\cdot\\sin{y}=\\frac12\\cdot[\\sin(x+y)-\\sin(x-y)]$$', '<p>zf</p>', 0, 13, '2023-04-05 16:03:11', '2023-04-05 16:09:29'
//         'Identidad del Producto en Suma o Diferencia de ángulos', '$$\\cos{x}\\cdot\\cos{y}= \\frac12\\cdot[\\cos(x+y)+\\cos(x-y)]$$', NULL, 0, 13, '2023-04-05 16:08:54', '2023-04-05 16:08:54'
//         'Identidad del Angulo Medio de Seno', '$$\\sin(\\frac{x}{2})=\\pm\\sqrt\\frac{1-\\cos{x}}{2}$$', '<p>dh</p>', 0, 13, '2023-04-05 16:18:10', '2023-04-05 17:50:02'
//         'Identidad del Angulo Medio de Coseno', '$$\\cos( \\frac{x}{2})=\\pm\\sqrt\\frac{1+\\cos{x}}{2}$$', '<p>sj</p>', 0, 13, '2023-04-05 16:22:16', '2023-04-05 17:51:36'
//         'Identidad del Angulo Medio de Tangente 1', '$$\\tan(\\frac{x}{2})=\\pm\\sqrt\\frac{1-\\cos{x}}{1+\\cos{x}}$$', '<p>dl</p>', 0, 13, '2023-04-05 16:27:13', '2023-04-05 17:53:00'
//         'Identidad del Angulo Medio de Tangente 2', '$$\\tan(\\frac{x}{2})=\\frac{\\sin{x}}{1+\\cos{x}}$$', '<p>ny</p>', 0, 13, '2023-04-05 16:32:13', '2023-04-05 17:54:21'
//         'Identidad del Angulo Medio de Tangente 3', '$$\\tan(\\frac{x}{2})=\\frac{1-\\cos{x}}{\\sin{x}}$$', '<p>up</p>', 0, 13, '2023-04-05 16:36:29', '2023-04-05 17:54:59'
//         'Identidad del Angulo Medio de Cotangente', '$$\\cot(\\frac{x}{2})=\\csc{x} +\\cot{x}$$', '<p>xi</p>', 0, 13, '2023-04-05 16:39:18', '2023-04-05 17:55:40'
//         'Identidad de la mitad de la suma de dos ángulos  de Tangente', '$$\\tan(\\frac{x+y}{2})=\\frac{\\sin{x}+\\sin{y}}{\\cos{x}+\\cos{y}}$$', '<p>mj</p>', 0, 13, '2023-04-05 16:44:11', '2023-04-05 17:59:57'
//         'Identidad de la Suma o Diferencia a Producto de Seno', '$$\\sin{x}\\pm\\sin{y}=2\\cdot\\sin(\\frac{x\\pm{y}}{2})\\cdot\\cos(\\frac{x\\mp{y}}{2})$$', '<p>bt</p>', 0, 13, '2023-04-05 16:58:42', '2023-04-05 18:01:33'
//         'Identidad de la Suma o Diferencia a Producto de Coseno 1', '$$\\cos{x}+\\cos{y}=2\\cdot\\cos(\\frac{x+y}{2})\\cdot\\cos(\\frac{x-y}{2})$$', '<p>sl</p>', 0, 13, '2023-04-05 17:03:07', '2023-04-05 18:04:03'
//         'Identidad de la Suma o Diferencia a Producto de Coseno 2', '$$\\cos{x}-\\cos{y}=-2\\cdot\\sin(\\frac{x+y}{2})\\cdot\\sin(\\frac{x-y}{2})$$', '<p>bi</p>', 0, 13, '2023-04-05 17:09:11', '2023-04-05 18:04:35'
//         'Identidad de la Suma o Diferencia a Producto de Tangente', '$$\\tan{x}\\pm\\tan{y}=\\frac{\\sin({x}\\pm{y})}{\\cos{x}\\cdot\\cos{y}}$$', '<p>sl</p>', 0, 13, '2023-04-05 17:14:27', '2023-04-05 18:05:23'
//         'multiplicacion de dos raices con terminos iguales', '$$\\sqrt{a}\\cdot\\sqrt{a}=a$$', '<p>sn</p>', 0, 2, '2023-04-05 18:03:11', '2023-04-05 18:03:11'
//         'Término n_ésimo o término general; donde:', '$$a_n= a_1+(n- 1)\\cdot{d}$$', NULL, 0, 8, '2023-04-05 19:12:08', '2023-04-05 19:12:08'
//         'Término n_ésimo o término general; donde:', '$$a_n= a_1+(n- 1)\\cdot{d}$$', '<p>zf</p>', 0, 8, '2023-04-05 19:14:16', '2023-04-05 19:14:16'
//         'Potencia de una fracción de exponente negativo', '$$\\left(\\frac{a}{b}\\right)^{-n}=\\left(\\frac{b}{a}\\right)^{n}$$', '<p>Una potencia de una fracción de exponente negativo es igual a la potencia de la fracción inversa elevada al exponente positivo.</p><p>Por ejemplo:</p><p>$$ \\left(\\frac{2}{3}\\right)^{-2}=\\left(\\frac{3}{2}\\right)^{2}=\\frac{9}{4} $$</p>', 0, 1, '2023-04-05 22:16:08', '2023-04-05 22:16:08'
//         'Ley de Senos', '$$\\frac{a}{\\sin \\left(A\\right)}=\\frac{b}{\\sin \\left(B\\right)}=\\frac{c}{\\sin \\left(C\\right)}$$', '<p>&nbsp;</p><p>La ley de senos es una relación matemática que describe la relación entre los lados y los ángulos de un triángulo. Esta ley se utiliza para calcular las longitudes de los lados y los ángulos de un triángulo conocidos. Esto se realiza a través del uso de la trigonometría, que es la rama de las matemáticas que estudia las relaciones entre los lados y los ángulos de figuras geométricas.&nbsp;</p><p>&nbsp;</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 31, '2023-04-05 22:17:22', '2023-04-05 22:17:22'
//         'Logaritmo de un cociente', '$$\\log_b\\left(\\frac{a}{c}\\right)=\\log_b\\left(a\\right)-\\log_b\\left(c\\right)$$', NULL, 0, 6, '2023-04-05 22:22:52', '2023-04-05 22:22:52'
//         'Ley de Cosenos \"a\"', '$$a^2=b^2+c^2-2bc\\cdot \\cos \\left(A\\right)$$', '<p><br>La ley de cosenos es una relación matemática que describe la relación entre los lados y los ángulos de un triángulo. Esta ley se utiliza para calcular las longitudes de los lados y los ángulos de un triángulo conocidos. Esto se realiza a través del uso de la trigonometría, que es la rama de las matemáticas que estudia las relaciones entre los lados y los ángulos de figuras geométricas.&nbsp;</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338<br>&nbsp;</p>', 0, 31, '2023-04-05 22:26:07', '2023-04-05 22:26:07'
//         'Ley de Coseno \"b\"', '$$b^2=a^2+c^2-2ac\\cdot \\cos \\left(B\\right)$$', '<p><br>La ley de cosenos es una relación matemática que describe la relación entre los lados y los ángulos de un triángulo. Esta ley se utiliza para calcular las longitudes de los lados y los ángulos de un triángulo conocidos. Esto se realiza a través del uso de la trigonometría, que es la rama de las matemáticas que estudia las relaciones entre los lados y los ángulos de figuras geométricas.&nbsp;</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 31, '2023-04-05 22:28:40', '2023-04-05 22:28:40'
//         'Ley de Coseno \"c\"', '$$c^2=a^2+b^2-2ab\\cdot \\cos \\left(C\\right)$$', '<p><br>La ley de cosenos es una relación matemática que describe la relación entre los lados y los ángulos de un triángulo. Esta ley se utiliza para calcular las longitudes de los lados y los ángulos de un triángulo conocidos. Esto se realiza a través del uso de la trigonometría, que es la rama de las matemáticas que estudia las relaciones entre los lados y los ángulos de figuras geométricas.&nbsp;</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 31, '2023-04-05 22:29:58', '2023-04-05 22:29:58'
//         'Logaritmo de la misma base', '$$\\log_b\\left(b\\right)=1                ;          \\ln\\left(e\\right)=1$$', NULL, 0, 6, '2023-04-05 22:33:12', '2023-04-05 23:57:09'
//         'Logaritmo de una potencia ( Caso 1 )', '$$\\log_b\\left(a^n\\right)=n\\log_b\\left(a\\right)$$', NULL, 0, 6, '2023-04-05 22:35:37', '2023-04-05 22:35:37'
//         'Suma de los Ángulos Internos', '$$A+B+C=180°$$', '<p>Los ángulos internos de un triángulo se calculan sumando los ángulos internos (A,B,C) del triangulo con un resultado igual a 180.</p><p>&nbsp;</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 31, '2023-04-05 22:35:43', '2023-04-05 22:35:43'
//         'Suma de los Ángulos Internos', '$$A+B+C=180°$$', '<p>Los ángulos internos de un triángulo se calculan sumando los ángulos internos (A,B,C) del triangulo con un resultado igual a 180.</p><p>&nbsp;</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 31, '2023-04-05 22:35:48', '2023-04-05 22:35:48'
//         'Logaritmo de una potencia ( Caso 2 )', '$$\\log_{b^m}\\left(a^n\\right)=\\frac{n}{m}\\log_b\\left(a\\right)$$', NULL, 0, 6, '2023-04-05 22:36:21', '2023-04-05 22:36:21'
//         'Igualdad de potencias de igual base', '$$a^m=a^n\\:\\:\\:\\:\\:\\:m=n$$', '<p>La igualdad de dos potencias con una misma base, se eliminan las bases y sus exponentes quedan como base de la igualdad.</p><p>Por ejemplo:</p><p>$$ 3^5=3^{10}\\:\\:\\:\\:\\:\\:5=10 $$</p>', 0, 1, '2023-04-05 22:46:56', '2023-04-05 22:48:07'
//         'Logaritmo de una raiz', '$$\\log_b\\left(\\sqrt[n]{a}\\right)=\\frac{1}{n}\\log_b\\left(a\\right)$$', NULL, 0, 6, '2023-04-05 22:48:06', '2023-04-05 22:48:06'
//         'Área de un Triangulo', '$$A=\\frac{b\\cdot a}{2}  \\\\ P=L+L+L$$', '<p>.</p><p>El área de un triángulo se refiere al espacio dentro de sus límites. Esto se calcula multiplicando la base del triángulo por su altura y dividiendo el resultado entre dos. La base del triángulo es la distancia entre los dos vértices opuestos, mientras que la altura es la distancia desde el vértice hasta la línea que une a los otros dos vértices.&nbsp;</p><p>El perímetro de un triángulo se calcula sumando la longitud de cada uno de sus lados. Esta fórmula se aplica para todos los triángulos, sin importar su forma o tamaño.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 28, '2023-04-05 23:14:02', '2023-04-10 23:37:13'
//         'Área de un Cuadrado', '$$A=L^2 \\\\ P=4L$$', '<p>.</p><p>El área de un cuadrado se refiere al espacio dentro de sus límites. Esto se calcula multiplicando la longitud de uno de los lados del cuadrado por sí misma. La longitud del lado se mide desde el vértice hasta el punto opuesto. El resultado de esta operación es un número entero o decimal que representa el área total del cuadrado.</p><p>El perímetro de un cuadrado se calcula sumando la longitud de cada uno de sus lados. Esta fórmula se aplica para todos los cuadrados, sin importar su forma o tamaño.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 28, '2023-04-05 23:17:39', '2023-04-11 00:05:08'
//         'Área de un Circulo', '$$A=\\pi \\cdot r^2 \\\\ P=\\pi \\cdot D$$', '<p>, .</p><p>El área de un círculo se refiere al espacio dentro de sus límites. Esto se calcula multiplicando el radio del círculo por sí mismo y luego multiplicándolo por el número pi (π). El radio es la distancia desde el centro del círculo hasta cualquiera de sus vértices. El resultado de esta operación es un número entero o decimal que representa el área total del círculo.</p><p>El perímetro de un círculo se calcula multiplicando el diámetro por π (pi). Esta fórmula se aplica para todos los círculos, sin importar su forma o tamaño.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 28, '2023-04-05 23:21:49', '2023-04-11 00:16:01'
//         'Área de un Rombo', '$$A=\\frac{D\\cdot d}{2} \\\\ P=4L$$', '<p>.</p><p>El rombo es un paralelogramo (que tiene los cuatro lados iguales) por tanto su perímetro y área pueden calcularse como los de un paralelogramo.</p><p>La expresión más habitual es en función del valor de sus diagonales, que como sabes, son perpendiculares en un rombo.</p><p>El área del rombo es igual al producto de diagonales dividido entre dos.</p><p>El perímetro de un rombo se calcula sumando la longitud de cada uno de sus lados. Esta fórmula se aplica para todos los rombos, sin importar su forma o tamaño.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 28, '2023-04-05 23:26:49', '2023-04-11 00:19:33'
//         'Área de un Rectángulo', '$$A=b\\cdot a \\\\ P=2\\left(b+h\\right)$$', '<p>, .</p><p>El área de un rectángulo se refiere al espacio dentro de sus límites. Esto se calcula multiplicando la longitud de uno de los lados del rectángulo por la longitud del otro lado. La longitud de los lados se mide desde el vértice hasta el punto opuesto. El resultado de esta operación es un número entero o decimal que representa el área total del rectángulo.</p><p>El perímetro de un rectángulo se calcula sumando la longitud de cada uno de sus lados. Esta fórmula se aplica para todos los rectángulos, sin importar su forma o tamaño.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 28, '2023-04-05 23:48:45', '2023-04-11 00:24:48'
//         'Cambio de base ( Caso 1 )', '$$\\log_b\\left(a\\right)=\\frac{\\log_c\\left(a\\right)}{\\log_c\\left(b\\right)}$$', NULL, 0, 6, '2023-04-05 23:53:05', '2023-04-05 23:53:05'
//         'Cambio de base ( Caso 2 )', '$$\\log_b\\left(a\\right)=\\frac{\\ln \\left(a\\right)}{\\ln \\left(b\\right)}$$', NULL, 0, 6, '2023-04-05 23:53:59', '2023-04-05 23:53:59'
//         'Área de un Trapecio', '$$A=\\frac{\\left(B+b\\right)h}{2} \\\\P=B+b+L+L$$', '<p>, .</p><p>El área de un trapecio se refiere al espacio dentro de sus límites. Esto se calcula multiplicando la diferencia entre las longitudes de los lados mayores y menores del trapecio por la distancia entre los lados opuestos del trapecio y dividiendo el resultado entre dos. La longitud de los lados se mide desde el vértice hasta el punto opuesto. El resultado de esta operación es un número entero o decimal que representa el área total del trapecio.</p><p>El perímetro de un trapecio se calcula sumando la longitud de cada uno de sus lados. Esta fórmula se aplica para todos los trapecios, sin importar su forma o tamaño.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 28, '2023-04-05 23:58:05', '2023-04-11 00:28:43'
//         'Suma de los \'\'n\'\' términos (en función del 1er y último término))', '$$S_n=\\frac{n}{2}\\cdot(a_1+a_n)$$', '<p>zj</p>', 0, 8, '2023-04-06 16:04:10', '2023-04-06 16:09:30'
//         'raiz de una potencia', '$$\\sqrt[n]{a^m}=a^\\frac{m}{n}$$', '<p>sn</p>', 0, 2, '2023-04-06 16:07:31', '2023-04-06 17:39:47'
//         'Suma de los \'\'n\'\' términos (en función del 1er término y la diferencia)', '$$S_n=\\frac{n}{2}\\cdot[2\\cdot{a_1}+(n-1)\\cdot{d}]$$', NULL, 0, 8, '2023-04-06 16:08:55', '2023-04-06 16:08:55'
//         'raiz de una potencia', '$$\\sqrt[n]{a}\\cdot\\sqrt[m]{a}=a^\\frac{m+n}{mn}$$', '<p>sn</p>', 0, 2, '2023-04-06 16:13:09', '2023-04-06 16:13:09'
//         'Diferencia o razón (En función del 1er y último término)', '$$d=\\frac{a_n-a_1}{n-1}$$', NULL, 0, 8, '2023-04-06 16:14:27', '2023-04-06 16:14:27'
//         'raiz de una potencia', '$$\\sqrt[n]{a^\\frac{1}{m}}=a^\\frac{1}{mn}$$', '<p>sn</p>', 0, 2, '2023-04-06 16:16:02', '2023-04-06 17:14:19'
//         'Diferencia o razón (En función del 1er término y la suma de términos)', '$$d=\\frac{2\\cdot(S_n-a_1\\cdot{n})}{n\\cdot(n-1)}$$', NULL, 0, 8, '2023-04-06 16:18:42', '2023-04-06 16:18:42'
//         'Número de términos (En función del 1er termino, el último término y la diferencia)', '$$n=\\frac{a_n-a_1}{d}+1$$', NULL, 0, 8, '2023-04-06 16:22:14', '2023-04-06 16:22:14'
//         'raiz de una potencia', '$$\\sqrt[n]{\\frac{a}{b}}=\\frac{\\sqrt[n]{a}}{\\sqrt[n]{b}}$$', NULL, 0, 2, '2023-04-06 16:24:21', '2023-04-06 16:24:21'
//         'Número de términos (En función de la suma de términos, del 1er y último término)', '$$n=\\frac{2\\cdot{S_n}}{a_1+a_n}$$', NULL, 0, 8, '2023-04-06 16:25:29', '2023-04-06 16:25:29'
//         'raiz de un producto de factores iguales', '$$\\sqrt[n]{a}\\cdot \\sqrt[n]{a}=a^\\frac{2}{n}$$', '<p>sn</p>', 0, 2, '2023-04-06 16:27:27', '2023-04-06 16:27:27'
//         'raiz de una division de factores iguales', '$$\\frac{\\sqrt[n]{a}}{\\sqrt[m]{a}}=a^\\frac{m-n}{mn}$$', '<p>sn</p>', 0, 2, '2023-04-06 16:30:29', '2023-04-06 16:30:29'
//         'raiz de un producto de varios factores', '$$\\sqrt[n]{abc}=\\sqrt[n]{a}\\cdot \\sqrt[n]{b}\\cdot \\sqrt[n]{c}$$', '<p>sn</p>', 0, 2, '2023-04-06 16:33:31', '2023-04-06 16:33:31'
//         'cantidad imaginaria', '$$\\sqrt[n]{-a}=\\sqrt[n]{a}\\cdot i$$', NULL, 0, 2, '2023-04-06 16:36:46', '2023-04-07 04:34:46'
//         'cantidad imaginaria', '$$\\sqrt[n]{-a}=\\sqrt[n]{a}\\cdot i$$', '<p>sn</p>', 0, 2, '2023-04-06 16:37:50', '2023-04-06 16:37:50'
//         'cantidad real', '$$\\sqrt[n]{a^n}=a$$', '<p>sn</p>', 0, 2, '2023-04-06 16:39:31', '2023-04-06 16:39:31'
//         'raiz de una potencia', '$$\\sqrt[n]{a}=a^\\frac{1}{n}$$', '<p>sn</p>', 0, 2, '2023-04-06 16:41:27', '2023-04-06 16:41:27'
//         'tranformacion de radical doble', '$$\\sqrt[n]{a+\\sqrt[n]{b}}=\\sqrt[n]{\\frac{a+m}{2}}+\\sqrt[n]{\\frac{a-m}{2}}\\:\\:$$', '<p>sn</p>', 0, 2, '2023-04-06 16:45:11', '2023-04-06 16:45:11'
//         'tranformaciones de radical doble', '$$\\sqrt[n]{a+\\sqrt[n]{b}}=\\sqrt[n]{\\frac{a+m}{2}}-\\sqrt[n]{\\frac{a-m}{2}} \\\\ m\\:=\\sqrt[n]{a^2-b}$$', '<p>sn</p>', 0, 2, '2023-04-06 16:51:27', '2023-04-10 23:18:41'
//         'transformacion de radical doble', '$$m\\:=\\sqrt[n]{a^2-b}$$', '<p>sn</p>', 0, 2, '2023-04-06 16:54:12', '2023-04-06 16:54:12'
//         'LEY DE GAY LUSSAC', '$$\\frac{P_2}{P_1}\\:=\\:\\frac{T_2}{T_1}$$', NULL, 0, 92, '2023-04-06 18:02:08', '2023-04-06 18:02:08'
//         'LEY DE CHARLES', '$$\\frac{V_2}{V_1}\\:=\\frac{T_2}{T_1}$$', '<p>SN</p>', 0, 92, '2023-04-06 18:04:24', '2023-04-06 18:04:24'
//         'LEY DE BOYLE  T = CTTE', '$$V_2\\cdot P_2\\:=V_1\\cdot P_1$$', '<p>sn</p>', 0, 92, '2023-04-06 18:10:23', '2023-04-06 18:10:23'
//         'LEY COMBINADO  V= ctte   P = ctte   T= ctte', '$$\\frac{P_2 \\cdot V_2}{T_2}=\\frac{P_1 \\cdot V_1}{T_1}$$', '<p>sn</p>', 0, 92, '2023-04-06 18:23:57', '2023-04-12 19:42:06'
//         'Diferencia si se conocen dos términos cualesquiera en la s posiciones \'\'m\'\'  y \'\'n\'\', si n>m', '$$d= \\frac{a_n-a_m}{n-m}$$', '<p>ch</p>', 0, 8, '2023-04-06 19:44:07', '2023-04-06 19:44:07'
//         '1er término en función de dos término cualesquiera', '$$a_1=\\frac{a_m\\cdot(n-1)-a_n\\cdot(m-1)}{n-m}$$', '<p>my</p>', 0, 8, '2023-04-06 19:49:34', '2023-04-06 19:49:34'
//         'Término general o término n_ésimo', '$$a_n=a_1\\cdot{r^{n-1}}$$', '<p>xj</p>', 0, 91, '2023-04-06 19:53:41', '2023-04-06 19:53:41'
//         'Suma de los \'\'n\'\' términos', '$$S_n=\\frac{a_1\\cdot(r^n-1)}{r-1}$$', '<p>sk</p>', 0, 91, '2023-04-06 22:09:05', '2023-04-06 22:09:05'
//         '1er término en función del último término y la razón', '$$a_1=\\frac{a_n}{r^{n-1}}$$', '<p>ru</p>', 0, 91, '2023-04-06 22:12:00', '2023-04-06 22:12:00'
//         'Logaritmo como exponente', '$$b^{\\log_b\\left(a\\right)}=a$$', NULL, 0, 6, '2023-04-06 23:06:37', '2023-04-06 23:07:30'
//         '1er término en función de la razón y la suma de términos', '$$a_1=\\frac{S_n\\cdot(n-1)}{r^{n}-1}$$', '<p>gp</p>', 0, 91, '2023-04-08 15:59:57', '2023-04-08 15:59:57'
//         'Definiciones', '$$a, b \\in \\mathbb{R} \\\\ a>\\:b;\\:si\\:a-b\\:es\\:positivo\\\\a<\\:b;\\:si\\:a-b\\:es\\:negativo$$', '<p>Las desigualdades e inecuaciones son expresiones matemáticas que relacionan dos cantidades o expresiones algebraicas mediante los signos de mayor que (&gt;), menor que (&lt;), mayor o igual que (≥) y menor o igual que (≤). Las desigualdades y las inecuaciones se diferencian en que las primeras son verdaderas para algunos valores de las variables y falsas para otros, mientras que las segundas son verdaderas para un conjunto de valores de las variables.</p>', 0, 10, '2023-04-08 16:00:11', '2023-04-11 16:10:07'
//         'La razón en función del 1er y último término', '$$r=\\sqrt[n-1]\\frac{a_n}{a_1}$$', '<p>do</p>', 0, 91, '2023-04-08 16:05:53', '2023-04-08 16:05:53'
//         'Suma de términos en función de la razón y el último término', '$$S_n=\\frac{a_n\\cdot(r^n-1)}{r^{n-1}\\cdot(r-1)}$$', '<p>fo</p>', 0, 91, '2023-04-08 16:15:19', '2023-04-08 16:15:19'
//         'Número de términos en función de la razón, el 1er y último término', '$$n=\\frac{\\log(r\\cdot{\\frac{a_n}{a_1}})}{\\log{r}}$$', '<p>tj</p>', 0, 91, '2023-04-08 16:24:17', '2023-04-08 16:24:17'
//         'Número de téminos en función de la razón, el 1er término y la suma de términos', '$$n=\\frac{\\log[{{\\frac{S_n\\cdot(r-1)+a1}{a_1}}}]}{\\log{r}}$$', '<p>dp</p>', 0, 91, '2023-04-08 16:36:10', '2023-04-08 16:36:10'
//         'La razón en función de dos términos cualesquiera', '$$r=\\sqrt[n-m]{\\frac{a_n}{a_m}}$$', '<p>zl</p>', 0, 91, '2023-04-10 16:01:13', '2023-04-10 16:01:13'
//         '1er término en función de dos términos cualesquiera', '$$a_1=a_{n\\cdot }\\sqrt[n-m]{\\left(\\frac{a_m}{a_n}\\right)^{n-1}}$$', '<p>xp</p>', 0, 91, '2023-04-10 16:05:03', '2023-04-10 16:05:03'
//         'Suma de infinitos términos', '$$S_{\\infty }=\\frac{a_1}{1-r}$$', '<p>dl</p>', 0, 91, '2023-04-10 16:08:58', '2023-04-10 16:08:58'
//         '1er término en función de la suma de infinitos términos y la razón', '$$a_1=S_{\\infty }\\cdot \\left(1-r\\right)$$', '<p>hy</p>', 0, 91, '2023-04-10 16:13:10', '2023-04-10 16:13:10'
//         'La razón en función de la suma de infinita y el 1er término', '$$r=\\frac{S_{\\infty }-a_1}{S_{\\infty }}$$', '<p>cu</p>', 0, 91, '2023-04-10 16:18:07', '2023-04-10 16:31:28'
//         'Ecuación de la recta que pasa por dos puntos', '$$y-y_1=\\frac{y_2-y_1}{x_2-x_1}\\cdot \\left(x-x_1\\right)$$', '<p>dp</p>', 0, 18, '2023-04-10 16:40:58', '2023-04-10 16:40:58'
//         'Ecuación de la recta punto - pendiente', '$$y-y_1=m\\cdot \\left(x-x_1\\right)$$', '<p>gi</p>', 0, 18, '2023-04-10 16:43:36', '2023-04-10 16:43:36'
//         'Ecuación ordenada al origen de la recta', '$$y=m\\cdot x+b$$', '<p>yp</p>', 0, 18, '2023-04-10 16:45:40', '2023-04-10 16:45:40'
//         'Ecuación simétrica de la recta', '$$\\frac{x}{a}+\\frac{y}{b}=1$$', '<p>fg</p>', 0, 18, '2023-04-10 16:51:37', '2023-04-10 16:51:37'
//         'Ecuación General de la Recta', '$$Ax+By+C=0$$', '<p>JL</p>', 0, 18, '2023-04-10 16:56:38', '2023-04-10 16:56:38'
//         'Ecuación General de la Recta', '$$Ax+By+C=0$$', NULL, 0, 18, '2023-04-10 17:03:59', '2023-04-10 17:03:59'
//         'Distancia entre dos puntos', '$$d=\\sqrt{\\left(x_2-x_1\\right)^2+\\left(y_2-y_1\\right)^2}$$', NULL, 0, 7, '2023-04-10 18:41:42', '2023-04-10 18:41:42'
//         'Pendiente de un segmento definido por dos puntos', '$$m=\\frac{y_2-y_1}{x_2-x_1}$$', '<p>xo</p>', 0, 7, '2023-04-10 18:44:16', '2023-04-10 18:44:16'
//         'Coordenadas del punto medio de un segmento', '$$x=\\frac{x_1+x_2}{2}\\space\\space\\space\\space  y  =\\frac{y_1+y_2}{2}$$', '<p>sv</p>', 0, 7, '2023-04-10 18:57:33', '2023-04-10 18:57:33'
//         'Angulo entre dos rectas, dadas sus pendientes', '$$\\tan\\theta=\\frac{m_2-m_1}{1-m_1\\cdot m_2}$$', '<p>sg</p>', 0, 7, '2023-04-10 19:01:37', '2023-04-10 19:01:37'
//         'Distancia de un punto a una recta P(xo,yo) y L: Ax+By+C=0', '$$d=\\frac{|A\\cdot x_0+B\\cdot y_0+C|}{\\sqrt{A^2+B^2}}$$', '<p>fu</p>', 0, 7, '2023-04-10 19:13:31', '2023-04-11 16:24:34'
//         'Distancia entre dos rectas paralelas  dadas sus ecuaciones: L1: Ax+By+C1       L2:  Ax+By+C2=0', '$$d=\\frac{\\left|C_2-C_1\\right|}{\\sqrt{A^2+B^2}}$$', '<p>ju</p>', 0, 7, '2023-04-10 21:56:38', '2023-04-11 02:01:26'
//         'Área de un Paralelogramo', '$$A=b\\cdot h \\\\ P=2a+2b$$', '<p>&nbsp;</p><p>Un paralelogramo es un polígono con cuatro lados, cada lado es paralelo al lado opuesto. El área de un paralelogramo se puede calcular multiplicando la longitud de un lado por la altura que se forma entre los dos lados opuestos. Esta fórmula se aplica para todos los paralelogramos, sin importar su forma o tamaño.</p><p>El perímetro de un paralelogramo se calcula sumando la longitud de cada uno de sus lados. Esta fórmula se aplica para todos los paralelogramos, sin importar su forma o tamaño.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 28, '2023-04-10 22:22:21', '2023-04-11 00:32:18'
//         'Área de un Pentágono', '$$A=\\frac{5a\\cdot b}{2} \\\\P=5L$$', '<p>&nbsp;</p><p>El área de un pentágono se puede calcular multiplicando la longitud de un lado por el apotema, que es la distancia entre el centro del pentágono y cualquier lado. Esta fórmula se aplica para todos los pentágonos, sin importar su forma o tamaño.</p><p>El perímetro de un pentágono se calcula sumando la longitud de cada uno de sus lados. Esta fórmula se aplica para todos los pentágonos, sin importar su forma o tamaño.</p><p>Si necesitas ayuda un profesor contacta con ITE +591 75553338</p>', 0, 28, '2023-04-10 22:27:49', '2023-04-11 00:34:23'
//         'Área de un Romboide', '$$A=b\\cdot h \\\\P=2b+2h$$', '<p>&nbsp;</p><p>El área de un romboide se puede calcular multiplicando la longitud de un lado por la longitud del otro lado. Esta fórmula se aplica para todos los romboides, sin importar su forma o tamaño.</p><p>El perímetro de un romboide se calcula sumando la longitud de cada uno de sus lados. Esta fórmula se aplica para todos los romboides, sin importar su forma o tamaño.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 28, '2023-04-10 22:30:01', '2023-04-11 00:38:16'
//         'LEY GENERAL DE GASES', '$$P\\cdot V = n\\cdot R\\cdot T$$', '<p>sn</p>', 0, 92, '2023-04-10 23:13:19', '2023-04-12 19:42:49'
//         'CONCENTRACION MOLAR', '$$M\\:=\\:\\frac{n}{V} [moles/litro]$$', '<p>SN</p>', 0, 92, '2023-04-10 23:23:55', '2023-04-12 19:46:46'
//         'Dominio para funciones en el denominador', '$$F\\left(x\\right)=\\frac{T\\left(x\\right)}{h\\left(x\\right)}\\\\h\\left(x\\right)\\ne 0$$', NULL, 0, 16, '2023-04-10 23:54:00', '2023-04-13 01:15:37'
//         'Dominio para funciones irracionales', '$$f\\left(x\\right)=\\sqrt[n=par]{h\\left(x\\right)}\\\\h\\left(x\\right)\\ge 0$$', '<p>Una <strong>función irracional</strong>, también conocida como <strong>función radical</strong>, es una función que tiene la variable independiente “x” bajo el símbolo de una raíz.</p>', 0, 16, '2023-04-11 00:10:54', '2023-04-13 01:16:20'
//         'Dominio para funciones logarítmicas ( Caso 1 )', '$$f\\left(x\\right)=\\log_{b\\left(x\\right)}\\left[h\\left(x\\right)\\right]\\\\h\\left(x\\right)>0$$', NULL, 0, 16, '2023-04-11 00:22:24', '2023-04-13 01:22:40'
//         'Área de un Hexágono', '$$A=\\frac{P\\cdot \\:a}{2\\:} \\\\ P=6L$$', '<p>El área del hexágono regular es igual al perímetro por la apotema partido por dos.</p><p>El perímetro de un romboide se calcula sumando la longitud de cada uno de sus lados. Esta fórmula se aplica para todos los romboides, sin importar su forma o tamaño.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 28, '2023-04-11 01:00:28', '2023-04-11 01:00:28'
//         'Paralelismo entre dos rectas; L1: A1x+B1y+C1=0  L2: A2x+B2y +C2=0', '$$\\frac{A_1}{B_1}=\\frac{A_2}{B_2}\\space\\space\\space{m_1}=m_2$$', '<p>SW</p>', 0, 7, '2023-04-11 02:23:02', '2023-04-11 02:28:52'
//         'Perpendicularidad entre dos rectas; L1: A1x+B1y+C1=0 L2: A2x+B2y +C2=0', '$$m_1=-\\frac{1}{m_2}$$', '<p>hp</p>', 0, 7, '2023-04-11 02:32:19', '2023-04-11 02:32:19'
//         'Punto de división de un segmento', '$$x=\\frac{x_1+r\\cdot x_2}{1+r}\\:\\:\\:\\:\\:\\:\\:\\:\\:\\:\\:\\:\\:y=\\frac{y_1+r\\cdot y_2}{1+r}$$', '<p>hy</p>', 0, 7, '2023-04-11 15:56:55', '2023-04-11 15:56:55'
//         'Ecuación Canónica de la Circunferencia', '$$\\left(x-h\\right)^2+\\left(y-k\\right)^2=r^2\\:\\:$$', NULL, 0, 19, '2023-04-11 16:14:20', '2023-04-11 16:14:20'
//         'Ecuación de la circunferencia con centro en el origen de coordenadas', '$$\\:x^2+y^2=r^2$$', '<p>hl</p>', 0, 19, '2023-04-11 16:16:53', '2023-04-11 16:16:53'
//         'Ley de la tricotomía', '$$a<b\\\\a=b\\\\a>b$$', '<p>Para cada par de número reales a y b, es verdadera una, y solamente una, de las proposiciones.</p><p>Por ejemplo:</p><p>$$ 7&lt;10 $$</p><p>$$ 3*2=2*3 $$</p><p>$$ 5&gt;1 $$</p>', 0, 10, '2023-04-11 16:17:15', '2023-04-11 16:26:29'
//         'Ecuación General de la Circunferencia', '$$x^2+y^2+D\\cdot x+E\\cdot y+F=0$$', '<p>OL</p>', 0, 19, '2023-04-11 16:19:58', '2023-04-11 16:19:58'
//         'Centro C(h,k) a partir de la ecuación general', '$$h=-\\frac{D}{2}\\:\\:\\:\\:\\:\\:k=-\\frac{E}{2}$$', '<p>st</p>', 0, 19, '2023-04-11 16:34:28', '2023-04-11 16:34:28'
//         'Radio \'\'r\'\' a partir de la ecuación general', '$$\\:r=\\frac{1}{2}\\cdot \\sqrt{D^2+E^2-4\\cdot F}$$', '<p>gk</p>', 0, 19, '2023-04-11 16:36:20', '2023-04-11 16:36:20'
//         'Teorema 1: Propiedad Transitiva', '$$\\left\\lbrace {a,b,c} \\right\\rbrace \\in \\mathbb {R}\\\\ Si\\:a>b\\:;b>c\\:\\Rightarrow a>c$$', '<p>La propiedad transitiva de las desigualdades establece que si a&gt;b y b&gt;c, entonces a&gt;c.&nbsp;Esta propiedad también se puede aplicar a otras desigualdades como &gt;, ≤ y ≥.</p><p>Por ejemplo:</p><p>$$ 7&gt;3\\:y\\:3&gt;1;\\:se\\:sigue\\:que\\:7&gt;1 $$</p>', 0, 10, '2023-04-11 16:45:54', '2023-04-11 20:00:14'
//         'Teorema 2: Suma', '$$\\left\\lbrace {a,b,c} \\right\\rbrace \\in \\mathbb {R}\\\\ Si\\:a>b\\:\\Rightarrow a+c>b+c$$', '<p>La propiedad de suma de desigualdades establece que si sumamos el mismo valor a ambos miembros de la expresión, la desigualdad se mantiene.&nbsp;</p><p>Por ejemplo:</p><p>$$ 5&gt;2;\\:si\\:podemos\\:sumar\\:3\\:a\\:ambos\\:lados\\\\5+3&gt;2+3;\\:la\\:desigualdad\\: seguirá\\:siendo\\:verdadera\\\\8&gt;5 $$</p><p>&nbsp;</p>', 0, 10, '2023-04-11 16:54:29', '2023-04-11 20:00:32'
//         'Parábola con eje vertical (+):Ecuación,Vértice,Foco,Directriz y Lado Recto', '$$\\left(x-h\\right)^2=+4a\\left(y-k\\right) \\\\V(h,k)\\\\F(h,k+a)\\\\y=k-a\\\\LR=4a$$', '<p>xj</p>', 0, 20, '2023-04-11 17:33:54', '2023-04-11 17:44:02'
//         'Parábola con eje vertical (-): Ecuación,Vértice,Foco,Directriz y Lado Recto', '$$\\left(x-h\\right)^2=-4a\\left(y-k\\right)\\\\V(h,k)\\\\F(h,k-a)\\\\y=k+a\\\\LR=4a$$', '<p>vu</p>', 0, 20, '2023-04-11 17:40:52', '2023-04-11 17:44:23'
//         'Parábola con eje horizontal (+): Ecuación, Vértice, Foco, Directriz y Lado Recto y', '$$\\left(y-k\\right)^2=+4a\\left(x-h\\right)\\\\V(h,k)\\\\F(h+a,k)\\\\x=h-a\\\\LR=4a$$', '<p>so</p>', 0, 20, '2023-04-11 17:52:29', '2023-04-13 01:12:47'
//         'Parábola con eje horizontal (-): Ecuación, Vértice, Foco, Directriz y Lado Recto', '$$\\left(y-k\\right)^2=-4a\\left(x-h\\right)\\\\V(h,k)\\\\F(h-a,k)\\\\x=h+a\\\\LR=4a$$', '<p>xr</p>', 0, 20, '2023-04-11 17:59:29', '2023-04-13 01:14:09'
//         'MOLARIDAD', '$$M=\\frac{m}{PM\\cdot V }\\left[\\frac{moles}{litro}\\right]$$', '<p>sn</p>', 0, 92, '2023-04-11 18:38:31', '2023-04-11 18:38:31'
//         'MOLARIDAD', '$$M\\:=\\frac{D\\cdot C }{PM\\:\\:\\cdot 100\\:\\%}\\:\\:\\:\\:\\left[\\frac{moles}{litro}\\right]$$', '<p>sn</p>', 0, 92, '2023-04-11 18:42:41', '2023-04-11 18:42:41'
//         'NORMALIDAD', '$$N=\\frac{Eq}{V}\\left[\\frac{equivalente}{litro}\\right]Eq\\:=\\frac{PM}{ oxidación\\:catión}$$', '<p>sn</p>', 0, 92, '2023-04-11 19:05:03', '2023-04-11 19:05:03'
//         'h,k,a conociendo la Ec. Gral.de la forma: x2+Dx+Ey+F=0', '$$h=-\\frac{D}{2}\\\\k=\\frac{D^2-4F}{4E}\\\\\\:a=\\frac{\\left|E\\right|}{4}$$', NULL, 0, 20, '2023-04-11 19:32:55', '2023-04-11 19:44:42'
//         'h,k,a conociendo la Ec. Gral de la forma: y2+Dy+Ex+F=0', '$$\\:h=\\frac{D^2-4F}{4E}\\\\k=-\\frac{D}{2}\\\\\\:a=\\frac{\\left|E\\right|}{4}$$', NULL, 0, 20, '2023-04-11 19:43:45', '2023-04-11 19:43:45'
//         'Si el vértice está en el origen (eje vertical +) V(0,0) ; LR= 4a', '$$x^2=+4ay\\\\F\\left(0,a\\right)\\\\\\:y=-a$$', '<p>xe</p>', 0, 20, '2023-04-11 19:54:01', '2023-04-11 19:54:01'
//         'Si el vértice está en el origen (eje vertical -) V(0,0) ; LR= 4a', '$$x^2=-4ay\\\\\\:F\\left(0,-a\\right)\\\\y=a$$', '<p>do</p>', 0, 20, '2023-04-11 19:57:11', '2023-04-11 19:57:11'
//         'Teorema 3: Multiplicación por un numero positivo', '$$Si\\:a>b\\:y\\:c>0\\Rightarrow ac>bc$$', '<p>La propiedad multiplicativa de la desigualdad establece que si multiplicamos ambos lados de una desigualdad por un número positivo, el signo de la desigualdad no se invertirá.&nbsp;Por lo tanto, al multiplicar ambos lados de una desigualdad por un número positivo, la propiedad de multiplicación por un número positivo se mantiene.</p><p>Por ejemplo:</p><p>$$ Si\\:9&gt;6,\\:se\\:sigue\\:que\\\\9*2&gt;6*2\\:\\Rightarrow 18&gt;12 $$</p>', 0, 10, '2023-04-11 19:58:55', '2023-04-11 20:00:54'
//         'Teorema 4', '$$\\left\\lbrace {a,b,c,d}\\right\\rbrace \\in \\mathbb {R}\\\\Si\\:a>b\\:; c>d\\\\\\Rightarrow (a+c)>(b+d)$$', '<p>Por ejemplo:</p><p>$$ 3&gt;-3\\:y\\:-2&gt;-4\\\\(3+(-2))&gt;(-3+(-4))\\\\1&gt;-7 $$</p>', 0, 10, '2023-04-11 20:04:03', '2023-04-12 22:43:51'
//         'Cuadrado de una suma', '$$\\left(a+b\\right)^2=a^2+2ab+b^2$$', '<p>&nbsp;</p><p>La formula para el cuadrado de una suma es la siguiente: (a + b)² = a² + 2ab + b². Esta fórmula es utilizada para calcular el cuadrado de una suma de dos números. La parte izquierda de la ecuación representa el cuadrado de la suma, mientras que las partes derechas representan los términos individuales multiplicados entre sí.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 40, '2023-04-11 22:16:14', '2023-04-11 22:16:14'
//         'Cuadrado de una Diferencia', '$$\\left(a-b\\right)^2=a^2-2ab+b^2$$', '<p>&nbsp;</p><p>La formula para el cuadrado de una diferencia es la siguiente: (a - b)² = a² - 2ab + b². Esta fórmula se utiliza para calcular el cuadrado de la diferencia entre dos números. La parte izquierda de la ecuación representa el cuadrado de la diferencia, mientras que las partes derechas representan los términos individuales multiplicados entre sí.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 40, '2023-04-11 22:18:58', '2023-04-11 22:18:58'
// INSERT INTO `formulas` (`id`, `nombre`, `formula`, `detalle`, `indice`, `tema_id`, `created_at`, `updated_at`) VALUES
//         'Suma por Diferencia', '$$\\left(a+b\\right)\\left(a-b\\right)=a^2-b^2$$', '<p>&nbsp;</p><p>La formula para la suma por diferencia es la siguiente: (a + b)(a - b) = a² - b². Esta fórmula se utiliza para calcular el producto de un número y su diferencia con otro. La parte izquierda de la ecuación representa el producto entre los dos números, mientras que la parte derecha representa el cuadrado de la diferencia entre los dos números.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 40, '2023-04-11 22:23:53', '2023-04-11 22:23:53'
//         'Cubo de una Suma', '$$\\left(a+b\\right)^3=a^3+3a^2b+3ab^2+b^3$$', '<p>&nbsp;</p><p>La formula para el cubo de una suma es la siguiente: (a + b)³ = a³ + 3a²b + 3ab² + b³. Esta fórmula se utiliza para calcular el cubo de una suma de dos números. La parte izquierda de la ecuación representa el cubo de la suma, mientras que las partes derechas representan los términos individuales elevados al cubo, al cuadrado y al primer grado, respectivamente.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 40, '2023-04-11 22:29:38', '2023-04-11 22:29:38'
//         'Cubo de una Diferencia', '$$\\left(a-b\\right)^3=a^3-3a^2b+3ab^2-b^3$$', '<p>&nbsp;,</p><p>La formula para el cubo de una diferencia es la siguiente: (a - b)³ = a³ - 3a²b + 3ab² - b³. Esta fórmula se utiliza para calcular el cubo de una diferencia entre dos números. La parte izquierda de la ecuación representa el cubo de la diferencia, mientras que las partes derechas representan los términos individuales elevados al cubo, al cuadrado y al primer grado, respectivamente.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 40, '2023-04-11 22:31:25', '2023-04-11 22:31:25'
//         'Suma de Cubos', '$$a^3+b^3=\\left(a+b\\right)\\left(a^2-ab+b^2\\right)$$', '<p>&nbsp;</p><p>La formula para la suma de cubos es la siguiente: (a³ + b³) = (a + b)(a² - ab + b²). Esta fórmula se utiliza para calcular el resultado de sumar dos números elevados al cubo. La parte izquierda de la ecuación representa el resultado de la suma de los dos números elevados al cubo, mientras que la parte derecha representa el producto entre los términos individuales multiplicados entre sí.</p><p>Si necesitas ayuda deun profesor contacta con ITE +591 75553338</p>', 0, 40, '2023-04-11 22:36:20', '2023-04-11 22:36:20'
//         'Diferencia de Cubos', '$$a^3-b^3=\\left(a-b\\right)\\left(a^2+ab+b^2\\right)$$', '<p>&nbsp;</p><p>La formula para la diferencia de cubos es la siguiente: (a³ - b³) = (a - b)(a² + ab + b²). Esta fórmula se utiliza para calcular el resultado de restar dos números elevados al cubo. La parte izquierda de la ecuación representa el resultado de la diferencia entre los dos números elevados al cubo, mientras que la parte derecha representa el producto entre los términos individuales multiplicados entre sí.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 40, '2023-04-11 22:38:54', '2023-04-11 22:38:54'
//         'Cuadrado de un Trinomio', '$$\\left(a+b+c\\right)^2=a^2+b^2+c^2+2ab+2ac+2bc$$', '<p>Un <strong>trinomio</strong> al <strong>cuadrado</strong> es igual al <strong>cuadrado</strong> del primero, más el <strong>cuadrado</strong> del seguno, más el <strong>cuadrado</strong> del tercero, más el doble del primero por el segundo, más el doble del primero por el tercero, más el doble del segundo por el tercero.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 40, '2023-04-11 22:46:20', '2023-04-11 22:46:20'
//         'Multiplicaciones de un Binomio por Trinomio', '$$\\left(a+b\\right)\\left(a^2-ab+b^2\\right)=a^3+b^3$$', '<p>En el producto de un trinomio por un trinomio, se multiplica cada uno de los términos del primero por cada uno de los términos del segundo (teniendo en cuenta la ley de los signos) y se reducen los términos semejantes.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 40, '2023-04-11 23:12:02', '2023-04-11 23:12:02'
//         'Multiplicaciones de un Binomio por Trinomio', '$$\\\\\\left(a-b\\right)\\left(a^2+ab+b^2\\right)=a^3-b^3$$', '<p>En el producto de un trinomio por un trinomio, se multiplica cada uno de los términos del primero por cada uno de los términos del segundo (teniendo en cuenta la ley de los signos) y se reducen los términos semejantes.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 40, '2023-04-11 23:12:49', '2023-04-11 23:13:33'
//         'Si el vértice está en el origen (eje horizontal +) V(0,0) ; LR= 4a', '$$y^2=+4ax\\\\F\\left(a,0\\right)\\\\y=-a$$', '<p>zj</p>', 0, 20, '2023-04-11 23:31:15', '2023-04-11 23:31:15'
//         'Si el vértice está en el origen (eje horizontal -) V(0,0) ; LR= 4a', '$$y^2=-4ax\\\\\\:F\\left(-a,0\\right)\\\\y=a$$', '<p>xd</p>', 0, 20, '2023-04-11 23:33:36', '2023-04-11 23:33:36'
//         'Binomio de Newton', '$$\\left(a+b\\right)^n=\\frac{a^n}{0}+n\\frac{a^{n-1}b}{1}+n\\left(n-1\\right)\\frac{a^{n-2}b^2}{2}$$', '<p>,</p><p>La formula para el binomio de Newton es la siguiente: (a + b)ⁿ = Σ(n,k) aⁿ-k bⁿ. Esta fórmula se utiliza para calcular el resultado de elevar un binomio a una potencia. La parte izquierda de la ecuación representa el resultado del binomio elevado a una potencia, mientras que la parte derecha representa la sumatoria de los términos individuales multiplicados entre sí.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 40, '2023-04-12 00:50:43', '2023-04-12 00:50:43'
//         'Ecuación canónica de la Elipse de eje horizontal: C(h,k)  ; a^2=b^2+c^2; LR=2b^2/a; EM= 2a;  Em= 2b', '$$\\frac{\\left(x-h\\right)^2}{a^2}+\\frac{\\left(y-k\\right)^2}{b^2}=1\\\\V(h\\pm{a},k)\\:\\:\\:F(h\\pm{c},k)$$', '<p>xñ</p>', 0, 21, '2023-04-12 16:38:26', '2023-04-14 22:27:34'
//         'NORMALIDAD', '$$N\\:=OXI\\cdot \\text{ M}\\:\\:\\left[\\frac{equivalente}{moles}\\right]\\:\\:OXI=\\frac{eq}{mol}$$', '<p>sn</p>', 0, 92, '2023-04-12 18:47:24', '2023-04-12 18:47:24'
//         'PESO EQUIVALENTES PARA ACIDOS', '$$Eq\\:=\\frac{PM}{oxidación\\:catión}$$', '<p>sn</p>', 0, 92, '2023-04-12 18:53:49', '2023-04-12 18:53:49'
//         'EQUIVALENTES PARA HIDROXIDOS', '$$Eq\\:=\\frac{PM}{oxidación\\:aniòn}$$', '<p>sn</p>', 0, 92, '2023-04-12 18:55:54', '2023-04-12 18:55:54'
//         'PESO EQUIVALENTES PARA SALES', '$$Eq\\:=\\frac{PM}{oxidación\\:catión}$$', '<p>sn</p>', 0, 92, '2023-04-12 18:58:58', '2023-04-12 18:58:58'
//         'MOLALIDAD', '$$m\\:=\\frac{n}{v}\\:\\left[\\frac{moles}{Kilogramo\\:agua}\\right]$$', '<p>sn</p>', 0, 92, '2023-04-12 19:03:01', '2023-04-12 19:03:01'
//         'SOLUBILIDAD', '$$S\\:=\\frac{m\\left(soluto\\right)}{m\\left(solvente\\right)}$$', '<p>sn</p>', 0, 92, '2023-04-12 19:34:42', '2023-04-12 19:34:42'
//         'SOLUBILIDAD GENERAL', '$$\\frac{S-S_1}{S_2-S_1}\\:=\\frac{T-T_1}{T_2-T_1}$$', '<p>SN</p>', 0, 92, '2023-04-12 19:39:25', '2023-04-12 19:39:25'
//         'VOLUMEN EN CONDICIONES NORMALES', '$$V=V_m \\cdot n (litro)$$', NULL, 0, 92, '2023-04-12 19:55:12', '2023-04-12 19:55:12'
//         'Suma de Números Complejos', '$$\\left(a+bi\\right)+\\left(c+di\\right)=\\left(a+c\\right)+\\left(b+d\\right)i$$', '<p>&nbsp;</p><p>La formula para sumar dos números complejos es:</p><p>(a + bi) + (c + di) = (a + c) + (b + d)i</p><p>donde a y c son los componentes reales de los números complejos, mientras que b y d son los componentes imaginarios.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 45, '2023-04-12 22:27:22', '2023-04-12 22:27:22'
//         'Resta de Números Complejos', '$$\\left(a+bi\\right)-\\left(c+di\\right)=\\left(a-c\\right)+\\left(b-d\\right)i$$', '<p>&nbsp;</p><p>La formula para restar dos números complejos es:</p><p>(a + bi) - (c + di) = (a - c) + (b - d)i,</p><p>donde a y c son los componentes reales de los numeros complejos, mientras que b y d son los componentes imaginarios.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 45, '2023-04-12 22:32:57', '2023-04-12 22:32:57'
//         'Multiplicación de Números Complejos', '$$\\left(a+bi\\right)\\left(c+di\\right)=\\left(ac-bd\\right)+\\left(ad+cb\\right)i$$', '<p>&nbsp;</p><p>La formula para multiplicar dos números complejos es:</p><p>(a + bi) * (c + di) = (ac - bd) + (ad + bc)i,</p><p>donde a y c son los componentes reales de los numeros complejos, mientras que b y d son los componentes imaginarios.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 45, '2023-04-12 22:37:30', '2023-04-12 22:37:30'
//         'División de Números Complejos', '$$\\frac{\\left(a+bi\\right)}{\\left(c+di\\right)}\\cdot \\frac{\\left(c-di\\right)}{\\left(c-di\\right)}$$', '<p>&nbsp;</p><p>La formula para dividir dos números complejos es:</p><p>(a + bi) / (c + di) = (ac + bd)/(c2 + d2) + (bc - ad)/(c2 + d2)i,</p><p>donde a y c son los componentes reales de los números complejos, mientras que b y d son los componentes imaginarios.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 45, '2023-04-13 00:37:14', '2023-04-13 00:37:14'
//         'Dominio para funciones logarítmicas ( Caso 2 )', '$$f\\left(x\\right)=\\log_{b\\left(x\\right)}\\left[h\\left(x\\right)\\right]\\\\b\\left(x\\right)>0$$', NULL, 0, 16, '2023-04-13 01:24:19', '2023-04-13 01:24:19'
//         'Limite de una Constante', '$$\\lim _{x\\to C}\\left(K\\right)=K$$', '<p>&nbsp;</p><p>La formula para calcular el límite de una constante es:</p><p>lim x → c (L) = L, donde c es un número real y L es un límite finito o infinito.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 23, '2023-04-13 01:42:50', '2023-04-13 01:42:50'
//         'Limite de una función Constante', '$$\\lim _{x\\to c}\\left(x\\right)=c$$', '<p>&nbsp;</p><p>La formula para calcular el límite de una función constante es:</p><p>lim x → c f(x) = f(c), donde c es un número real y f(c) es el valor de la función en ese punto.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 23, '2023-04-13 01:54:11', '2023-04-13 01:54:11'
//         'Limite del Producto de una Constante por una Función', '$$\\lim _{x\\to c\\:}Kf\\left(x\\right)=K\\lim _{x\\to c}\\:f\\left(x\\right)$$', '<p>El límite de una constante&nbsp;por una función&nbsp;es igual a la misma constante&nbsp;multiplicada por el límite de la función para un determinado punto en el cual esté definida dicha función.</p><p>Matemáticamente se expresa de la siguiente manera:<br>límx→c&nbsp;k · f(x)&nbsp;=&nbsp;k&nbsp;·&nbsp;límx→c&nbsp;f(x) &nbsp;<br>donde k es una constante perteneciente a los números reales y f(x) está definida en el punto&nbsp;c.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p>', 0, 23, '2023-04-13 02:13:03', '2023-04-13 02:13:03'
//         'Limite de la Suma de dos Funciones', '$$\\lim _{x\\to c\\:}\\left(f\\left(x\\right)+g\\left(x\\right)\\right)=\\lim _{x\\to c}\\:f\\left(x\\right)$$', '<p>El límite de la suma de dos funciones en un punto es igual a la suma del límite de cada función en ese mismo punto por separado.</p><p>La formula para calcular el límite de la suma de dos funciones es:</p><p>lim x → c f(x) + g(x) = f(c) + g(c), donde c es un número real y f(c) y g(c) son los valores de las funciones en ese punto.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338</p><p><strong>NO ENTRA LA FORMULA&nbsp;</strong></p>', 0, 23, '2023-04-13 02:21:42', '2023-04-13 02:24:05'
//         'Limite de la Resta de dos Funciones', '$$\\lim _{x\\to c\\:}\\left(f\\left(x\\right)-g\\left(x\\right)\\right)=\\lim _{x\\to c}\\:f\\left(x\\right)$$', '<p>El límite de la resta de dos funciones es igual a la resta de los límites de las funciones por separado&nbsp;para un determinado punto en el cual esté definida dichas funciones.</p><p>Matemáticamente se expresa de la siguiente manera:<br>límx→c&nbsp;[ f(x)&nbsp;-&nbsp;g(x)]&nbsp;=&nbsp;límx→c&nbsp;f(x)&nbsp;- &nbsp;límx→c&nbsp;g(x) &nbsp;<br>donde f y g son dos funciones que están definidas en el punto&nbsp;c.</p><p>Si necesitas ayuda de un profesor contacta con ITE +591 75553338<br><strong>NO ALCANZO LA FORMULA</strong></p>', 0, 23, '2023-04-13 02:28:15', '2023-04-13 02:28:15'
//         'Teorema 5:', '$$a\\in\\mathbb{R}\\\\a>0\\Leftrightarrow-a<0$$', NULL, 0, 10, '2023-04-13 17:02:16', '2023-04-13 17:04:04'
//         'Ecuación canónica de la Elipse de eje vertival: C(h,k) ; a^2=b^2+c^2; LR=2b^2/a; EM= 2a ; Em= 2b', '$$\\frac{\\left(y-k\\right)^2}{a^2}+\\frac{\\left(x-h\\right)^2}{b^2}=1\\\\V(h,k\\pm{a})\\:\\:\\:F(h,k\\pm{c})$$', NULL, 0, 21, '2023-04-13 19:27:36', '2023-04-14 22:29:03'
//         'Elipse de eje horizontal, con centro en el origen ; a^2=b^2+c^2; LR=2b^2/a; EM= 2a; Em= 2b', '$$\\frac{x^2}{a^2}+\\frac{y^2}{b^2}=1\\\\V(\\pm{a},0)\\:\\:F(\\pm{c}, 0)$$', NULL, 0, 21, '2023-04-14 22:37:54', '2023-04-14 22:37:54'
//         'Elipse de eje vertical, con centro en el origen ; a^2=b^2+c^2; LR=2b^2/a; EM= 2a; Em= 2', '$$\\frac{y^2}{a^2}+\\frac{x^2}{b^2}=1\\\\V(0, \\pm{a})\\:\\:F(0,\\pm{c})$$', '<p>xp</p>', 0, 21, '2023-04-14 22:42:04', '2023-04-14 22:42:04'
//         'Ecuación de la Hipérbola de eje horizontal: c^2=a^2+b^2; C(h,k); ER=2a; EI= 2b; LR= 2b^2/a', '$$\\frac{(x-h)^2}{a^2}-\\frac{(y-k)^2}{b^2}=1\\\\V(h\\pm{a},k)\\:\\:F(h\\pm{c},k)\\\\y-k=\\pm\\frac{b}{a}(x-h)$$', NULL, 0, 22, '2023-04-15 16:21:46', '2023-04-15 19:27:40'
//         'Ecuación de la Hipérbola de eje vertical: c^2=a^2+b^2; C(h,k); ER=2a; EI= 2b; LR= 2b^2/a', '$$\\frac{(y-k)^2}{a^2}-\\frac{(x-k)^2}{b^2}=1\\\\V(h,k±a)\\:\\:\\: F(h,k±c)\\\\y-k=\\pm\\frac{a}{b}(x-h)$$', NULL, 0, 22, '2023-04-15 19:11:09', '2023-04-15 19:29:02'
//         'Hipérbola con Centro en el origen C(0,0) y eje horizontal', '$$\\frac{x^2}{a^2}-\\frac{y^2}{b^2}=1\\\\V(\\pm{a},0)\\:\\:F(\\pm{c},0)\\\\y=\\pm\\frac{b}{a}x$$', NULL, 0, 22, '2023-04-15 19:26:19', '2023-04-15 19:26:19'
//         'Hipérbola con centro en el origen C(0,0) y eje vertical', '$$\\frac{y^2}{a^2}-\\frac{x^2}{b^2}=1\\\\V(0,\\pm{a})\\:\\:F(0,\\pm{c})\\\\y=\\pm\\frac{a}{b}x$$', NULL, 0, 22, '2023-04-15 19:38:01', '2023-04-15 19:38:01'
