<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Alumno;

class Detalle extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'motivo',
        'solicitante',
        'numero_control',
        'tutor',
        'fecha_inicial',
        'fecha_final',
        'articulo',
        'compromisos',
        'domicilio',
        'area_canalizacion',
        'observaciones'
    ];
    public function alumno(){
        return $this->belongsTo(Alumno::class, 'numero_control', 'numero_control');
    }
}
