<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicoEbook extends Model
{
    use HasFactory;
    protected $table = "publicos_ebook";
    protected $fillable = [
        'nombre',
    ];

    public function obras()
    {
        return $this->belongsToMany(Obra::class, 'obra_publico_ebook');
    }
}
