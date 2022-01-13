<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Clases\Files;
use App\Models\Meter;
use App\Models\Information;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $data = request()->validate([
            'title' => 'required|string|max:254',
            'brief' => 'required|string|max:254',
            'content' => 'required|string',
        ]);
        // Si se eligio archivo
        if(isset($request->img_post)){
            // toma los datos de la imgen a cargar
            $img = $request->img_post;
            $extension = strtolower($request->img_post->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            // Generacion de la liga unica para la noticia
            $valorAleatorio = uniqid();
            $data['slug'] = (string)Str::of($data['title'])->slug("-")->limit(255 - mb_strlen($valorAleatorio) - 1, "")->trim("-")->append("-", $valorAleatorio);
            // Creación del registro de la noticia
            $post = Post::create($data);
            //Carga de imagen
            $file_name = '/'. $post->id .'_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/post' . $file_name, $img);
            //Actualización del registor de la noticia con la imagen cargada
            $post->img_post = $file_name;
            $post->update();
        }
        Session::flash('info', 'Se ha guardado la informacion con exito.');
        return redirect()->route('posts.edit', $post);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_all()
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
            'facebook' => Information::where('name','facebook')->value('value'),
            'instagram' => Information::where('name','instagram')->value('value'),
            'twitter' => Information::where('name','twitter')->value('value'),
            'youtube' => Information::where('name','youtube')->value('value'),
            'linkedin' => Information::where('name','linkedin')->value('value'),
            //'descripcion_ubicacion' => Information::where('name','descripcion_ubicacion')->value('value'),
            'informacion_footer' => Information::where('name','informacion_footer')->value('value'),
            //'mision' => Information::where('name','mision')->value('value'),
            //'vision' => Information::where('name','vision')->value('value'),
            //'valores' => explode("°", Information::where('name','valores')->value('value')),
            //'img_mision' => Information::where('name','img_mision')->value('value'),
            //'img_vision' => Information::where('name','img_vision')->value('value'),
            //'img_valores' => Information::where('name','img_valores')->value('value'),
            'telefono_oficina' => Information::where('name','telefono_oficina')->value('value'),
            //'welcome_title' => Information::where('name','welcome_title')->value('value'),
            //'welcome_description' => Information::where('name','welcome_description')->value('value'),
            //'welcome_link' => Information::where('name','welcome_link')->value('value'),
            //'welcome_boton' => Information::where('name','welcome_boton')->value('value'),
            //'img_welcome' => Information::where('name','img_welcome')->value('value'),
            'nosotros' => Information::where('name','nosotros')->value('value'),
            'img_nosotros' => Information::where('name','img_nosotros')->value('value'),
            //'img_asks' => Information::where('name','img_asks')->value('value'),
            'img_logo' => Information::where('name','img_logo')->value('value'),
            'page' => 'noticias',
        ];
        $posts = Post::orderBy('id', 'desc')->paginate(3);
        return view('page.noticias', compact('informacion','posts'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
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
            'facebook' => Information::where('name','facebook')->value('value'),
            'instagram' => Information::where('name','instagram')->value('value'),
            'twitter' => Information::where('name','twitter')->value('value'),
            'youtube' => Information::where('name','youtube')->value('value'),
            'linkedin' => Information::where('name','linkedin')->value('value'),
            //'descripcion_ubicacion' => Information::where('name','descripcion_ubicacion')->value('value'),
            'informacion_footer' => Information::where('name','informacion_footer')->value('value'),
            'mision' => Information::where('name','mision')->value('value'),
            'vision' => Information::where('name','vision')->value('value'),
            'valores' => explode("°", Information::where('name','valores')->value('value')),
            'img_mision' => Information::where('name','img_mision')->value('value'),
            'img_vision' => Information::where('name','img_vision')->value('value'),
            'img_valores' => Information::where('name','img_valores')->value('value'),
            'telefono_oficina' => Information::where('name','telefono_oficina')->value('value'),
            //'welcome_title' => Information::where('name','welcome_title')->value('value'),
            //'welcome_description' => Information::where('name','welcome_description')->value('value'),
            //'welcome_link' => Information::where('name','welcome_link')->value('value'),
            //'welcome_boton' => Information::where('name','welcome_boton')->value('value'),
            //'img_welcome' => Information::where('name','img_welcome')->value('value'),
            'nosotros' => Information::where('name','nosotros')->value('value'),
            'img_nosotros' => Information::where('name','img_nosotros')->value('value'),
            //'img_asks' => Information::where('name','img_asks')->value('value'),
            'img_logo' => Information::where('name','img_logo')->value('value'),
            'page' => 'noticia',
        ];
        return view('page.noticia', compact('informacion','post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //dd($request->all());
        $data = request()->validate([
            'title' => 'required|string|max:254',
            'brief' => 'required|string|max:254',
            'content' => 'required|string',
        ]);
        // Generacion de la liga unica para la noticia
        if($data['title'] != $post->title){   
            $valorAleatorio = uniqid();
            $data['slug'] = (string)Str::of($data['title'])->slug("-")->limit(255 - mb_strlen($valorAleatorio) - 1, "")->trim("-")->append("-", $valorAleatorio);
        }
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/'. $post->id .'_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/post' . $file_name, $img);
            $files->destroyFile('/post' . $post->img_post);
            $post->img_post = $file_name;
        }
        $post->update($data);
        Session::flash('info', 'Se ha guardado la informacion con exito.');
        return redirect()->route('posts.edit', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        Session::flash('info', 'Se ha eliminado con exito.');
        return redirect()->route('posts');
    }
}
