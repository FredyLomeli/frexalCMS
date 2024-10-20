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

        Information::create(['name' => 'welcome_title',]);
        Information::create(['name' => 'welcome_title2',]);
        Information::create(['name' => 'welcome_description',]);
        Information::create(['name' => 'welcome_link',]);
        Information::create(['name' => 'welcome_boton',]);
        Information::create(['name' => 'img_welcome',]);
        Information::create(['name' => 'welcome_message1',]);
        Information::create(['name' => 'welcome_icon1',]);
        Information::create(['name' => 'welcome_description1',]);
        Information::create(['name' => 'welcome_message2',]);
        Information::create(['name' => 'welcome_icon2',]);
        Information::create(['name' => 'welcome_description2',]);

        Information::create(['name' => 'video_title1',]);
        Information::create(['name' => 'video_title2',]);
        Information::create(['name' => 'video_link',]);
        Information::create(['name' => 'video_img',]);
    }
}
