<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoLibro extends Model
{
    use HasFactory;
    protected $table = "tipos_libro";
    protected $fillable = [
        'nombre',
        'numero',
    ];

    public function obras()
    {
        return $this->belongsToMany(Obra::class, 'obra_tipo_libro');
    }
}
