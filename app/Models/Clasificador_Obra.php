<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificador_Obra extends Model
{
    use HasFactory;
    protected $table = "clasificador_obra";
    protected $fillable = [
        'clasificador_id',
        'obra_id',
    ];
}
