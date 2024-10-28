<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\Url;

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
            'see' => information::where('name', 'see_' . $campo)->value('value'),
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

    public function takeVideo(){
        $data = [
            'title' => Information::where('name','video_title1')->value('value'),
            'title2' => Information::where('name','video_title2')->value('value'),
            'link' => Information::where('name','video_link')->value('value'),
            'img_video' => Information::where('name','video_img')->value('value'),
        ];

        if(!isset($data['title'])){
            $data['title'] = "Platilla bienvenida";
            $data['title2'] = "No hay datos registrados";
            $data['link'] = "https://www.youtube.com/ejemplo";
            $data['img_video'] = null;
        }
        return $data;
    }

    public function takeWelcome(){
        $data = [
            'title' => Information::where('name','welcome_title')->value('value'),
            'title2' => Information::where('name','welcome_title2')->value('value'),
            'description' => Information::where('name','welcome_description')->value('value'),
            'link' => Information::where('name','welcome_link')->value('value'),
            'boton' => Information::where('name','welcome_boton')->value('value'),
            'img' => Information::where('name','img_welcome')->value('value'),
            'message1' => Information::where('name','welcome_message1')->value('value'),
            'icon1' => Information::where('name','welcome_icon1')->value('value'),
            'description1' => Information::where('name','welcome_description1')->value('value'),
            'message2' => Information::where('name','welcome_message2')->value('value'),
            'icon2' => Information::where('name','welcome_icon2')->value('value'),
            'description2' => Information::where('name','welcome_description2')->value('value'),
        ];

        if(!isset($data['title'])){
            $data['title'] = "Plantilla bienvenida";
            $data['title2'] = "No hay datos registrados";
            $data['description'] = "No hay datos registrados";
            $data['link'] = url()->current();
            $data['boton'] = "Ver mas";
            $data['message1'] = "Llamanos";
            $data['icon1'] = "24-horas";
            $data['description1'] = "+123 456 7890";
            $data['message2'] = "Envianos correo";
            $data['icon2'] = "laptop-msg";
            $data['description2'] = "contacto@ejemplo.com";
        }
        return $data;
    }

    public function saveWelcomeData($data){
        $this->actualizarInformacion('welcome_title',$data ['title']);
        $this->actualizarInformacion('welcome_title2',$data ['title2']);
        $this->actualizarInformacion('welcome_description',$data ['description']);
        $this->actualizarInformacion('welcome_link',$data ['link']);
        $this->actualizarInformacion('welcome_boton',$data ['boton']);
        $this->actualizarInformacion('welcome_message1',$data ['message1']);
        $this->actualizarInformacion('welcome_icon1',$data ['icon1']);
        $this->actualizarInformacion('welcome_description1',$data ['description1']);
        $this->actualizarInformacion('welcome_message2',$data ['message2']);
        $this->actualizarInformacion('welcome_icon2',$data ['icon2']);
        $this->actualizarInformacion('welcome_description2',$data ['description2']);
    }

    public function saveGeneralData($data){
        $this->actualizarInformacion('nombre', $data['nombre']);
        $this->actualizarInformacion('nombre_corto', $data['nombre_corto']);
        $this->actualizarInformacion('telefono', $data['telefono']);
        $this->actualizarInformacion('horario', $data['horario']);
        $this->actualizarInformacion('email', $data['email']);
        $this->actualizarInformacion('direccion', $data['direccion']);
        $this->actualizarInformacion('municipio', $data['municipio']);
        $this->actualizarInformacion('estado', $data['estado']);
        $this->actualizarInformacion('no_whatsapp', $data['no_whatsapp']);
        $this->actualizarInformacion('facebook', $data['facebook']);
        $this->actualizarInformacion('instagram', $data['instagram']);
        $this->actualizarInformacion('twitter', $data['twitter']);
        $this->actualizarInformacion('youtube', $data['youtube']);
        $this->actualizarInformacion('linkedin', $data['linkedin']);
        $this->actualizarInformacion('descripcion_ubicacion', $data['descripcion_ubicacion']);
        $this->actualizarInformacion('informacion_footer1', $data['informacion_footer1']);
        $this->actualizarInformacion('informacion_footer2', $data['informacion_footer2']);
        $this->actualizarInformacion('telefono_oficina', $data['telefono_oficina']);
    }

    public function saveVideoData($data){
        $this->actualizarInformacion('video_title1',$data ['title']);
        $this->actualizarInformacion('video_title2',$data ['title2']);
        $this->actualizarInformacion('video_link',$data ['link']);
    }

    public function takeMision(){
        return [
            'name' => Information::where('name','mision')->value('value'),
            'img' => Information::where('name','img_mision')->value('value'),
            'see' => Information::where('name','see_mision')->value('value'),
        ];
    }

    public function takeVision(){
        return [
            'name' => Information::where('name','vision')->value('value'),
            'img' => Information::where('name','img_vision')->value('value'),
            'see' => Information::where('name','see_vision')->value('value'),
        ];
    }
    
    public function takeValores(){
        return [
            'name' => Information::where('name','valores')->value('value'),
            'img' => Information::where('name','img_valores')->value('value'),
            'see' => Information::where('name','see_valores')->value('value'),
        ];
    }

    public function takeNosotros(){
        return [
            'name' => Information::where('name','nosotros')->value('value'),
            'img' => Information::where('name','img_nosotros')->value('value'),
            'see' => Information::where('name','see_nosotros')->value('value'),
        ];
    }

    public function takeFaq(){
        return [
            'name' => Information::where('name','img_asks')->value('value'),
            'img' => Information::where('name','img_logo')->value('value'),
        ];
    }
}
