<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [];
    // metodo index
    public function index()
    {
        // recuperar valor de cookie
        $cookie = request()->cookie('posts');
        // verificar si existe la cookie
        if ($cookie) {
            // decodificar el json
            $this->posts = json_decode($cookie);
        }
        // dd($this->posts);
        // return vista de index
        return view('posts.index', [
            'posts' => $this->posts,
            'title' => 'Listado de posts',
        ]);
    }
    // metodo create
    public function create()
    {
        return view('posts.create', [
            'title' => 'Crear post',
        ]);
    }

    // metodo store
    public function store(Request $request)
    {
        // validar los datos
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // // guardar el post
        // $this->posts[] = [
        //     'title' => $request->input('title'),
        //     'content' => $request->input('content'),
        // ];
        // dd($this->posts);
        // guardar temporalmente en cookie
        // validar si existe la cookie, si existe agregar el nuevo post
        if (request()->hasCookie('posts')) {
            // decodificar el json
            $this->posts = json_decode(request()->cookie('posts'), true);
        }
        // agregar el nuevo post al array
        $this->posts[] = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ];
        $cookie = cookie('posts', json_encode($this->posts), 60);

        // redireccionar a la vista de index con la cookie
        return redirect()->route('posts.index')->withCookie($cookie);
    }
}
