<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GenerateQR;
use App\Models\Information;
use App\Models\Meter;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class GenerateQRController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return QrCode::generate('Make me into a QrCode, this for testing QR generate');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexTesting()
    {
        $informacion = $this->cInformation->takeInformation();
        $categorys = Category::get();
        $informacion['page'] = 'Generate QR';
        Meter::create([
            'tipo' => 'contacto',
            'products_id' => '0',
            'category_id' => '0',
            'url' => route('index'),
        ]);
        return view('page.qrview', compact('informacion', 'categorys'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GenerateQR  $generateQR
     * @return \Illuminate\Http\Response
     */
    public function show(GenerateQR $generateQR)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GenerateQR  $generateQR
     * @return \Illuminate\Http\Response
     */
    public function edit(GenerateQR $generateQR)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GenerateQR  $generateQR
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GenerateQR $generateQR)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GenerateQR  $generateQR
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenerateQR $generateQR)
    {
        //
    }
}
