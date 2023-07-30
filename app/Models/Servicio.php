<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    
    public function soldados()
    {
        return $this->belongsToMany(Soldado::class, 'soldado_servicio', 'Cod_ser', 'COd_s');
    }
}

