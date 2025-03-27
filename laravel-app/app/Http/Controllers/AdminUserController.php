<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    // definir las rutas para el recurso
    public function index()
    {
        return 'Listado de usuarios';
    }
    public function create()
    {
        return 'Crear usuario';
    }
    public function store(Request $request)
    {
        return 'Guardar usuario';
    }
    public function show($id)
    {
        return 'Mostrar usuario ' . $id;
    }
    public function edit($id)
    {
        return 'Editar usuario ' . $id;
    }
    public function update(Request $request, $id)
    {
        return 'Actualizar usuario ' . $id;
    }
    public function destroy($id)
    {
        return 'Eliminar usuario ' . $id;
    }
}
