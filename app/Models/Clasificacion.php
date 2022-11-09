<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    use HasFactory;
    protected $table = "clasificaciones";
    protected $fillable = [
        'nombre',
        'siglas',
    ];

    //TODO: relacion
    public function obras()
    {
        return $this->hasMany(Obra::class);
    }
}
