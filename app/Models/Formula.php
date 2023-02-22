<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    use HasFactory;
    public function imagen()
    {
        return $this->morphOne(Imagen::class, 'imageable');
    }
    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }
    public function variables(){
        return $this->hasMany(Variable::class);
    }
}
