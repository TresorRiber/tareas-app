<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tareas';

    protected $fillable = ['titulo','descripcion', 'fecha_limite', 'trabajador_id'];

    public function trabajador(){
        //Una tarea pertecnece a un solo trabajador
        return $this->belongsTo(Trabajador::class);
    }
}
