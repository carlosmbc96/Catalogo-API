<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo_Obra extends Model
{
    use HasFactory;
    protected $table = "grupo_obra";
    protected $fillable = [
        'grupo_id',
        'obra_id',
    ];
}
