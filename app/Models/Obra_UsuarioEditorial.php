<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra_UsuarioEditorial extends Model
{
    use HasFactory;
    protected $table = "obra_usuario";
    protected $fillable = [
        'usuario_id',
        'obra_id',
    ];
}
