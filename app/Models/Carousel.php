<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'titulo2', 'descripcion', 'img_name', 'video', 'texto', 'link'];
}
