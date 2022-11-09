<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTrabajo extends Model
{
    use HasFactory;
    protected $table = "tipos_trabajo";
    protected $fillable = [
        'nombre',
        'numero',
    ];

    //TODO: relacion
    public function obras()
    {
        return $this->hasMany(Obra::class);
    }
}
