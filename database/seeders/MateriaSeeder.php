<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materia;
use App\Models\Imagen;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materia::create([
            "materia"=>"Matemática",
            "slogan"=>"¡Descubre el poder de las matemáticas con nosotros!",
            "detalle"=>"Las matemáticas son una materia fundamental en la educación, que abarca una amplia variedad de conceptos y herramientas para el razonamiento lógico y la resolución de problemas. A través de las matemáticas, se pueden entender y describir fenómenos naturales, sociales y tecnológicos de una manera más precisa y profunda. Además, el dominio de las matemáticas es esencial para muchas carreras y profesiones en las áreas de ciencia, tecnología, ingeniería, finanzas, entre otras. Aprender matemáticas puede ser un desafío, pero también es una experiencia emocionante y gratificante que puede abrir muchas puertas en el futuro."
        ]);
        Materia::create([
            "materia"=>"Física",
            "slogan"=>"La Física es la ciencia que desafía los límites de lo posible",
            "detalle"=>"La Física es una ciencia fundamental que se encarga del estudio de la naturaleza y sus leyes. A través de la observación, la medición y el razonamiento lógico, la Física nos permite entender el mundo que nos rodea, desde las partículas subatómicas hasta los cuerpos más grandes del universo.\n En la materia de Física, aprenderás acerca de los principios fundamentales que rigen el comportamiento de la materia y la energía, incluyendo la mecánica, la termodinámica, la óptica, la electromagnetismo y la física moderna. A través de experimentos, simulaciones y cálculos matemáticos, desarrollarás habilidades para analizar, describir y predecir fenómenos físicos.\nAdemás, la Física tiene aplicaciones prácticas en una amplia variedad de campos, desde la ingeniería y la tecnología hasta la medicina y la astronomía. Conocer los principios de la Física es esencial para entender y abordar los desafíos que enfrenta nuestra sociedad en la actualidad, y para desarrollar soluciones innovadoras para el futuro.\n En resumen, la materia de Física es fundamental para comprender el mundo en que vivimos y para desarrollar habilidades para resolver problemas y desafíos en una amplia variedad de campos."
        ]);
        Materia::create([
            "materia"=>"Química",
            "slogan"=>"Aprende Química y transforma la materia",
            "detalle"=>"La Química es la ciencia que se encarga del estudio de la materia y sus transformaciones. Esta materia nos permite comprender cómo se combinan los átomos para formar moléculas, cómo se producen las reacciones químicas y cómo se pueden crear nuevos materiales. La Química es esencial en muchas áreas de la ciencia y la tecnología, desde la medicina hasta la ingeniería, pasando por la fabricación de materiales y la producción de alimentos. En resumen, la Química es una ciencia fundamental que nos ayuda a entender el mundo que nos rodea y nos da herramientas para resolver problemas y crear soluciones innovadoras."
        ]);
        Materia::create([
            "materia"=>"Lenguaje",
            "slogan"=>"El lenguaje es la herramienta más poderosa para la comunicación",
            "detalle"=>"La materia de Lenguaje se enfoca en el estudio de la comunicación, tanto verbal como escrita. En esta materia, los estudiantes aprenden a expresarse con claridad y precisión, a comprender y analizar diferentes tipos de textos, y a utilizar técnicas y estrategias de comunicación efectiva en diversas situaciones. Además, el estudio del Lenguaje incluye la exploración de la gramática, la sintaxis, la semántica y la pragmática, lo que permite a los estudiantes comprender la estructura y el uso del lenguaje. La materia de Lenguaje es esencial para la vida personal y profesional, ya que la comunicación es una habilidad clave en cualquier campo o industria. A través del estudio del Lenguaje, los estudiantes pueden mejorar su capacidad para comunicarse y conectarse con los demás de manera efectiva."
        ]);
        Materia::create([
            "materia"=>"Estadística",
            "slogan"=>"La estadística te permite tomar decisiones inteligentes basadas en datos",
            "detalle"=>"La estadística es una ciencia que se ocupa de la recolección, análisis e interpretación de datos. La estadística es esencial en muchos campos, como la investigación científica, la toma de decisiones empresariales y la planificación gubernamental. La estadística nos permite describir y entender las tendencias y patrones en los datos, y nos da herramientas para hacer predicciones y tomar decisiones informadas basadas en evidencia. En resumen, la estadística es una herramienta importante para el análisis de datos y la investigación, y es esencial para comprender y solucionar problemas en una amplia variedad de áreas y disciplinas."
        ]);

        Imagen::create([
            "imageable_id"=>1,
            "imageable_type"=>"App\Models\Materia",
            "url"=>"materias/imagen.jpg",
        ]);
        Imagen::create([
            "imageable_id"=>2,
            "imageable_type"=>"App\Models\Materia",
            "url"=>"materias/imagen.jpg",
        ]);
        Imagen::create([
            "imageable_id"=>3,
            "imageable_type"=>"App\Models\Materia",
            "url"=>"materias/imagen.jpg",
        ]);
        Imagen::create([
            "imageable_id"=>4,
            "imageable_type"=>"App\Models\Materia",
            "url"=>"materias/imagen.jpg",
        ]);
        Imagen::create([
            "imageable_id"=>5,
            "imageable_type"=>"App\Models\Materia",
            "url"=>"materias/imagen.jpg",
        ]);
    }
}
