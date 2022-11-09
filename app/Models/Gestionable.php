<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestionable extends Model
{
    use HasFactory;
    protected $table = "gestionables";
    protected $fillable = [
        'titulo',
        'eslogan',
        'titulo_carrusel',
    ];

    public function obras()
    {
        return $this->belongsToMany(Obra::class, 'gestionable_obra')->withPivot('portada');
    }
}
