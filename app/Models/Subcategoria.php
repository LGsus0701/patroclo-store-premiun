<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model

{
    use HasFactory;
    
    protected $table = 'subcategorias';
    protected $primaryKey = 'id_subcategoria'; // Ajusta según tu tabla
    public $timestamps = false;

    protected $fillable = ['nombre', 
                         'imagen_url'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
