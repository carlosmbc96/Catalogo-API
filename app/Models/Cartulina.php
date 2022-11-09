<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartulina extends Model
{
    use HasFactory;
    protected $table = "cartulinas";
    protected $fillable = [
        'nombre',
        'numero',
    ];

    public function obras()
    {
        return $this->belongsToMany(Obra::class, 'cartulina_obra');
    }
}
