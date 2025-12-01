<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\DetailsForms;
use Illuminate\Http\Request;
use App\Clases\Files;
use Illuminate\Support\Str;

class DetailsFormsController extends Controller
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
        $img_cotizar = $this->cInformation::where('name','img_cotizar')->value('value');
        $detalleForm = DetailsForms::OrderBy('orden','asc')->get();
        return view('cotizacion.list', compact('detalleForm','img_cotizar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cotizacion.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. Tu validación con la lógica condicional
        $data = request()->validate([
            'name'   => 'required|string|max:254',
            'type'   => 'required|in:text,select', // Seguridad: solo permite 'text' o 'select'
            'values' => 'required_if:type,select|nullable|string|max:500', // Obligatorio SOLO si type es 'select'
        ]);

        // 2. Ajustes manuales antes de guardar (limpieza y checkbox)
        
        // Si el tipo es texto, forzamos values a null (para limpiar basura si el usuario cambió de opinión)
        if ($data['type'] === 'text') {
            $data['values'] = null;
        }

        // El checkbox es especial: si no se marca, no viaja en el request.
        // Lo agregamos manualmente al array $data.
        $data['visible'] = request()->has('visible') ? 1 : 0;

        // 3. Crear el registro
        // Asegúrate de importar tu modelo arriba: use App\Models\FormField;
        DetailsForms::create($data);

        return redirect()->route('cotizar')
            ->with('info', 'El campo ha sido guardado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailsForms  $detailsForms
     * @return \Illuminate\Http\Response
     */
    public function show(DetailsForms $detailsForms)
    {
        return view('cotizacion.edit', compact('detailsForms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailsForms  $detailsForms
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailsForms $detailsForms)
    {
        return view('cotizacion.edit', compact('detailsForms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailsForms  $detailsForms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailsForms $detailsForms)
    {
        // 1. VALIDACIÓN
        // Usamos 'required_if' para que 'values' solo sea obligatorio si type es 'select'
        $data = request()->validate([
            'name'   => 'required|string|max:254',
            'type'   => 'required|in:text,select', 
            'values' => 'required_if:type,select|nullable|string', 
        ]);

        // 2. BUSCAR EL REGISTRO
        // Asegúrate de importar tu modelo: use App\Models\FormField;
        $campo = DetailsForms::findOrFail($detailsForms->id);

        // 3. LÓGICA DE LIMPIEZA
        // Si el usuario cambió el tipo a "text", nos aseguramos de que 'values' sea null
        // aunque haya escrito algo en el campo oculto por accidente.
        if ($data['type'] === 'text') {
            $data['values'] = null;
        }

        // 4. MANEJO DEL CHECKBOX (VISIBLE)
        // request()->has('visible') devuelve true si el checkbox estaba marcado
        $data['visible'] = request()->has('visible') ? 1 : 0;

        // 5. ACTUALIZAR
        $campo->update($data);

        // 6. REDIRECCIONAR
        return redirect()->route('cotizar')
            ->with('info', 'El campo ha sido actualizado correctamente.');
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailsForms  $detailsForms
     * @return \Illuminate\Http\Response
     */
    public function updateImg(Request $request, DetailsForms $detailsForms)
    {
         if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/cotizar_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/about' .$file_name, $img);
            $img_db = Information::where('name', 'img_cotizar')->value('value');
            $files->destroyFile('/about' .$img_db);
            $this->cInformation->actualizarInformacion('img_cotizar', $file_name);
        }
        return redirect()->route('cotizar')->with('info', 'Imagen actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailsForms  $detailsForms
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailsForms $detailsForms)
    {
        $detailsForms->delete();
        return redirect()->route('cotizar')->with('info', 'Se ha eliminado con exito');
    }

    // Reordenar categorias
    public function reorder(Request $request)
    {
        $orden = $request->input('orden');
        // Validar que venga data
        if ($orden) {
            foreach ($orden as $indice => $id) {
                DetailsForms::where('id', $id)->update(['orden' => $indice + 1]);
            }
        }
        return response()->json(['success' => true]);
    }
}
