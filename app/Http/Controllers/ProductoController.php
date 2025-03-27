<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function verProductos($id_subcategoria)
    {
        $productos = Producto::where('id_subcategoria', $id_subcategoria)
        ->with('imagenes') // Carga las imágenes relacionadas
        ->get();

    return view('productos', compact('productos'));
    }

    public function detalleProducto($id)
{
    $producto = Producto::with(['imagenes', 'marca', 'proveedor'])->findOrFail($id);
    return view('detalleProducto', compact('producto'));
}


}
