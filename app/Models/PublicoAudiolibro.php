<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicoAudiolibro extends Model
{
    use HasFactory;
    protected $table = "publicos_audiolibro";
    protected $fillable = [
        'nombre',
    ];

    public function obras()
    {
        return $this->belongsToMany(Obra::class, 'obra_publico_audiolibro');
    }
}
