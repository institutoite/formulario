<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MatematicaController extends Controller
{
    
    public function index()
    {
        return view('matematica.index');
    }

    
}
