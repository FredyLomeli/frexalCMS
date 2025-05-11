<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Clases\Files;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carouseles = carousel::all();
        return view('carusel.list', compact('carouseles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carusel.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request()->all());
        $data = request()->validate([
            'titulo' => 'required|string|max:500',
            'titulo2' => 'required|string|max:500',
            'descripcion' => 'required|string|max:500',
            //'video' => 'nullable|integer|between:0,1',
            'texto' => 'nullable|string|between:1,254',
            'link' => 'nullable|string|between:1,254',
        ]);
        // Si se eligio archivo
        if(isset($request->file_img) && !isset($data['video'])){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $carousel = carousel::create($data);
            $file_name = '/'. $carousel->id .'_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/slider' . $file_name, $img);
            $carousel->img_name = $file_name;
            $carousel->update();
        }else if(isset($data['video'])){
            $youtube_code = Str::of($request->file_img)->replace('https://www.youtube.com/watch?v=', '');
            $youtube_code = Str::of($youtube_code)->replace('https://www.youtube.com/embed/', '');
            $youtube_code = Str::of($youtube_code)->replace('https://youtu.be/', '');
            //dd($youtube_code);
            $data['img_name'] = $youtube_code;
            $carousel = carousel::create($data);
        }
        Session::flash('info', 'Se ha guardado la información con éxito.');
        return redirect()->route('carrusel.edit', $carousel);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(carousel $carousel)
    {
        return view('carusel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carousel $carousel)
    {
        // validacion texto
        $data = request()->validate([
            'titulo' => 'required|string|max:500',
            'titulo2' => 'required|string|max:500',
            'descripcion' => 'required|string|max:500',
            //'video' => 'nullable|integer|between:0,1',
            'texto' => 'nullable|string|between:1,254',
            'link' => 'nullable|string|between:1,254',
        ]);
        // Si se eligio archivo
        if(isset($request->file_img) && !isset($data['video'])){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/'. $carousel->id .'_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/slider' . $file_name, $img);
            $files->destroyFile('/slider' . $carousel->img_name);
            $carousel->img_name = $file_name;
            $data['video'] = 0;
        }else if(isset($data['video'])){
            $files = new Files;
            $youtube_code = Str::of($request->file_img)->replace('https://www.youtube.com/watch?v=', '');
            $youtube_code = Str::of($youtube_code)->replace('https://www.youtube.com/embed/', '');
            $youtube_code = Str::of($youtube_code)->replace('https://youtu.be/', '');
            //dd($youtube_code);
            $files->destroyFile('/slider' . $carousel->img_name);
            $carousel->img_name = $request->file_img;
        }
        $carousel->update($data);
        Session::flash('info', 'Se ha guardado la información con éxito.');
        return redirect()->route('carrusel.edit', $carousel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(carousel $carousel)
    {
        $files = new Files;
        $files->destroyFile('/slider' . $carousel->img_name);
        $carousel->delete();
        Session::flash('info', 'Se ha eliminado con exito.');
        return redirect()->route('carrusel');
    }
}
