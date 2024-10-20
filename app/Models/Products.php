<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'descripcion_corta', 'descripcion', 'categoria', 'img_name'];

    public function category()
    {
        return $this->hasOne('App\Models\Category','id','categoria');
    }

    public function meter()
    {
        return $this->hasMany('App\Models\Meter','products_id');
    }
}
