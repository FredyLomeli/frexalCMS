<?php

namespace App\Http\Controllers;

use App\Models\information;
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
            'nombre' => information::where('name','nombre')->value('value'),
            'telefono' => information::where('name','telefono')->value('value'),
            'horario' => information::where('name','horario')->value('value'),
            'email' => information::where('name','email')->value('value'),
            'direccion' => information::where('name','direccion')->value('value'),
            'municipio' => information::where('name','municipio')->value('value'),
            'estado' => information::where('name','estado')->value('value'),
            'no_whatsapp' => information::where('name','no_whatsapp')->value('value'),
            'facebook' => information::where('name','facebook')->value('value'),
            'instagram' => information::where('name','instagram')->value('value'),
            'descripcion_empresa' => information::where('name','descripcion_empresa')->value('value'),
            'informacion_footer' => information::where('name','informacion_footer')->value('value'),
            'telefono_oficina' => information::where('name','telefono_oficina')->value('value'),
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
            $branding_tipe === 'valores'){
            $informacion = new information;
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
            'descripcion_empresa' => 'required|string|between:1,499',
            'informacion_footer' => 'required|string|between:1,499',
            'telefono_oficina' => 'required|string|between:1,499',
        ]);
        $informacion = new information;
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
        $informacion->actualizarInformacion('descripcion_empresa', $data['descripcion_empresa']);
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
            'ban' => 'required|string|in:mision,vision,valores',
            'branding' => 'required|string|max:500',
        ]);
        $informacion = new information;
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/'. $data['ban'] .'_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/about' . $file_name, $img);
            $img_db = information::where('name', 'img_' . $data['ban'])->value('value');
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
     * @param  \App\information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(information $information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, information $information)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(information $information)
    {
        //
    }
}
