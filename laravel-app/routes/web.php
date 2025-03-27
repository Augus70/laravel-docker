<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\OperacionesController;
use App\Http\Middleware\Suscribed;

Route::get('/', function () {
    return view('welcome', ['name' => 'Augusto','title' => 'Curso de Laravel Avanzado']);
});

// envio de variables a la vista
// Route::get('/welcome-saludo', function () {
//     $nombre = 'Augusto';
//     return view('welcome', ['nombre' => $nombre]);
// })->name('hola-saludo');

// envio de variables a la vista con controlador
Route::get('/welcome-saludo/{name?}', [CursoController::class, 'getName'])->name('hola-saludo');

Route::get('/hola', function () {
    return 'Hola Mundo';
});

// ruta para una suma
Route::get('/suma/{num1}/{num2}', function ($num1, $num2) {
    return $num1 + $num2;
});

// ruta con parametro opcional para el nombre
Route::get('/saludo/{nombre?}', function ($nombre = 'Invitado') {
    return 'Hola ' . $nombre;
})->where('nombre', '[A-Za-z]+');// restriccion para que solo acepte letras, de otra forma retornara un 404

// ejemplo de redireccion
Route::get('/redireccion', function () {
    return redirect('/hola');
});

// otra redireccion
Route::redirect('/redireccion2', '/hola', 301);

// tarea
// suma resta multiplicacion y division, logica en el controlador
// Grupo de rutas para "operaciones"
Route::prefix('operaciones')->group(function () {
    Route::get('/suma/{num1?}/{num2?}', [OperacionesController::class, 'suma']);
    Route::get('/resta/{num1?}/{num2?}', [OperacionesController::class, 'resta']);
    Route::get('/multiplicacion/{num1?}/{num2?}', [OperacionesController::class, 'multiplicacion']);
    Route::get('/division/{num1?}/{num2?}', [OperacionesController::class, 'division']);
});

// resource genera las rutas para un recurso CRUD
Route::resource('users', AdminUserController::class)->parameters(['users' => 'admin_user']);

// ruta de prueba para probar middleware Suscribed
Route::get('/suscribed', function () {
    return 'Solo usuarios suscritos';
})->middleware(Suscribed::class);

//ruta directa a la vista example
Route::view('/ejemplo', 'example', ['name' => 'Augusto']);

Route::get('/vistaHome', function () {
    return view('layout.child');
});

// ruta con controlador para la vista
Route::get('/vistaHome2', [CursoController::class, 'getVistaChild']);