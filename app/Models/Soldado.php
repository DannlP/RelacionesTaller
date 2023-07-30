<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soldado extends Model
{
    use HasFactory;

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class, 'soldado_servicio', 'COd_s', 'Cod_ser');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
