<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class SubCategoriaController extends Controller
{
    public function index($id)
    {
        $categoria = Categoria::with('subcategorias')->findOrFail($id);
        return view('categorias.subcategorias', compact('categoria'));
    }
}    


