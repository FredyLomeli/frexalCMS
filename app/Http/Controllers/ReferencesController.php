<?php

namespace App\Http\Controllers;

use App\Models\References;
use App\Clases\Files;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReferencesController extends Controller
{
    private $cReferencia;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->cReferencia = new References();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referencias = References::get();
        return view('referencias.list', compact('referencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('referencias.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $referencia = null;
        $data = request()->validate([
            'name' => 'required|string|max:254',
        ]);
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/ref_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/reference' . $file_name, $img);
            $data['img_name'] = $file_name;
            $referencia = $this->cReferencia->create($data);
        } else
            return redirect()->back()->with('file_img', 'Selecciona una imagen para crear el registro.');

        Session::flash('info', 'Se ha guardado la información con éxito.');
        return redirect()->route('referencia.edit', $referencia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\References  $references
     * @return \Illuminate\Http\Response
     */
    public function edit(References $referencia)
    {
        return view('referencias.edit', compact('referencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\References  $references
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, References $referencia)
    {
        // validacion texto
        $data = request()->validate([
            'name' => 'required|string|max:500',
        ]);
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/'. $referencia->id .'_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/reference' . $file_name, $img);
            $files->destroyFile('/reference' . $referencia->img_name);
            $referencia->img_name = $file_name;
        }
        $referencia->update($data);
        Session::flash('info', 'Se ha guardado la información con éxito.');
        return redirect()->route('referencia.edit', $referencia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\References  $references
     * @return \Illuminate\Http\Response
     */
    public function destroy(References $referencia)
    {
        $files = new Files;
        $files->destroyFile('/reference' . $referencia->img_name);
        $referencia->delete();
        Session::flash('info', 'Se ha eliminado con exito.');
        return redirect()->route('referencias');
    }
}
