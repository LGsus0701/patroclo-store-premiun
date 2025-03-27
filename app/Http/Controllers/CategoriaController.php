<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Subcategoria;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::all();
        return view('categorias', compact('categorias'));
    }

    // obtener subcategoria

    public function verSubcategoria($id_categoria)
{
    $subcategorias = Subcategoria::where('id_categoria', $id_categoria)->get();

    // Depuración
    if ($subcategorias->isEmpty()) {
        dd("No hay subcategorías para la categoría: " . $id_categoria);
    }

    return view('subcategorias', compact('subcategorias'));
}

}
