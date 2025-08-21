<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacacion extends Model
{
    protected $fillable = [
        'empleado_id',
        'fecha_inicio',
        'fecha_fin',
        'motivo',
        'estado'
    ];
}
