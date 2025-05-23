<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AskController;
use App\Http\Controllers\GenerateQRController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReferencesController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/icons', function () {
    return view('icons.index');
})->middleware('auth')->name('icons');

//pagina de prueba QR
Route::get('/qrtesting', [GenerateQRController::class, 'index'])->name('QRtest');
Route::get('/qrtestingview', [GenerateQRController::class, 'indexTesting'])->name('QRtestView');
//pagina de inicio
Route::get('/', [HomeController::class, 'index'])->name('index');
//pagina de inicio
Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('nosotros');
//pagina de inicio
Route::get('/equipo', [HomeController::class, 'ourTeam'])->name('team');
//pagina de inicio
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
// Pagina que muestra todos los productos
Route::get('/servicios', [HomeController::class, 'portfolio'])->name('services');
// Verifica que tipo de productos mostrara
Route::post('/products', [HomeController::class, 'products_route'])->name('products_route');
// Muesta los articulos por filtro de nombre
//Route::get('/articulos/{busqueda}', [HomeController::class, 'products'])->name('show.products');
// Muestra el detalle de un producto
Route::get('/servicio/{product}', [ProductsController::class, 'show'])->name('show.product');
// Muesta el listado de productos por categoria
Route::get('/categoria/{category}/articulos', [ProductsController::class, 'products_category'])->name('show.products_by_category');
// Muesta el listado General de categorias
Route::get('/categorias', [CategoryController::class, 'show_all'])->name('show_categorys');
// Muesta el listado de noticias
Route::get('/blog', [HomeController::class, 'noticias'])->name('show_news');
// Muesta la noticia seleccionada
Route::get('/noticia/{post:slug}', [PostController::class, 'show'])->name('show_new');

//pagina de inicio
Route::get('/referencias', [HomeController::class, 'referencias'])->name('clients_ref');

Route::get('/admin', [HomeController::class, 'index_admin'])->middleware('auth')->name('adminIndex');

Route::post('/admin', [HomeController::class, 'index_admin_conteo'])->middleware('auth')->name('adminIndexConteo');

Route::get('/registrar', function () {
    return view('admin.register');
})->middleware('auth')->name('registrar');

Auth::routes();

// Vista y edicion de informacion General
Route::get('/admin/informacion', [InformationController::class, 'index'])->middleware('auth')->name('informacion');
Route::post('/admin/informacion', [InformationController::class, 'store'])->middleware('auth')->name('save.info');

// Listado de Carrusel
Route::get('/admin/carrusel', [CarouselController::class, 'index'])->middleware('auth')->name('carrusel');
Route::get('/admin/carrusel/nuevo', [CarouselController::class, 'create'])->middleware('auth')->name('carrusel.create');
Route::post('/admin/carrusel/store', [CarouselController::class, 'store'])->middleware('auth')->name('carrusel.store');
Route::get('/admin/carrusel/editar/{carousel}', [CarouselController::class, 'edit'])->middleware('auth')->name('carrusel.edit');
Route::put('/admin/carrusel/update/{carousel}', [CarouselController::class, 'update'])->middleware('auth')->name('carrusel.update');
Route::delete('/admin/carrusel/delete/{carousel}', [CarouselController::class, 'destroy'])->middleware('auth')->name('carrusel.delete');
// Listado de preguntas
Route::get('/admin/preguntas', [AskController::class, 'index'])->middleware('auth')->name('asks');
Route::get('/admin/pregunta/nuevo', [AskController::class, 'create'])->middleware('auth')->name('ask.create');
Route::post('/admin/pregunta/store', [AskController::class, 'store'])->middleware('auth')->name('ask.store');
Route::get('/admin/pregunta/editar/{ask}', [AskController::class, 'edit'])->middleware('auth')->name('ask.edit');
Route::put('/admin/pregunta/update/{ask}', [AskController::class, 'update'])->middleware('auth')->name('ask.update');
Route::delete('/admin/pregunta/delete/{ask}', [AskController::class, 'destroy'])->middleware('auth')->name('ask.delete');
// Listado de Categoria
Route::get('/admin/categoria', [CategoryController::class, 'index'])->middleware('auth')->name('category');
Route::get('/admin/categoria/nuevo', [CategoryController::class, 'create'])->middleware('auth')->name('category.create');
Route::post('/admin/categoria/store', [CategoryController::class, 'store'])->middleware('auth')->name('category.store');
Route::get('/admin/categoria/editar/{category}', [CategoryController::class, 'edit'])->middleware('auth')->name('category.edit');
Route::put('/admin/categoria/update/{category}', [CategoryController::class, 'update'])->middleware('auth')->name('category.update');
Route::delete('/admin/categoria/delete/{category}', [CategoryController::class, 'destroy'])->middleware('auth')->name('category.delete');
// Listado de Productos
Route::get('/admin/productos', [ProductsController::class, 'index'])->middleware('auth')->name('productos');
Route::get('/admin/productos/nuevo', [ProductsController::class, 'create'])->middleware('auth')->name('products.create');
Route::post('/admin/productos/store', [ProductsController::class, 'store'])->middleware('auth')->name('products.store');
Route::get('/admin/productos/editar/{products}', [ProductsController::class, 'edit'])->middleware('auth')->name('products.edit');
Route::put('/admin/productos/update/{products}', [ProductsController::class, 'update'])->middleware('auth')->name('products.update');
Route::delete('/admin/productos/delete/{products}', [ProductsController::class, 'destroy'])->middleware('auth')->name('products.delete');
// Listado de Posts
Route::get('/admin/posts', [PostController::class, 'index'])->middleware('auth')->name('posts');
Route::get('/admin/post/nuevo', [PostController::class, 'create'])->middleware('auth')->name('posts.create');
Route::post('/admin/post/store', [PostController::class, 'store'])->middleware('auth')->name('posts.store');
Route::get('/admin/post/editar/{post}', [PostController::class, 'edit'])->middleware('auth')->name('posts.edit');
Route::put('/admin/post/update/{post}', [PostController::class, 'update'])->middleware('auth')->name('posts.update');
Route::delete('/admin/post/delete/{post}', [PostController::class, 'destroy'])->middleware('auth')->name('posts.delete');

