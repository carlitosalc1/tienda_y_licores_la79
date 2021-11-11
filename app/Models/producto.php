<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model

{
    protected $table = "productos";// <-- El nombre personalizado


    protected $filiable = [
        'nombre_producto','descripcion','marca','id_categoria','cantidad','codigo_barra','precio_compra','precio_venta'
            ];
          
    public $timestamps = false;
    use HasFactory;
}
