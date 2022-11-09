<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor_Obra extends Model
{
    use HasFactory;
    protected $table = "autor_obra";
    protected $fillable = [
        'autor_id',
        'obra_id',
    ];
}
