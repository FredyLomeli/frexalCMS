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
            'nombre' => information::where('name','nombre')->value('value'),
            'telefono' => information::where('name','telefono')->value('value'),
            'horario' => information::where('name','horario')->value('value'),
            'email' => information::where('name','email')->value('value'),
            //'direccion' => information::where('name','direccion')->value('value'),
            //'municipio' => information::where('name','municipio')->value('value'),
            //'estado' => information::where('name','estado')->value('value'),
            'no_whatsapp' => information::where('name','no_whatsapp')->value('value'),
            'facebook' => information::where('name','facebook')->value('value'),
            'instagram' => information::where('name','instagram')->value('value'),
            'descripcion_empresa' => information::where('name','descripcion_empresa')->value('value'),
            'informacion_footer' => information::where('name','informacion_footer')->value('value'),
            //'mision' => information::where('name','mision')->value('value'),
            //'vision' => information::where('name','vision')->value('value'),
            //'valores' => explode("°", information::where('name','valores')->value('value')),
            //'img_mision' => information::where('name','img_mision')->value('value'),
            //'img_vision' => information::where('name','img_vision')->value('value'),
            //'img_valores' => information::where('name','img_valores')->value('value'),
            'telefono_oficina' => information::where('name','telefono_oficina')->value('value'),
        ];
        Meter::create([
            'tipo' => 'Categoria',
            'products_id' => '0',
            'category_id' => 'todos',
            'url' => route('show_categorys'),
        ]);
        return view('remaq.categorys', compact('informacion','categorys'));
    }
}
