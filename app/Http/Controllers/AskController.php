<?php

namespace App\Http\Controllers;

use App\Models\Ask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AskController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asks = Ask::all();
        return view('ask.list', compact('asks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ask.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $data = request()->validate([
            'question' => 'required|string|max:500',
            'answer' => 'required|string|max:500',
        ]);
        // registra la nueva pregunta
        $ask = Ask::create($data);
        Session::flash('info', 'Se ha guardado la informacion con exito.');
        return redirect()->route('ask.edit', $ask);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ask  $ask
     * @return \Illuminate\Http\Response
     */
    public function show(Ask $ask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ask  $ask
     * @return \Illuminate\Http\Response
     */
    public function edit(Ask $ask)
    {
        return view('ask.edit', compact('ask'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ask  $ask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ask $ask)
    {
        //dd($request->all());
        // validacion texto
        $data = request()->validate([
            'titulo' => 'required|string|max:500',
            'descripcion' => 'required|string|max:500',
        ]);
        $ask->update($data);
        Session::flash('info', 'Se ha guardado la informacion con exito.');
        return redirect()->route('ask.edit', $ask);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ask  $ask
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ask $ask)
    {
        $ask->delete();
        Session::flash('info', 'Se ha eliminado con exito.');
        return redirect()->route('ask');
    }
}
