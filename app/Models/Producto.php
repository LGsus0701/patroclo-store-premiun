<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';  // Nombre correcto de la tabla
    protected $primaryKey = 'id_producto';  // Especificamos la clave primaria

    protected $fillable = [
        'nombre',
        'precio',
        'codigo_externo',
        'stock'
    ];

    public $timestamps = false;

    public function subcategoria()
    {
        return $this->belongsTo(Subcategoria::class, 'id_subcategoria');
    }

    // Relación con producto_imagenes
    public function imagenes()
    {
        return $this->hasMany(ProductoImagen::class, 'id_producto');
    }

    // Obtener la imagen principal (última agregada)
    public function imagenPrincipal()
    {
        return $this->hasOne(ProductoImagen::class, 'id_producto')->latestOfMany();
    }

    public function marca()
    {
        return $this->belongsTo(marca::class, 'id_marca');
    }

    public function proveedor()
    {
        return $this->belongsTo(proveedor::class, 'id_proveedor');
}

    
}
