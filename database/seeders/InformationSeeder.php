<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Information;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Information::create(['name' => 'nombre',]);
        Information::create(['name' => 'nombre_corto',]);
        Information::create(['name' => 'telefono',]);
        Information::create(['name' => 'horario',]);
        Information::create(['name' => 'email',]);
        Information::create(['name' => 'direccion',]);
        Information::create(['name' => 'municipio',]);
        Information::create(['name' => 'estado']);
        Information::create(['name' => 'no_whatsapp',]);
        Information::create(['name' => 'twitter',]);
        Information::create(['name' => 'linkedin',]);
        Information::create(['name' => 'facebook',]);
        Information::create(['name' => 'instagram',]);
        Information::create(['name' => 'youtube',]);
        Information::create(['name' => 'descripcion_ubicacion',]);
        Information::create(['name' => 'informacion_footer1',]);
        Information::create(['name' => 'informacion_footer2',]);
        Information::create(['name' => 'telefono_oficina',]);
        Information::create(['name' => 'img_logo',]);
    }
}
