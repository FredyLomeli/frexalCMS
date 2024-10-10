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
            case 'nosotros':
                $branding['name'] = 'Nosotros';
                break;
            default:
                # code...
                break;
        }
        return $branding;
    }

    public function takeInformation(){
        return [
            'nombre' => Information::where('name','nombre')->value('value'),
            'nombre_corto' => Information::where('name','nombre_corto')->value('value'),
            'telefono' => Information::where('name','telefono')->value('value'),
            'horario' => Information::where('name','horario')->value('value'),
            'email' => Information::where('name','email')->value('value'),
            'direccion' => Information::where('name','direccion')->value('value'),
            'municipio' => Information::where('name','municipio')->value('value'),
            'estado' => Information::where('name','estado')->value('value'),
            'no_whatsapp' => Information::where('name','no_whatsapp')->value('value'),
            'twitter' => Information::where('name','twitter')->value('value'),
            'youtube' => Information::where('name','youtube')->value('value'),
            'linkedin' => Information::where('name','linkedin')->value('value'),
            'facebook' => Information::where('name','facebook')->value('value'),
            'instagram' => Information::where('name','instagram')->value('value'),
            'descripcion_ubicacion' => Information::where('name','descripcion_ubicacion')->value('value'),
            'informacion_footer1' => Information::where('name','informacion_footer1')->value('value'),
            'informacion_footer2' => Information::where('name','informacion_footer2')->value('value'),
            'telefono_oficina' => Information::where('name','telefono_oficina')->value('value'),
            'img_logo' => Information::where('name','img_logo')->value('value'),
        ];
    }
}
