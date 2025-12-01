<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsForms extends Model
{
    use HasFactory;

    // Permitimos asignación masiva para estos campos
    protected $fillable = ['name', 'type', 'values', 'visible'];
}
