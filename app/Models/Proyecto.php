<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado','id','empleado_id');
    }

    public function empleados()
    {
        return $this->belongsToMany('App\Models\Empleado')->withPivot('fechainicio','fechafin');
    }
}
