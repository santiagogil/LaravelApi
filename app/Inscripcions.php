<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcions extends Model
{
    protected $table = 'inscripcions';

    function Alumno()
    {
        return $this->hasOne('App\Alumnos', 'id', 'alumno_id');
    }

    function Hermano()
    {
        return $this->hasOne('App\Alumnos', 'id', 'hermano_id');
    }

    function Ciclo()
    {
        return $this->hasOne('App\Ciclos', 'id', 'ciclo_id');
    }

    function Centro()
    {
        return $this->hasOne('App\Centros', 'id', 'centro_id');
    }

}
