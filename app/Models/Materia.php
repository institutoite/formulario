<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    public function imagen()
    {
        return $this->morphOne(Imagen::class, 'imageable');
    }
    public function temas()
    {
        return $this->hasMany(Tema::class);
    }
    
}
