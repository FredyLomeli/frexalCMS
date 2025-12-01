<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Information;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Meter;
use App\Models\Ask;
use App\Mail\ContactForm;
use App\Mail\ContactFormSimple;
use App\Models\Interesados;
use App\Models\OurTeam;
use App\Models\Products;
use App\Models\References;
use App\Models\DetailsForms;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $campos = DetailsForms::OrderBy('orden','asc')->get();
        $carouseles = carousel::orderBy('id', 'desc')->get();
        $categorys = Category::OrderBy('orden','asc')->get();
        $productos = Products::with('category')->get();
        $referencias = References::get();
        $asks = Ask::get();
        $welcome = $this->cInformation->takeWelcome();
        $informacion = $this->cInformation->takeInformation();
        $video = $this->cInformation->takeVideo();
        $informacion['page'] = 'Inicio';
            //'mision' => Information::where('name','mision')->value('value'),
            //'vision' => Information::where('name','vision')->value('value'),
            //'valores' => explode("°", Information::where('name','valores')->value('value')),
            //'img_mision' => Information::where('name','img_mision')->value('value'),
            //'img_vision' => Information::where('name','img_vision')->value('value'),
            //'img_valores' => Information::where('name','img_valores')->value('value'),
            //'telefono_oficina' => Information::where('name','telefono_oficina')->value('value'),
            //'nosotros' => Information::where('name','nosotros')->value('value'),
            //'img_nosotros' => Information::where('name','img_nosotros')->value('value'),
            //'img_asks' => Information::where('name','img_asks')->value('value'),
            //'img_logo' => Information::where('name','img_logo')->value('value'),
        Meter::create([
            'tipo' => 'inicio',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('index'),
        ]);
        return view('page.index', compact('campos','informacion','productos','asks','carouseles','categorys','welcome', 'video' , 'referencias'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contacto()
    {
        $campos = DetailsForms::OrderBy('orden','asc')->get();
        $informacion = $this->cInformation->takeInformation();
        $categorys = Category::OrderBy('orden','asc')->get();
        $informacion['page'] = 'Contacto';
        Meter::create([
            'tipo' => 'contacto',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('index'),
        ]);
        return view('page.contacts', compact('campos','informacion', 'categorys'));
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function nosotros()
    {
        $informacion = $this->cInformation->takeInformation();
        $categorys = Category::OrderBy('orden','asc')->get();
        $welcome = $this->cInformation->takeWelcome();
        $video = $this->cInformation->takeVideo();
        $referencias = References::get();
        $productos = Products::with('category')->get();
        $informacion['page'] = 'Nosotros';
        $nosotros = $this->cInformation->takeNosotros();
        $mision = $this->cInformation->takeMision();
        $vision = $this->cInformation->takeVision();
        Meter::create([
            'tipo' => 'inicio',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('index'),
        ]);
        return view('page.about', compact('informacion', 'categorys', 'welcome', 'video','productos','referencias', 'nosotros', 'mision', 'vision'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ourTeam()
    {
        $ourTeams = OurTeam::get();
        $informacion = $this->cInformation->takeInformation();
        $categorys = Category::OrderBy('orden','asc')->get();
        $informacion['page'] = 'Contacto';
        Meter::create([
            'tipo' => 'Nuestro Equipo',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('index'),
        ]);
        return view('page.team', compact('informacion', 'categorys', 'ourTeams'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faq()
    {
        $informacion = $this->cInformation->takeInformation();
        $categorys = Category::OrderBy('orden','asc')->get();
        $faqs = Ask::get();
        $informacion['page'] = 'Preguntas Frecuentes';
        Meter::create([
            'tipo' => 'Nuestro Equipo',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('index'),
        ]);
        return view('page.faq', compact('informacion', 'categorys', 'faqs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contacMail(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            array(
                'tipo' => 'required|string|max:100',
                'sistema' => 'required|string|max:100',
                'tamano' => 'required|string|max:100',
                'name' => 'required|string|max:254',
                'correo' => 'required|string|max:254|email',
                'telefono' => 'required|string|min:10',
            )
        );
        // If validation fails, redirect to the settings page and send the errors
        if ($validator->fails())
            return redirect()->route('contacto')->withErrors($validator)->withInput();
        $data = $validator->validated();
        // Registo de la solicitud del interesado
        $data['detalles'] = 'Interesado en ser Contactado lo antes posible.';
        Interesados::create([
            'nombre' => $data['name'],
            'email' => $data['correo'],
            'telefono' => $data['telefono'],
            'detalles' => "Tipo de sistema: ".$data['tipo'].", Sistema: ".$data['sistema'].", Tamaño o lugar: ".$data['tamano']
        ]);
        $emails = Information::where('name','emails_contacto')->value('value');
        $rawArray = explode(',', $emails);
        $trimmedArray = array_map('trim', $rawArray);
        $destinatarios = array_filter($trimmedArray);
        Mail::to($destinatarios,"Contacto")->send( new ContactForm($data));
        Session::flash('info', 'Se ha enviado su solicitud con éxito.');
        return redirect()->route('contacto');
    }

    public function contacMailSimple(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            array(
                'nombre' => 'required|string|max:254',
                'email' => 'required|string|max:254|email',
                'telefono' => 'required|string|min:10',
            )
        );
        // If validation fails, redirect to the settings page and send the errors
        if ($validator->fails())
            return redirect()->route('services')->withErrors($validator)->withInput();
        $data = $validator->validated();
        // Registo de la solicitud del interesado
        $data['detalles'] = 'Interesado en ser Contactado lo antes posible.';
        Interesados::create($data);
        $emails = Information::where('name','emails_contacto')->value('value');
        $rawArray = explode(',', $emails);
        $trimmedArray = array_map('trim', $rawArray);
        $destinatarios = array_filter($trimmedArray);
        Mail::to($destinatarios,"Concacto")->send( new ContactFormSimple($data));
        Session::flash('info', 'Se ha enviado su solicitud con éxito.');
        return redirect()->route('services');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contacMailTest(Request $request)
    {
        $data = [
            'tipo' => 'Este es el tipo del pedido',
            'sistema' => 'Un sistema adecuado para mi',
            'tamano' => 'parar 5 metros de distancioa',
            'name' => 'Alfredo Lomeli',
            'correo' => 'ing.lomeli@mio.com',
            'telefono' => '312789455',
        ];
        return view('mail.contact', compact('data'));
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
        $categorys = Category::OrderBy('orden','asc')->withCount('products')->get();
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
    public function portfolio($slug = null)
    {
        $informacion = $this->cInformation->takeInformation();
        $informacion['page'] = 'Nuestros servicios';
        $categorys = Category::OrderBy('orden','asc')->get();
        $productos = Products::with('category')->get();
        $sCategory = Category::where('slug', $slug)->first();
        if($sCategory == null)
            $sCategory = $categorys->first();
        Meter::create([
            'tipo' => 'Todos los productos',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('services'),
        ]);
        return view('page.portfolio', compact('informacion','productos', 'categorys', 'sCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function portfolioService($slug)
    {
        $informacion = $this->cInformation->takeInformation();
        $informacion['page'] = 'Nuestros servicios';
        $categorys = Category::OrderBy('orden','asc')->get();
        $productos = Products::with('category')->get();
        $sProducto = Products::where('slug', $slug)->first();
        $sCategory = $sProducto->category;
        if($sCategory == null)
            $sCategory = $categorys->first();
        Meter::create([
            'tipo' => 'Todos los productos',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('services'),
        ]);
        return view('page.portfolioService', compact('informacion','productos', 'categorys', 'sCategory', 'sProducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function referencias()
    {
        $informacion = $this->cInformation->takeInformation();
        $informacion['page'] = 'Referencias';
        $categorys = Category::OrderBy('orden','asc')->get();
        $referencias = References::get();
        Meter::create([
            'tipo' => 'Todos los productos',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('services'),
        ]);
        return view('page.referencias', compact('informacion','categorys', 'referencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function noticias()
    {
        $informacion = $this->cInformation->takeInformation();
        $informacion['page'] = 'Blog';
        $categorys = Category::OrderBy('orden','asc')->get();
        Meter::create([
            'tipo' => 'Todos los productos',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('services'),
        ]);
        return view('page.blog', compact('informacion','categorys'));
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
