<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = "ventas";
    protected $fillable = [
        'nombre',
        'direccion',
    ];

    public function obras()
    {
        return $this->belongsToMany(Obra::class, 'obra_venta');
    }
}
