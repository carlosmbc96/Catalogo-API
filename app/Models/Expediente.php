<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;
    protected $table = "expedientes";
    protected $fillable = [
        'nombre',
    ];

    public function obras()
    {
        return $this->hasMany(Obra::class);
    }
}
