<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table = "categorias";
    protected $filiable = [
        'id','nombre'
    ];
    public $timestamps = false;
    use HasFactory;
}
