<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra_TipoLibro extends Model
{
    use HasFactory;
    protected $table = "obra_tipo_libro";
    protected $fillable = [
        'tipo_libro_id',
        'obra_id',
    ];
}
