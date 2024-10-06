<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = 'ubicaciones';

    use HasFactory;

    protected $fillable = [
        'razon_social',
        'direccion',
        'latitud',
        'longitud',
        'rubro',
        'tipo'
    ];

    // Si deseas deshabilitar los timestamps en el modelo
    public $timestamps = false;

}
