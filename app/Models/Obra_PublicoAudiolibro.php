<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// rename modelo
class Obra_PublicoAudiolibro extends Model
{
    use HasFactory;
    protected $table = "obra_publico_audiolibro";
    protected $fillable = [
        'publico_audiolibro_id',
        'obra_id',
    ];
}
