<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificador extends Model
{
    use HasFactory;
    protected $table = "clasificadores";
    protected $fillable = [
        'nombre',
        'numero',
    ];

    public function obras()
    {
        return $this->belongsToMany(Obra::class, 'clasificador_obra');
    }
}
