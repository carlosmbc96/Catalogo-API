<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra_Papel extends Model
{
    use HasFactory;
    protected $table = "obra_papel";
    protected $fillable = [
        'papel_id',
        'obra_id',
    ];
}
