<?php

namespace App\Models;

use App\Models\Subcategoria as ModelsSubcategoria;
use Illuminate\Database\Eloquent\Model;
use Subcategoria;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'imagen_url'
    ];

    public $timestamps = false;

    //relacion con subcategoria

    public function subcategorias()
    {
        return $this->hasMany(ModelsSubcategoria::class, 'id_categoria');
    }
}
