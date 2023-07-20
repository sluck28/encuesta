<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use Illuminate\Http\Request;

class Respuesta extends Controller
{
    public function index()
    {

        $preguntas = Pregunta::all()->pluck('question');
        return view('preguntas.index', compact('preguntas'));
    }

    function store()
    {
        
    }
}
