<?php

namespace App\Clases;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class Files
{
    //private $upload_path = 'imgperfil';
    private $upload_path = 'imgserverperfil';
    // Carga el archivo indicado a la ruta indicada
    public function uploadFile($paht_file, $file){
        Storage::disk($this->upload_path)->put($paht_file, File::get($file));
        return true;
    }

    // Validacion de archivos de excel
    public function validatorExcelFile($file, $extension){
        return Validator::make(
            [
                'file'          => $file,
                'extension'     => $extension,
            ],
            [
                'file'          => 'required|file|max:50000',
                'extension'     => 'required|in:csv,xls,xlsx',
            ],
            [
                'file.required' => 'Debes seleccionar un archivo para procesar la importacion.',
                'file.max'      => 'El archivo no debe sobrepasar los 5 MB de tamaño.',
                'extension.in'  => 'Error al procesar, verifica la extencion del archivo.',
            ]);
    }

    // Validacion de Imagenes
    public function validatorImgFile($file, $extension){
        return Validator::make(
            [
                'file'          => $file,
                'extension'     => $extension,
            ],
            [
                'file'          => 'required|file|max:1024',
                'extension'     => 'required|in:jpg,jpeg,png',
            ],
            [
                'file.required' => 'Debes seleccionar un archivo para realizar la carga.',
                'file.max'      => 'La imagen no debe ser mayor a 1 MB de tamaño.',
                'extension.in'  => 'Error al procesar, verifica la extencion del archivo.',
            ]);
    }

    public function existLogoFile($path_file){
        if (Storage::exists('/public' . $path_file) && $path_file != null)
            return 'storage' . $path_file;
        else
            return 'storage/img/enterprise.png';
    }

    public function destroyFile($path_file){
        if (Storage::disk($this->upload_path)->exists($path_file) && $path_file != '/public')
            Storage::disk($this->upload_path)->delete($path_file);
    }
}
