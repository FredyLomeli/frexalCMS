<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Clases\Files;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InformationController extends Controller
{
    private $cInformation;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->cInformation = new Information();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informacion = $this->cInformation->takeInformation();
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
            'nombre_corto' => 'required|string|between:1,499',
            'telefono' => 'required|string|between:1,499',
            'horario' => 'required|string|between:1,499',
            'email' => 'required|string|between:1,499',
            'direccion' => 'nullable|string|between:1,499',
            'municipio' => 'nullable|string|between:1,499',
            'estado' => 'nullable|string|between:1,499',
            'no_whatsapp' => 'nullable|string|between:1,499',
            'facebook' => 'nullable|string|between:1,499',
            'instagram' => 'nullable|string|between:1,499',
            'twitter' => 'nullable|string|between:1,499',
            'youtube' => 'nullable|string|between:1,499',
            'linkedin' => 'nullable|string|between:1,499',
            'descripcion_ubicacion' => 'required|string|between:1,499',
            'informacion_footer1' => 'required|string|between:1,499',
            'informacion_footer2' => 'required|string|between:1,499',
            'telefono_oficina' => 'required|string|between:1,499',
        ]);
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
            $this->cInformation->actualizarInformacion('img_logo', $file_name);
        }
        $this->cInformation->saveGeneralData($data);
        Session::flash('info', 'Se ha guardado la información con éxito.');
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
        // validacion texto
        $data = request()->validate([
            'ban' => 'required|string|in:mision,vision,valores,nosotros',
            'branding' => 'required|string|max:1000',
        ]);
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
            $this->cInformation->actualizarInformacion('img_' . $data['ban'], $file_name);
        }
        // Guarda el texto
        $this->cInformation->actualizarInformacion($data['ban'], $data['branding']);
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
        // Gets all information about welcome enterprise.
        $data = $this->cInformation->takeWelcome();
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
        $img = information::where('name', 'img_asks')->value('value');
        return view('ask.img', compact('img'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $Information
     * @return \Illuminate\Http\Response
     */
    public function editVideo()
    {
        // Gets all information about welcome enterprise.
        $data = $this->cInformation->takeVideo();
        return view('admin.video', compact('data'));
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
        // validacion texto
        $data = request()->validate([
            "title" => 'required|string|max:500',
            "title2" => 'nullable|string|max:500',
            "description" => 'required|string|max:500',
            "link" => 'required|string|max:500',
            "boton" => 'required|string|max:500',
            "message1" => 'nullable|string|max:100',
            "icon1" => 'nullable|string|max:100',
            "description1" => 'nullable|string|max:100',
            "message2" => 'nullable|string|max:100',
            "icon2" => 'nullable|string|max:100',
            "description2" => 'nullable|string|max:100',
        ]);
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
            $this->cInformation->actualizarInformacion('img_welcome', $file_name);
        }
        // Guarda el texto
        $this->cInformation->saveWelcomeData($data);
        Session::flash('info', 'Se ha guardado la información con éxito.');
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
            $this->cInformation->actualizarInformacion('img_asks', $file_name);
            Session::flash('info', 'Se ha guardado la información con éxito.');
        }
        return redirect()->route('edit.imgasks');
    }

    /**
    * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $Information
     * @return \Illuminate\Http\Response
     */
    public function updateVideo(Request $request)
    {
        // validacion texto
        $data = request()->validate([
            "title" => 'required|string|max:500',
            "title2" => 'nullable|string|max:500',
            "link" => 'required|string|max:500',
        ]);
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/video_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/about' . $file_name, $img);
            $img_db = Information::where('name', 'video_img')->value('value');
            $files->destroyFile('/about' . $img_db);
            $this->cInformation->actualizarInformacion('video_img', $file_name);
        }
        // Guarda el texto
        $this->cInformation->saveVideoData($data);
        Session::flash('info', 'Se ha guardado la información con éxito.');
        return redirect()->route('edit.video');
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
