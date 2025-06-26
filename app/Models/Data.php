<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'data';

    protected $fillable = [
        'fecha_registro',
        'kpi',
        'agente_comercial',
        'asesor',
        'pdv',
        'referencia',
        'presentacion',
        'galonaje',
        'cantidad',
        'valor_unitario'
    ];
}
