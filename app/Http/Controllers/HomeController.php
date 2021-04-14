<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Meter;
use App\Mail\ContactForm;
use App\Models\Products;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $carouseles = carousel::all();
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
            'mision' => information::where('name','mision')->value('value'),
            'vision' => information::where('name','vision')->value('value'),
            'valores' => explode("°", information::where('name','valores')->value('value')),
            'img_mision' => information::where('name','img_mision')->value('value'),
            'img_vision' => information::where('name','img_vision')->value('value'),
            'img_valores' => information::where('name','img_valores')->value('value'),
            'telefono_oficina' => information::where('name','telefono_oficina')->value('value'),
        ];
        Meter::create([
            'tipo' => 'inicio',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('index'),
        ]);
        return view('page.index', compact('informacion','carouseles','categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contacMail(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|string|max:500',
            'telefono' => 'required|string|min:10',
            'email' => 'required|string|max:100',
            'no_serie' => 'required|string',
            'mod_maquina' => 'required|string',
            'no_pieza' => '',
            'message' => 'required|string',
        ]);
        Mail::to(information::where('name','email')->value('value'), 'contactos')
            ->send( new ContactForm($data));
        Session::flash('info', 'Se ha enviado su solicitud con exito.');
        return redirect()->route('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function products(Request $request, $busqueda)
    {
        $productos = products::where('name','like','%'.$busqueda.'%')->paginate(9);
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
            'tipo' => 'busqueda',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('show.products',['busqueda' => $busqueda]),
        ]);
        return view('page.products', compact('informacion','categorys','productos', 'busqueda'));
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function products_all()
    {
        $busqueda = null;
        $productos = products::paginate(9);
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
            'tipo' => 'Todos los productos',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('show_all.products'),
        ]);
        return view('page.products', compact('informacion','categorys','productos', 'busqueda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function products_route(Request $request)
    {
        $data = $request->all();
        if(isset($data['busqueda']))
            return redirect()->route('show.products', $data['busqueda']);
        else
            return redirect()->route('show_all.products');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index_admin()
    {
        $cantidad_visitas = Meter::count();
        return view('admin.index', compact('cantidad_visitas'));
    }

    /**
     * Show the application dashboard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index_admin_conteo(Request $request)
    {
        $data = $request->all();
        $data = request()->validate([
            'fecha_inicial' => 'required|date_format:Y-m-d|before_or_equal:' . $data['fecha_final'],
            'fecha_final' => 'required|date_format:Y-m-d',
        ]);

        $total = Meter::where('created_at','>=',$data['fecha_inicial'])
            ->where('created_at','<=',$data['fecha_final'])->count();

        $principal = Meter::where('created_at','>=',$data['fecha_inicial'])
            ->where('created_at','<=',$data['fecha_final'])
            ->where('tipo', 'inicio')->count();

        $busqueda = Meter::where('created_at','>=',$data['fecha_inicial'])
            ->where('created_at','<=',$data['fecha_final'])
            ->where('tipo', 'busqueda')->count();

        $categoria = Meter::where('created_at','>=',$data['fecha_inicial'])
            ->where('created_at','<=',$data['fecha_final'])
            ->where('tipo', 'Categoria')->count();

        $productos = Meter::where('created_at','>=',$data['fecha_inicial'])
            ->where('created_at','<=',$data['fecha_final'])
            ->where('tipo', 'Productos')->count();

        $custom_meter = [
            'fecha_inicio' => $data['fecha_inicial'],
            'fecha_final' => $data['fecha_final'],
            'total' => $total,
            'principal' => $principal,
            'busqueda' => $busqueda,
            'categoria' => $categoria,
            'productos' => $productos,
        ];
        $cantidad_visitas = Meter::count();
        return view('admin.index', compact('cantidad_visitas', 'custom_meter'));
    }
}
