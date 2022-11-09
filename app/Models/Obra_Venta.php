<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra_Venta extends Model
{
    use HasFactory;
    protected $table = "obra_venta";
    protected $fillable = [
        'venta_id',
        'obra_id',
        'precio_obra',
        'qr',
    ];
}
