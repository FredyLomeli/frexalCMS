<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'img_name'];

    public function products()
    {
        return $this->hasMany('App\Models\Products','categoria');
    }

    public function meter()
    {
        return $this->hasMany('App\Models\Meter','category_id');
    }
}
