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
    // vista child
    public function getVistaChild()
    {
        // primera forma
        // return view('layout.child', ['name' => 'Augusto']);
        // segunda forma con with
        // return view('layout.child')->with('name', 'Jose');
        // tercera forma con compact
        $name = 'Pedro';
        return view('layout.child', compact('name'));
    }
}
