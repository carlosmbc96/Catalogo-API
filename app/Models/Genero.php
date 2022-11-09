<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    protected $table = "generos";
    protected $fillable = [
        'nombre',
        'numero',
    ];

    public function obras()
    {
        return $this->belongsToMany(Obra::class, 'genero_obra');
    }
}
