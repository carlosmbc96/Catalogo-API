<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Papel extends Model
{
    use HasFactory;
    protected $table = "papeles";
    protected $fillable = [
        'nombre',
        'numero',
    ];

    public function obras()
    {
        return $this->belongsToMany(Obra::class, 'obra_papel');
    }
}
