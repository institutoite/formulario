<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

class EjemploSeeder extends SqlDumpSeeder
{
    public function run(): void
    {
        $this->seedInsertDump('ayuda/ejemplos.sql', 'ejemplos', true);

        $now = now();

        $ejemplos = [
            [
                'formula_id' => 1,
                'numero' => 1,
                'ejemplo' => '$$2x^2-4x-6=0$$',
                'detalle' => '<p>Identificamos a=2, b=-4 y c=-6. Luego aplicamos la formula cuadratica: $$x=\frac{-(-4)\pm\sqrt{(-4)^2-4(2)(-6)}}{2(2)}$$. Asi obtenemos $$x=3$$ y $$x=-1$$.</p>',
            ],
            [
                'formula_id' => 5,
                'numero' => 1,
                'ejemplo' => '$$3^4=3\cdot3\cdot3\cdot3=81$$',
                'detalle' => '<p>La base es 3 y el exponente es 4. Se multiplica la base por si misma cuatro veces.</p>',
            ],
            [
                'formula_id' => 6,
                'numero' => 1,
                'ejemplo' => '$$2^3\cdot2^5=2^{3+5}=2^8=256$$',
                'detalle' => '<p>Como las bases son iguales, conservamos la base y sumamos los exponentes.</p>',
            ],
            [
                'formula_id' => 8,
                'numero' => 1,
                'ejemplo' => '$$(5^2)^3=5^{2\cdot3}=5^6=15625$$',
                'detalle' => '<p>Cuando una potencia se eleva a otra potencia, se multiplican los exponentes.</p>',
            ],
            [
                'formula_id' => 13,
                'numero' => 1,
                'ejemplo' => '$$7^0=1$$',
                'detalle' => '<p>Toda base distinta de cero elevada al exponente cero vale 1.</p>',
            ],
            [
                'formula_id' => 14,
                'numero' => 1,
                'ejemplo' => '$$\frac{10^6}{10^2}=10^{6-2}=10^4$$',
                'detalle' => '<p>En cociente de potencias de igual base, se resta el exponente del denominador al del numerador.</p>',
            ],
            [
                'formula_id' => 38,
                'numero' => 1,
                'ejemplo' => '$$c^2=3^2+4^2=9+16=25,\quad c=5$$',
                'detalle' => '<p>En un triangulo rectangulo con catetos 3 y 4, la hipotenusa mide 5.</p>',
            ],
            [
                'formula_id' => 40,
                'numero' => 1,
                'ejemplo' => '$$A=\frac{8\cdot6}{2}=24$$',
                'detalle' => '<p>Para un triangulo de base 8 y altura 6, multiplicamos base por altura y dividimos entre 2.</p>',
            ],
            [
                'formula_id' => 45,
                'numero' => 1,
                'ejemplo' => '$$\sin(\theta)=\frac{3}{5}=0.6$$',
                'detalle' => '<p>Si el cateto opuesto mide 3 y la hipotenusa 5, el seno del angulo es 3/5.</p>',
            ],
            [
                'formula_id' => 50,
                'numero' => 1,
                'ejemplo' => '$$\cot(\theta)=\frac{4}{3}$$',
                'detalle' => '<p>La cotangente se obtiene dividiendo el cateto adyacente entre el cateto opuesto.</p>',
            ],
            [
                'formula_id' => 55,
                'numero' => 1,
                'ejemplo' => '$$4^{-2}=\frac{1}{4^2}=\frac{1}{16}$$',
                'detalle' => '<p>Un exponente negativo transforma la potencia en el reciproco con exponente positivo.</p>',
            ],
            [
                'formula_id' => 57,
                'numero' => 1,
                'ejemplo' => '$$\sqrt[3]{2^6}=2^{6/3}=2^2=4$$',
                'detalle' => '<p>La raiz de una potencia puede escribirse como exponente fraccionario.</p>',
            ],
            [
                'formula_id' => 163,
                'numero' => 1,
                'ejemplo' => '$$8>5$$',
                'detalle' => '<p>Entre dos numeros reales solo puede pasar una de tres relaciones: menor, igual o mayor.</p>',
            ],
            [
                'formula_id' => 167,
                'numero' => 1,
                'ejemplo' => '$$12>7,\quad 7>2\quad \Rightarrow \quad 12>2$$',
                'detalle' => '<p>La desigualdad se conserva por transitividad: si el primero supera al segundo y el segundo al tercero, el primero supera al tercero.</p>',
            ],
            [
                'formula_id' => 182,
                'numero' => 1,
                'ejemplo' => '$$(x+3)^2=x^2+6x+9$$',
                'detalle' => '<p>Aplicamos el cuadrado de un binomio: cuadrado del primero, doble producto y cuadrado del segundo.</p>',
            ],
            [
                'formula_id' => 183,
                'numero' => 1,
                'ejemplo' => '$$(x-4)^2=x^2-8x+16$$',
                'detalle' => '<p>En la diferencia, el termino central queda negativo porque se usa -2ab.</p>',
            ],
            [
                'formula_id' => 184,
                'numero' => 1,
                'ejemplo' => '$$(x+7)(x-7)=x^2-49$$',
                'detalle' => '<p>El producto de suma por diferencia elimina los terminos centrales y deja diferencia de cuadrados.</p>',
            ],
            [
                'formula_id' => 185,
                'numero' => 1,
                'ejemplo' => '$$(x+2)^3=x^3+6x^2+12x+8$$',
                'detalle' => '<p>Se aplican los coeficientes 1, 3, 3 y 1 del cubo de un binomio.</p>',
            ],
            [
                'formula_id' => 187,
                'numero' => 1,
                'ejemplo' => '$$x^3+8=(x+2)(x^2-2x+4)$$',
                'detalle' => '<p>Reconocemos 8 como 2^3 y factorizamos la suma de cubos.</p>',
            ],
            [
                'formula_id' => 204,
                'numero' => 1,
                'ejemplo' => '$$(3+2i)+(5-7i)=8-5i$$',
                'detalle' => '<p>Se suman las partes reales entre si y las partes imaginarias entre si.</p>',
            ],
            [
                'formula_id' => 205,
                'numero' => 1,
                'ejemplo' => '$$(9+4i)-(2+i)=7+3i$$',
                'detalle' => '<p>Se restan las partes reales y tambien las partes imaginarias.</p>',
            ],
            [
                'formula_id' => 206,
                'numero' => 1,
                'ejemplo' => '$$(2+3i)(4+i)=8+2i+12i+3i^2=5+14i$$',
                'detalle' => '<p>Distribuimos los terminos y usamos i^2=-1 para simplificar.</p>',
            ],
        ];

        foreach ($ejemplos as $ejemplo) {
            DB::table('ejemplos')->updateOrInsert(
                [
                    'formula_id' => $ejemplo['formula_id'],
                    'numero' => $ejemplo['numero'],
                ],
                $ejemplo + [
                    'indice' => 0,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
        }
    }
}
