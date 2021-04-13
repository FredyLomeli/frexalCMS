<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use App\Models\Information;
use App\Meter;
use App\Clases\Files;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = products::withCount('meter')->get();
        return view('products.list', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = category::all();
        return view('products.new', compact('categorias'));
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
            'name' => 'required|string|max:500',
            'descripcion' => 'required|string|max:500',
            'categoria' => 'required|integer',
        ]);
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $products = products::create($data);
            $file_name = '/'. $products->id .'_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/products' . $file_name, $img);
            $products->img_name = $file_name;
            $products->update();
        }
        Session::flash('info', 'Se ha guardado la informacion con exito.');
        return redirect()->route('products.edit', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //$busqueda = null;
        //$productos = products::paginate(9);
        //$carouseles = carousel::all();
        $categorys = category::withCount('products')->get();
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
            //'mision' => information::where('name','mision')->value('value'),
            //'vision' => information::where('name','vision')->value('value'),
            //'valores' => explode("°", information::where('name','valores')->value('value')),
            //'img_mision' => information::where('name','img_mision')->value('value'),
            //'img_vision' => information::where('name','img_vision')->value('value'),
            //'img_valores' => information::where('name','img_valores')->value('value'),
            'telefono_oficina' => information::where('name','telefono_oficina')->value('value'),
        ];
        Meter::create([
            'tipo' => 'Productos',
            'products_id' => $products->id,
            'category_id' => '0',
            'url' => route('show.product', $products),
        ]);
        //return view('remaq.products', compact('informacion','carouseles','categorys','productos', 'busqueda'));
        return view('remaq.products_show', compact('informacion','categorys','products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function products_category(category $category)
    {
        $productos = products::where('categoria','=',$category->id)->paginate(9);
        //$productos = products::paginate(9);
        //$carouseles = carousel::all();
        $categorys = category::withCount('products')->get();
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
            'category_id' => $category->id,
            'url' => route('show.products_by_category', $category),
        ]);
        //return view('remaq.products', compact('informacion','carouseles','categorys','productos', 'busqueda'));
        return view('remaq.products', compact('informacion','categorys','productos','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        $categorias = category::all();
        return view('products.edit', compact('products','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        //dd($request->all());
        // validacion texto
        $data = request()->validate([
            'name' => 'required|string|max:500',
            'descripcion' => 'required|string|max:500',
            'categoria' => 'required|integer',
        ]);
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/'. $products->id .'_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/products' . $file_name, $img);
            $files->destroyFile('/products' . $products->img_name);
            $products->img_name = $file_name;
        }
        $products->update($data);
        Session::flash('info', 'Se ha guardado la informacion con exito.');
        return redirect()->route('products.edit', $products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        $files = new Files;
        $files->destroyFile('/products' . $products->img_name);
        $products->delete();
        Session::flash('info', 'Se ha eliminado con exito.');
        return redirect()->route('products');
    }
}
