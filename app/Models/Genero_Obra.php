<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero_Obra extends Model
{
    use HasFactory;
    protected $table = "genero_obra";
    protected $fillable = [
        'genero_id',
        'obra_id',
    ];
}
