<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Information;
use App\Models\Meter;
use App\Clases\Files;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Category::withCount('meter')->get();
        return view('category.list', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.new');
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
            'name' => 'required|string|max:254',
            'description' => 'required|string|max:254',
        ]);
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $category = Category::create($data);
            $file_name = '/'. $category->id .'_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/portfolio' . $file_name, $img);
            $category->img_name = $file_name;
            $category->update();
        }
        Session::flash('info', 'Se ha guardado la informacion con exito.');
        return redirect()->route('category.edit', $category);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //dd($request->all());
        // validacion texto
        $data = request()->validate([
            'name' => 'required|string|max:500',
            'description' => 'required|string|max:254',
        ]);
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/'. $category->id .'_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/portfolio' . $file_name, $img);
            $files->destroyFile('/portfolio' . $category->img_name);
            $category->img_name = $file_name;
        }
        $category->update($data);
        Session::flash('info', 'Se ha guardado la informacion con exito.');
        return redirect()->route('category.edit', $category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $files = new Files;
        $files->destroyFile('/portfolio' . $category->img_name);
        $category->delete();
        Session::flash('info', 'Se ha eliminado con exito.');
        return redirect()->route('category');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_all()
    {
        //$productos = products::where('categoria','=',$Category->id)->paginate(9);
        //$productos = products::paginate(9);
        //$carouseles = carousel::all();
        $categorys = Category::withCount('products')->paginate(9);
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
            //'nosotros' => Information::where('name','nosotros')->value('value'),
            //'img_nosotros' => Information::where('name','img_nosotros')->value('value'),
            //'img_asks' => Information::where('name','img_asks')->value('value'),
            'img_logo' => Information::where('name','img_logo')->value('value'),
            'page' => 'servicio',
        ];
        Meter::create([
            'tipo' => 'Categoria',
            'products_id' => '0',
            'category_id' => 'todos',
            'url' => route('show_categorys'),
        ]);
        return view('page.services', compact('informacion','categorys'));
    }
}
