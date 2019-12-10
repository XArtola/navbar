<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado');
    }
    //El jefe del departamento
    public function empleado()
    {
        //Por defecto va a buscar empleado_id en empleados lo que queremos es que busque con jefe_id
        return $this->hasOne('App\Models\Empleado', 'id', 'jefe_id');
    }
}
