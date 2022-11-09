<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra_User extends Model
{
    use HasFactory;
    protected $table = "obra_user";
    protected $fillable = [
        'user_id',
        'obra_id',
        'relacion',
    ];
}
