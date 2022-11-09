<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartulina_Obra extends Model
{
    use HasFactory;
    protected $table = "cartulina_obra";
    protected $fillable = [
        'cartulina_id',
        'obra_id',
    ];
}
