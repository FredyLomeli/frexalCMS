<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interesados extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'detalles',
    ];
}
