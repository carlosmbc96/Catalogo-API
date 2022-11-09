<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma_Obra extends Model
{
    use HasFactory;
    protected $table = "idioma_obra";
    protected $fillable = [
        'idioma_id',
        'obra_id',
    ];
}
