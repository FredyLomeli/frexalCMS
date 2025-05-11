<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'apellidos',
        'puesto',
        'foto',
        'telefono',
        'celular',
        'email',
        'descripcion',
        'web',
        'facebook',
        'twitter',
        'instagram',
        'adicional1',
        'adicional2',
        'adicional3',
        'adicional4',
    ];
}
