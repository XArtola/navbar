<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function proyecto()
    {

        return $this->belongsTo('App\Models\Proyecto', 'id', 'empleado_id');
    }

    public function departamento()
    {

        return $this->belongsTo('App\Models\Departamento');
    }
}
