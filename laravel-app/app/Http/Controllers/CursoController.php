<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // index
    public function getName($name = 'Invitado')
    {
        return view('welcome', ['name' => $name]);
    }
}
