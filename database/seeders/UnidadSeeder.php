<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unidad;

class UnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unidad::create(["abreviatura"=>'m', "unidad"=>"Metro","dimension_id"=>1]);
        Unidad::create(["abreviatura"=>'cm', "unidad"=>"centrimetro","dimension_id"=>1]);
        Unidad::create(["abreviatura"=>'mm', "unidad"=>"milimetro","dimension_id"=>1]);
        Unidad::create(["abreviatura"=>'km',"unidad"=>"Kilomometro", "dimension_id"=>1]);
        Unidad::create(["abreviatura"=>'dm',"unidad"=>"decimetro", "dimension_id"=>1]);
        Unidad::create(["abreviatura"=>'Hm', "unidad"=>"Hectometro","dimension_id"=>1]);
    }
}
