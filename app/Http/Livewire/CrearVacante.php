<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class CrearVacante extends Component
{
    public $titulo;
    // public $salario;
    public $categoria;
    // public $empresa;
    // public $ultimo_dia;
    public $descripcion;
    public $imagen;
    public $WhatsApp_Number;
    public $imagen1;
    public $imagen2;
    public $imagen3;
    public $imagen4;
    public $imagen5;
    public $video;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        // 'salario' => 'required',
        'categoria' => 'required',
        // 'empresa' => 'required',
        // 'ultimo_dia' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required|image|max:10240',
        'imagen1' => 'required|image|max:10240',
        'imagen2' => 'required|image|max:10240',
        'imagen3' => 'required|image|max:10240',
        'imagen4' => 'required|image|max:10240',
        'imagen5' => 'required|image|max:10240',
        'video' => 'nullable|mimes:mp4,mov,avi,wmv|max:50000', 
        'WhatsApp_Number' => 'required',
    ];

    public function crearVacante()
    {
        $datos = $this->validate();

        // Almacenar la imagen
        $imagen = $this->imagen;
        $imagen1 = $this->imagen1;
        $imagen2 = $this->imagen2;
        $imagen3 = $this->imagen3;
        $imagen4 = $this->imagen4;
        $imagen5 = $this->imagen5;
        // $imagen = $this->imagen->store('public/vacantes');

        $nombreImagen = Str::uuid() . "." . $imagen->extension();
        $nombreImagen1 = Str::uuid() . "." . $imagen1->extension();
        $nombreImagen2 = Str::uuid() . "." . $imagen2->extension();
        $nombreImagen3 = Str::uuid() . "." . $imagen3->extension();
        $nombreImagen4 = Str::uuid() . "." . $imagen4->extension();
        $nombreImagen5 = Str::uuid() . "." . $imagen5->extension();

        $imagenServidor = Image::make($imagen);
        $imagen1Servidor = Image::make($imagen1);
        $imagen2Servidor = Image::make($imagen2);
        $imagen3Servidor = Image::make($imagen3);
        $imagen4Servidor = Image::make($imagen4);
        $imagen5Servidor = Image::make($imagen5);
        $imagenServidor->fit(182, 324);

        $imagenPath = public_path('storage/vacantes') . '/' . $nombreImagen;
        $imagen1Path = public_path('storage/vacantes') . '/' . $nombreImagen1;
        $imagen2Path = public_path('storage/vacantes') . '/' . $nombreImagen2;
        $imagen3Path = public_path('storage/vacantes') . '/' . $nombreImagen3;
        $imagen4Path = public_path('storage/vacantes') . '/' . $nombreImagen4;
        $imagen5Path = public_path('storage/vacantes') . '/' . $nombreImagen5;
        // $imagenPath = 'public/storage/vacantes/' . $nombreImagen;
        $imagenServidor->save($imagenPath);
        $imagen1Servidor->save($imagen1Path);
        $imagen2Servidor->save($imagen2Path);
        $imagen3Servidor->save($imagen3Path);
        $imagen4Servidor->save($imagen4Path);
        $imagen5Servidor->save($imagen5Path);

        // $datos['imagen'] = str_replace('public/storage/vacantes', '', $imagenPath);

        $datos['imagen'] = $nombreImagen;
        $datos['imagen1'] = $nombreImagen1;
        $datos['imagen2'] = $nombreImagen2;
        $datos['imagen3'] = $nombreImagen3;
        $datos['imagen4'] = $nombreImagen4;
        $datos['imagen5'] = $nombreImagen5;


        if ($this->video) {
            $nombreVideo = Str::uuid() . "." . $this->video->extension();
            $this->video->storeAs('public/videos', $nombreVideo);
            $datos['video'] = $nombreVideo;
        }

        // dd($nombre_imagen);

        // Crear la Vacante
        Vacante::create([
            'titulo' => $datos['titulo'],
            // 'salario_id' => 1,
            'categoria_id' => $datos['categoria'],
            // 'empresa' => NULL,
            // 'ultimo_dia' => NULL,
            'descripcion' => $datos['descripcion'],
            'imagen' => $datos['imagen'],
            'imagen1' => $datos['imagen1'],
            'imagen2' => $datos['imagen2'],
            'imagen3' => $datos['imagen3'],
            'imagen4' => $datos['imagen4'],
            'imagen5' => $datos['imagen5'],
            'video' => $datos['video'] ?? null,
            'user_id' => auth()->user()->id,
            'WhatsApp_Number' => $datos['WhatsApp_Number'],
        ]);


        // Crear un mensaje 
        session()->flash('mensaje', 'La Vacante se publicó correctamente');


        // Redireccionar al usuario
        return redirect()->route('vacantes.index');
    }

    public function render()
    {
        // Consultar BD
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.crear-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
