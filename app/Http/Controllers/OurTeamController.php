<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use App\Clases\Files;
use App\Models\Information;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class OurTeamController extends Controller
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
        $ourTeam = OurTeam::all();
        return view('our_team.list', compact('ourTeam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('our_team.new');
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
            'apellidos' => 'required|string|max:255',
            'puesto' => 'required|string|max:255',
            'telefono' => 'nullable|string|max:255',
            'celular' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'web' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'adicional1' => 'nullable|string|max:255',
            'adicional2' => 'nullable|string|max:255',
            'adicional3' => 'nullable|string|max:255',
            'adicional4' => 'nullable|string|max:255',
        ]);
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $team = OurTeam::create($data);
            $file_name = '/'. $team->id .'_' . Str::random(8) . '.' . $extension;
            $files->uploadFile('/team' . $file_name, $img);
            $team->foto = $file_name;
            $team->update();
        }else
            $team = OurTeam::create($data);
        Session::flash('info', 'Se ha guardado la información con éxito.');
        return redirect()->route('ourTeam.edit', $team);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function show($ourTeamC)
    {
        $ourTeam = OurTeam::find(base64_decode($ourTeamC));
        $ourTeam = $this->cInformation->takeContacts($ourTeam);
        return view('vcard.index', compact('ourTeam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(OurTeam $ourTeam)
    {
        return view('our_team.edit', compact('ourTeam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurTeam $ourTeam)
    {
        // validacion texto
        $data = request()->validate([
            'name' => 'required|string|max:255',
            'puesto' => 'required|string|max:255',
            'telefono' => 'nullable|string|max:255',
            'celular' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'web' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'adicional1' => 'nullable|string|max:255',
            'adicional2' => 'nullable|string|max:255',
            'adicional3' => 'nullable|string|max:255',
            'adicional4' => 'nullable|string|max:255',
        ]);
        // Si se eligio archivo
        if(isset($request->file_img)){
            $img = $request->file_img;
            $extension = strtolower($request->file_img->getClientOriginalExtension());
            $files = new Files;
            // Validacion Imagen
            $files->validatorImgFile($img, $extension)->validate();
            $file_name = '/'. $ourTeam->id .'_' . Str::random(8) . '.' . $extension;
            $files->destroyFile('/team' . $ourTeam->foto);
            $files->uploadFile('/team' . $file_name, $img);
            $data['foto'] = $file_name;
        } 
        // Actualizamos el regisro
        $ourTeam->update($data);
        Session::flash('info', 'Se ha guardado la información con éxito.');
        return redirect()->route('ourTeam.edit', $ourTeam);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurTeam $ourTeam)
    {
        $files = new Files;
        $files->destroyFile('/team' . $ourTeam->img_name);
        $ourTeam->delete();
        Session::flash('info', 'Se ha eliminado con éxito.');
        return redirect()->route('carrusel');
    }

    /**
     * Genera un archivo VCard con los datos del equipo.
     *
     * @param  \App\Models\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */

    public function downloadVCard($ourTeamC)
    {
        $ourTeam = OurTeam::find(base64_decode($ourTeamC));
        $ourTeam = $this->cInformation->takeContacts($ourTeam);

        $imagePath = asset('img/'.$ourTeam->img_logo);
        $imageData = base64_encode(file_get_contents($imagePath));

        $vcard = "BEGIN:VCARD\n";
        $vcard .= "VERSION:3.0\n";
        $vcard .= "N:".$ourTeam->apellidos.";".$ourTeam->name.";;;\n";
        $vcard .= "FN:".$ourTeam->name." ".$ourTeam->apellidos."\n";
        $vcard .= "ORG:".$ourTeam->empresa.";Security System\n";
        $vcard .= "TITLE:".$ourTeam->puesto."\n";
        $vcard .= "TEL;TYPE=WORK,VOICE:".$ourTeam->empresa_telefono."\n";
        $vcard .= "TEL;TYPE=CELL,VOICE:".$ourTeam->celular."\n";
        $vcard .= "EMAIL;TYPE=PREF,INTERNET:".$ourTeam->email."\n";
        $vcard .= "URL;TYPE=WORK:".route('index')."\n";
        $vcard .= "ADR;TYPE=WORK;type=pref:;;".$ourTeam->direccion." ".$ourTeam->number.";".$ourTeam->municipio.";".$ourTeam->estado.".;;Mexico\n";
        $vcard .= "X-SOCIALPROFILE;TYPE=facebook:".$ourTeam->facebook."\n";
        $vcard .= "X-SOCIALPROFILE;TYPE=twitter:".$ourTeam->twitter."\n";
        $vcard .= "X-SOCIALPROFILE;TYPE=instagram:".$ourTeam->instagram."\n";
        $vcard .= "X-SOCIALPROFILE;TYPE=youtube:".$ourTeam->youtube."\n";
        $vcard .= "PHOTO;ENCODING=b;TYPE=JPEG:$imageData\n";
        $vcard .= "REV:20150922T195243Z\n";
        $vcard .= "END:VCARD";

        $headers = [
            'Content-Type' => 'text/vcard',
            'Content-Disposition' => 'attachment; filename="'.$ourTeam->name.'-'.$ourTeam->apellidos.'.vcf"',
        ];

        return new Response($vcard, 200, $headers);
    }

}
