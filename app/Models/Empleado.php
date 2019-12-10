<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre', 'apellido', 'email', 'telefono'];

    public function proyecto()
    {
        return $this->belongsTo('App\Models\Proyecto', 'id', 'empleado_id');
    }

    public function proyectos()
    {
        return $this->belongsToMany('App\Models\Proyecto')->withPivot('fechainicio', 'fechafin');
    }

    //El departamento del que es jefe el empleado
    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento','id', 'jefe_id');
    }
}
