<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SubCategoriaController;
use Illuminate\Routing\Router;

Route::get('/', function () { return view('welcome'); });

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');

Route::get('/categorias/{id_categoria}/subcategorias', [CategoriaController::class, 'verSubcategoria'])
    ->where('id_categoria', '[0-9]+')
    ->name('categorias.subcategorias');

Route::get('/subcategorias/{id_subcategoria}/productos', [ProductoController::class, 'verProductos'])
    ->where('id_subcategoria', '[0-9]+')
    ->name('subcategorias.productos');

Route::get('/producto/{id}', [ProductoController::class, 'detalleProducto'])->name('detalleProducto');
