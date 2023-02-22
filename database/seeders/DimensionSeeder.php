<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dimension;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dimension::create(['dimension'=>"Ninguno"]);
        Dimension::create(['dimension'=>"longitud"]);
        Dimension::create(['dimension'=>"masa"]);
        Dimension::create(['dimension'=>"tiempo"]);
        Dimension::create(['dimension'=>"velocidad"]);
        Dimension::create(['dimension'=>"fuerza"]);
        Dimension::create(['dimension'=>"densidad"]);
        Dimension::create(['dimension'=>"volumen"]);
        Dimension::create(['dimension'=>"area"]);
        Dimension::create(['dimension'=>"superficie"]);
    }
}
