<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = 'tb_equipo';
    protected $fillable = [
        'tipo_codigo',
        'codigo_pat',
        'ubicacion',
        'modelo',
        'serie',
        'ram',
        'dominio',
        'ip',
        'mac',
        'nom_equipo',
        'usuario',
        'licencia_w',
        'acceso_internet',
        'fecha',
        'grupo',
        'observaciones',
        'Estado',
        'idTipoEquipo',
        'idDependencia',
        'idEstado',
        'idMarca',
        'idSO',
        'idProcesador'
    ];
}
