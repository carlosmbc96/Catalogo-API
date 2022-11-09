<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra_Tematica extends Model
{
    use HasFactory;
    protected $table = "obra_tematica";
    protected $fillable = [
        'obra_id',
        'tematica_id',
    ];
}