// Listado de Referencias
Route::get('/admin/referencias', [ReferencesController::class, 'index'])->middleware('auth')->name('referencias');
Route::get('/admin/referencia/nuevo', [ReferencesController::class, 'create'])->middleware('auth')->name('referencia.create');
Route::post('/admin/referencia/store', [ReferencesController::class, 'store'])->middleware('auth')->name('referencia.store');
Route::get('/admin/referencia/editar/{referencia}', [ReferencesController::class, 'edit'])->middleware('auth')->name('referencia.edit');
Route::put('/admin/referencia/update/{referencia}', [ReferencesController::class, 'update'])->middleware('auth')->name('referencia.update');
Route::delete('/admin/referencia/delete/{referencia}', [ReferencesController::class, 'destroy'])->middleware('auth')->name('referencia.delete');
// Edicion de mision vision y valores vista
Route::get('/admin/informacion/{branding}', [InformationController::class, 'branding'])->middleware('auth')->name('branding');
Route::post('/admin/informacion/{branding}', [InformationController::class, 'storeBranding'])->middleware('auth')->name('save.branding');

// Edicion de welcome MH
Route::get('/admin/welcome', [InformationController::class, 'editWelcome'])->middleware('auth')->name('edit.welcome');
Route::post('/admin/welcome}', [InformationController::class, 'updateWelcome'])->middleware('auth')->name('update.welcome');
// Edicion de video MH
Route::get('/admin/video', [InformationController::class, 'editVideo'])->middleware('auth')->name('edit.video');
Route::post('/admin/video', [InformationController::class, 'updateVideo'])->middleware('auth')->name('update.video');
// Edicion de la imagen que se muestra en las preguntas frecuentes
Route::get('/admin/preguntaImagen', [InformationController::class, 'editImgAsks'])->middleware('auth')->name('edit.imgasks');
Route::post('/admin/preguntaImagen}', [InformationController::class, 'updateImgAsks'])->middleware('auth')->name('update.imgasks');

//Controller de inicio
Route::get('/home', [HomeController::class, 'index'])->name('home');
//Envio de correos
//Controller de inicio
Route::get('/contacto', [HomeController::class, 'contacto'])->name('contacto');
Route::post('/contactMail', [HomeController::class, 'contacMail'])->name('contact.mail');
Route::get('/contactMailTest', [HomeController::class, 'contacMailTest'])->name('contact.mailtest');
// Listado de OurTeam
Route::get('/admin/team', [OurTeamController::class, 'index'])->middleware('auth')->name('ourTeams');
Route::get('/admin/team/nuevo', [OurTeamController::class, 'create'])->middleware('auth')->name('ourTeam.create');
Route::post('/admin/team/store', [OurTeamController::class, 'store'])->middleware('auth')->name('ourTeam.store');
Route::get('/admin/team/editar/{ourTeam}', [OurTeamController::class, 'edit'])->middleware('auth')->name('ourTeam.edit');
Route::put('/admin/team/update/{ourTeam}', [OurTeamController::class, 'update'])->middleware('auth')->name('ourTeam.update');
Route::delete('/admin/team/delete/{ourTeam}', [OurTeamController::class, 'destroy'])->middleware('auth')->name('ourTeam.delete');
// Ruta consulta vista vcard teams 
Route::get('/equipo/{ourTeamC}', [OurTeamController::class, 'show'])->name('ourTeam.show');
Route::get('/equipo/vcard/{ourTeamC}', [OurTeamController::class, 'downloadVCard'])->name('ourTeam.vcard');
