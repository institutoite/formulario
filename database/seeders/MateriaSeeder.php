<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materia;
use App\Models\Imagen;

class MateriaSeeder extends Seeder
{
    private $imagenesMaterias = [
        1 => [ // Matemáticas
            'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?ixlib=rb-4.0.3',
            'https://images.unsplash.com/photo-1549558549-415fe4c37b60?ixlib=rb-4.0.3',
            'https://images.pexels.com/photos/5904932/pexels-photo-5904932.jpeg'
        ],
        2 => [ // Física
            'https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3',
            'https://images.unsplash.com/photo-1462332420958-ab05b6e45014?ixlib=rb-4.0.3',
            'https://images.pexels.com/photos/256450/pexels-photo-256450.jpeg'
        ],
        3 => [ // Química
            'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?ixlib=rb-4.0.3',
            'https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?ixlib=rb-4.0.3',
            'https://images.pexels.com/photos/2280571/pexels-photo-2280571.jpeg'
        ],
        4 => [ // Lenguaje
            'https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-4.0.3',
            'https://images.unsplash.com/photo-1506880018603-83d5b814b5a6?ixlib=rb-4.0.3',
            'https://images.pexels.com/photos/904616/pexels-photo-904616.jpeg'
        ],
        5 => [ // Estadística
            'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3',
            'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3',
            'https://images.pexels.com/photos/590022/pexels-photo-590022.jpeg'
        ]
    ];

    public function run(): void
    {
        Materia::create([
            "id" => 1,
            "materia" => "Matemática",
            "slogan" => "¡Descubre el poder de las matemáticas!",
            "detalle" => "Ciencia fundamental para el razonamiento lógico y resolución de problemas en ciencia, tecnología e ingeniería."
        ]);
        
        Materia::create([
            "id" => 2,
            "materia" => "Física",
            "slogan" => "La ciencia que desafía los límites de lo posible",
            "detalle" => "Estudio de las leyes que gobiernan la materia y energía, desde partículas subatómicas hasta el cosmos."
        ]);
        
        Materia::create([
            "id" => 3,
            "materia" => "Química",
            "slogan" => "Transforma la materia",
            "detalle" => "Ciencia que estudia la composición, propiedades y transformaciones de la materia."
        ]);
        
        Materia::create([
            "id" => 4,
            "materia" => "Lenguaje",
            "slogan" => "Herramienta poderosa de comunicación",
            "detalle" => "Estudio de la comunicación verbal y escrita, esencial para la interacción humana."
        ]);
        
        Materia::create([
            "id" => 5,
            "materia" => "Estadística",
            "slogan" => "Decisiones inteligentes basadas en datos",
            "detalle" => "Ciencia de recolectar, analizar e interpretar datos para tomar decisiones informadas."
        ]);
        
        foreach ($this->imagenesMaterias as $materiaId => $urls) {
            // Selecciona una imagen aleatoria para cada materia
            $urlAleatoria = $urls[array_rand($urls)];
            
            Imagen::updateOrCreate(
                [
                    'imageable_id' => $materiaId,
                    'imageable_type' => 'App\Models\Materia'
                ],
                [
                    'url' => $urlAleatoria,
                ]
            );
        }

        // Imagen::create([
        //     "imageable_id"=>1,
        //     "imageable_type"=>"App\Models\Materia",
        //     "url"=>"materias/imagen.jpg",
        // ]);
        // Imagen::create([
        //     "imageable_id"=>2,
        //     "imageable_type"=>"App\Models\Materia",
        //     "url"=>"materias/imagen.jpg",
        // ]);
        // Imagen::create([
        //     "imageable_id"=>3,
        //     "imageable_type"=>"App\Models\Materia",
        //     "url"=>"materias/imagen.jpg",
        // ]);
        // Imagen::create([
        //     "imageable_id"=>4,
        //     "imageable_type"=>"App\Models\Materia",
        //     "url"=>"materias/imagen.jpg",
        // ]);
        // Imagen::create([
        //     "imageable_id"=>5,
        //     "imageable_type"=>"App\Models\Materia",
        //     "url"=>"materias/imagen.jpg",
        // ]);
    }
}
