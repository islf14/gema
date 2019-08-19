<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
     protected $table = 'tb_registro';
     protected $fillable = [
        'problema',
        'problema_real',
        'solucion',
        'fecha',
        'tipoMant',
        'recomendaciones',
        'user_id',
        'idEquipo'
    ];
}
