<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use App\Models\Information;
use App\Models\Meter;
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
        $categorias = category::all('id','name');
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
            'name' => 'required|string|max:255',
            'descripcion_corta' => 'nullable|string|max:255',
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
        } else 
            $products = products::create($data);

        Session::flash('info', 'Se ha guardado la informacion con exito.');
        return redirect()->route('products.edit', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $product)
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
            'page' => 'producto',
        ];
        Meter::create([
            'tipo' => 'Productos',
            'products_id' => $product->id,
            'category_id' => '0',
            'url' => route('show.product', $product),
        ]);
        return view('page.producto', compact('informacion','product'));
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
        $categorias = category::all('id','name');
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
        // validacion texto
        $data = request()->validate([
            'name' => 'required|string|max:255',
            'descripcion_corta' => 'nullable|string|max:255',
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
        Session::flash('info', 'Se ha guardado la información con éxito.');
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
        Session::flash('info', 'Se ha eliminado con éxito.');
        return redirect()->route('products');
    }
}
