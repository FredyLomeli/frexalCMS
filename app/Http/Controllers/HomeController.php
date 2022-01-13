<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Meter;
use App\Models\Ask;
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
        $carouseles = carousel::orderBy('id', 'desc')->get();
        //$categorys = Category::get();
        $productos = Products::with('category')->get();
        $asks = Ask::get();
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
            //'telefono_oficina' => Information::where('name','telefono_oficina')->value('value'),
            'welcome_title' => Information::where('name','welcome_title')->value('value'),
            'welcome_description' => Information::where('name','welcome_description')->value('value'),
            'welcome_link' => Information::where('name','welcome_link')->value('value'),
            'welcome_boton' => Information::where('name','welcome_boton')->value('value'),
            'img_welcome' => Information::where('name','img_welcome')->value('value'),
            'nosotros' => Information::where('name','nosotros')->value('value'),
            'img_nosotros' => Information::where('name','img_nosotros')->value('value'),
            'img_asks' => Information::where('name','img_asks')->value('value'),
            'img_logo' => Information::where('name','img_logo')->value('value'),
            'page' => 'inicio',
        ];
        Meter::create([
            'tipo' => 'inicio',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('index'),
        ]);
        return view('page.index', compact('informacion','productos','asks','carouseles'));
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contacto()
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
            'descripcion_ubicacion' => Information::where('name','descripcion_ubicacion')->value('value'),
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
            'page' => 'contacto',
        ];
        Meter::create([
            'tipo' => 'inicio',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('index'),
        ]);
        return view('page.contact', compact('informacion'));
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function nosotros()
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
            'page' => 'nosotros',
        ];
        Meter::create([
            'tipo' => 'inicio',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('index'),
        ]);
        return view('page.about', compact('informacion'));
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
            'email' => 'required|string|max:254|email',
            'asunto' => 'required|string|max:254',
            'message' => 'required|string',
        ]);
        Mail::to(Information::where('name','email')->value('value'), 'contactos')
        //Mail::to('ing.lomeli@gmail.com', 'contactos')
            ->send( new ContactForm($data));
        Session::flash('info', 'Se ha enviado su solicitud con exito.');
        return redirect()->route('contacto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function products(Request $request, $busqueda)
    {
        $productos = Products::where('name','like','%'.$busqueda.'%')->paginate(9);
        //$carouseles = carousel::all();
        $categorys = Category::withCount('products')->get();
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
            //'descripcion_ubicacion' => Information::where('name','descripcion_ubicacion')->value('value'),
            'informacion_footer' => Information::where('name','informacion_footer')->value('value'),
            //'mision' => Information::where('name','mision')->value('value'),
            //'vision' => Information::where('name','vision')->value('value'),
            //'valores' => explode("°", Information::where('name','valores')->value('value')),
            //'img_mision' => Information::where('name','img_mision')->value('value'),
            //'img_vision' => Information::where('name','img_vision')->value('value'),
            //'img_valores' => Information::where('name','img_valores')->value('value'),
            'telefono_oficina' => Information::where('name','telefono_oficina')->value('value'),
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
        //$busqueda = null;
        $productos = Products::with('category')->get();
        //$productos = Products::paginate(9);
        //$carouseles = carousel::all();
        //$categorys = Category::get();
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
            'descripcion_ubicacion' => Information::where('name','descripcion_ubicacion')->value('value'),
            'informacion_footer' => Information::where('name','informacion_footer')->value('value'),
            //'mision' => Information::where('name','mision')->value('value'),
            //'vision' => Information::where('name','vision')->value('value'),
            //'valores' => explode("°", Information::where('name','valores')->value('value')),
            //'img_mision' => Information::where('name','img_mision')->value('value'),
            //'img_vision' => Information::where('name','img_vision')->value('value'),
            //'img_valores' => Information::where('name','img_valores')->value('value'),
            //'telefono_oficina' => Information::where('name','telefono_oficina')->value('value'),
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
            'tipo' => 'Todos los productos',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('show_all.products'),
        ]);
        return view('page.portfolio', compact('informacion','productos'));
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
