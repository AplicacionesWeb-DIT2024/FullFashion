<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    #protected $fillable = ['codigo', 'nombre', 'marca_id', 'genero', 'categoria', 'talla', 'color', 'precio', 'cantidad_en_stock'];
    protected $fillable = [
        'codigo', 'nombre', 'marca_id', 'genero', 'categoria', 
        'talla', 'color', 'precio', 'cantidad_en_stock'
    ];

    // Definir la relación con Marca
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
