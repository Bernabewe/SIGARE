<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoReporte extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function reportes(){
        return $this->hasMany(Reporte::class, 'tipo_id')->with('detalle');
    }

}
