<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    public function actualizarInformacion($campo, $valor){
        information::where('name', $campo)
            ->update(['value' => $valor]);
    }

    public function consultarBranding($campo){
        $branding = [
            'field' => $campo,
            'value' => information::where('name', $campo)->value('value'),
            'name' => '',
            'img' => information::where('name', 'img_' . $campo)->value('value'),
        ];

        switch ($campo) {
            case 'mision':
                $branding['name'] = 'Misión';
                break;
            case 'vision':
                $branding['name'] = 'Visión';
                break;
            case 'valores':
                $branding['name'] = 'Valores';
                break;
            default:
                # code...
                break;
        }
        return $branding;
    }
}
