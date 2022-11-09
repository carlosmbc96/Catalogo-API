<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra_PublicoEbook extends Model
{
    use HasFactory;
    protected $table = "obra_publico_ebook";
    protected $fillable = [
        'publico_ebook_id',
        'obra_id',
    ];
}
