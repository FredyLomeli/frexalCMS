<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Clases\Files;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informacion = [
            'nombre' => Information::where('name','nombre')->value('value'),
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
            'informacion_footer' => Information::where('name','informacion_footer')->value('value'),
            'telefono_oficina' => Information::where('name','telefono_oficina')->value('value'),
            'img_logo' => Information::where('name','img_logo')->value('value'),
        ];
        return view('admin.informacion', compact('informacion'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function branding($branding_tipe)
    {
        if($branding_tipe === 'mision' || $branding_tipe === 'vision' ||
            $branding_tipe === 'valores' || $branding_tipe === 'nosotros'){
            $informacion = new Information;
            $branding = $informacion->consultarBranding($branding_tipe);
            return view('admin.branding', compact('branding'));
        }else abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nombre' => 'required|string|between:1,499',
            'telefono' => 'required|string|between:1,499',
            'horario' => 'required|string|between:1,499',
            'email' => 'required|string|between:1,499',
            'direccion' => 'required|string|between:1,499',
            'municipio' => 'required|string|between:1,499',
            'estado' => 'required|string|between:1,499',
            'no_whatsapp' => 'required|string|between:1,499',
            'facebook' => 'required|string|between:1,499',
            'instagram' => 'required|string|between:1,499',
            'twitter' => 'required|string|between:1,499',
            'youtube' => 'required|string|between:1,499',
            'linkedin' => 'required|string|between:1,499',
            'descripcion_ubicacion' => 'required|string|between:1,499',
            'informacion_footer' => 'required|string|between:1,499',
            'telefono_oficina' => 'required|string|between:1,499',
        ]);
        $informacion = new Information;
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/logo_' . Str::random(8) . '.' . $extension;
            $files->uploadFile($file_name, $img);
            $img_db = Information::where('name', 'img_logo')->value('value');
            $files->destroyFile($img_db);
            $informacion->actualizarInformacion('img_logo', $file_name);
        }
        $informacion->actualizarInformacion('nombre', $data['nombre']);
        $informacion->actualizarInformacion('telefono', $data['telefono']);
        $informacion->actualizarInformacion('horario', $data['horario']);
        $informacion->actualizarInformacion('email', $data['email']);
        $informacion->actualizarInformacion('direccion', $data['direccion']);
        $informacion->actualizarInformacion('municipio', $data['municipio']);
        $informacion->actualizarInformacion('estado', $data['estado']);
        $informacion->actualizarInformacion('no_whatsapp', $data['no_whatsapp']);
        $informacion->actualizarInformacion('facebook', $data['facebook']);
        $informacion->actualizarInformacion('instagram', $data['instagram']);
        $informacion->actualizarInformacion('twitter', $data['twitter']);
        $informacion->actualizarInformacion('youtube', $data['youtube']);
        $informacion->actualizarInformacion('linkedin', $data['linkedin']);
        $informacion->actualizarInformacion('descripcion_ubicacion', $data['descripcion_ubicacion']);
        $informacion->actualizarInformacion('informacion_footer', $data['informacion_footer']);
        $informacion->actualizarInformacion('telefono_oficina', $data['telefono_oficina']);
        Session::flash('info', 'Se ha guardado la informacion con exito.');
        return redirect()->route('informacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBranding(Request $request)
    {
        //dd($request->all());
        // validacion texto
        $data = request()->validate([
            'ban' => 'required|string|in:mision,vision,valores,nosotros',
            'branding' => 'required|string|max:500',
        ]);
        $informacion = new Information;
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/'. $data['ban'] .'_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/about' . $file_name, $img);
            $img_db = Information::where('name', 'img_' . $data['ban'])->value('value');
            $files->destroyFile('/about' . $img_db);
            $informacion->actualizarInformacion('img_' . $data['ban'], $file_name);
        }
        // Guarda el texto
        $informacion->actualizarInformacion($data['ban'], $data['branding']);
        Session::flash('info', 'Se ha guardado la informacion con exito.');
        return redirect()->route('branding',['branding' => $data['ban']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $Information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $Information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $Information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $Information)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $Information
     * @return \Illuminate\Http\Response
     */
    public function editWelcome()
    {
        $informacion = new Information;
        $data = [
            'title' => information::where('name','welcome_title')->value('value'),
            'description' => information::where('name','welcome_description')->value('value'),
            'link' => information::where('name','welcome_link')->value('value'),
            'boton' => information::where('name','welcome_boton')->value('value'),
            'img' => information::where('name', 'img_welcome')->value('value'),
        ];
        return view('admin.welcome', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $Information
     * @return \Illuminate\Http\Response
     */
    public function editImgAsks()
    {
        $informacion = new Information;
        $img = information::where('name', 'img_asks')->value('value');
        return view('ask.img', compact('img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $Information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $Information)
    {
        //
    }

    /**
    * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $Information
     * @return \Illuminate\Http\Response
     */
    public function updateWelcome(Request $request)
    {
        //dd($request->all());
        // validacion texto
        $data = request()->validate([
            "title" => 'required|string|max:500',
            "description" => 'required|string|max:500',
            "link" => 'required|string|max:500',
            "boton" => 'required|string|max:500',
        ]);
        $informacion = new Information;
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/welcome_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/about' . $file_name, $img);
            $img_db = Information::where('name', 'img_welcome')->value('value');
            $files->destroyFile('/about' . $img_db);
            $informacion->actualizarInformacion('img_welcome', $file_name);
        }
        // Guarda el texto
        $informacion->actualizarInformacion('welcome_title', $data['title']);
        $informacion->actualizarInformacion('welcome_description', $data['description']);
        $informacion->actualizarInformacion('welcome_boton', $data['boton']);
        $informacion->actualizarInformacion('welcome_link', $data['link']);
        Session::flash('info', 'Se ha guardado la informacion con exito.');
        return redirect()->route('edit.welcome');
    }

        /**
    * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $Information
     * @return \Illuminate\Http\Response
     */
    public function updateImgAsks(Request $request)
    {
        $informacion = new Information;
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/asks' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/about' . $file_name, $img);
            $img_db = Information::where('name', 'img_asks')->value('value');
            $files->destroyFile('/about' . $img_db);
            $informacion->actualizarInformacion('img_asks', $file_name);
            Session::flash('info', 'Se ha guardado la informacion con exito.');
        }
        return redirect()->route('edit.imgasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $Information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $Information)
    {
        //
    }
}
