<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'descripcion', 'categoria', 'img_name'];

    public function meter()
    {
        return $this->hasMany('App\Meter','products_id');
    }
}
