<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestionable_Obra extends Model
{
    use HasFactory;
    protected $table = "gestionable_obra";
    protected $fillable = [
        'gestionable_id',
        'obra_id',
        'portada',
    ];
}
