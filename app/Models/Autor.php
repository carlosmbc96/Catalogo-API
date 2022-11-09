<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $table = "autores";
    protected $fillable = [
        'nombre',
        'fecha_nacimiento',
        'biografia',
        'peq_biografia',
        'correo',
        'redes',
        'perfil',
    ];

    public function obras()
    {
        return $this->belongsToMany(Obra::class, 'autor_obra');
    }
}
