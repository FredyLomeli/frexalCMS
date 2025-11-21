<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Interesados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InteresadosController extends Controller
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
        $emails = $this->cInformation::where('name','emails_contacto')->value('value');
        $interesados = Interesados::all();
        return view('interesados.list', compact('interesados','emails'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interesados  $interesados
     * @return \Illuminate\Http\Response
     */
    public function show(Interesados $interesados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interesados  $interesados
     * @return \Illuminate\Http\Response
     */
    public function edit(Interesados $interesados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interesados  $interesados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interesados $interesados)
    {
        // validacion texto
        $data = request()->validate([
            "email" => 'required|string|max:255',
        ]);
        // Guarda el texto
        $this->cInformation->actualizarInformacion("emails_contacto", $data['email']);
        Session::flash('info', 'Se ha guardado la información con éxito.');
        return redirect()->route('interesados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interesados  $interesados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interesados $interesados)
    {
        //
    }
}
