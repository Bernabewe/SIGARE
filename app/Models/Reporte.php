<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Detalle;
use App\Models\TipoReporte;

class Reporte extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'tipo_id',
        'detalle_id',
        'user_id',
        'fecha',
        'especialidad',
        'grupo',
        'turno',
        'generacion'
    ];
    public function detalle(){
        return $this->belongsTo(Detalle::class, 'detalle_id' , 'id')->with(['alumno']);
    }

    public function tipo(){
        return $this->belongsTo(TipoReporte::class, 'tipo_id', 'id');
    }
}
