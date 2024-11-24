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
    // public $categoria;
    // public $empresa;
    // public $ultimo_dia;
    public $descripcion;
    public $imagen;
    public $WhatsApp_Number;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        // 'salario' => 'required',
        // 'categoria' => 'required',
        // 'empresa' => 'required',
        // 'ultimo_dia' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required|image|max:10240',
        'WhatsApp_Number' => 'required',
    ];

    public function crearVacante()
    {
        $datos = $this->validate();

        // Almacenar la imagen
        $imagen = $this->imagen;
        // $imagen = $this->imagen->store('public/vacantes');

        $nombreImagen = Str::uuid() . "." . $imagen->extension();

        $imagenServidor = Image::make($imagen);
        $imagenServidor->fit(182, 324);

        $imagenPath = public_path('storage/vacantes') . '/' . $nombreImagen;
        // $imagenPath = 'public/storage/vacantes/' . $nombreImagen;
        $imagenServidor->save($imagenPath);

        // $datos['imagen'] = str_replace('public/storage/vacantes', '', $imagenPath);

        $datos['imagen'] = $nombreImagen;

        // dd($nombre_imagen);

        // Crear la Vacante
        Vacante::create([
            'titulo' => $datos['titulo'],
            // 'salario_id' => 1,
            // 'categoria_id' => NULL,
            // 'empresa' => NULL,
            // 'ultimo_dia' => NULL,
            'descripcion' => $datos['descripcion'],
            'imagen' => $datos['imagen'],
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
