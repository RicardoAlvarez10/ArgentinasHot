<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;
use App\Models\Vacante;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class EditarVacante extends Component
{
    public $vacante_id;
    public $titulo;
    // public $salario;
    public $categoria;
    // public $empresa;
    // public $ultimo_dia;
    public $descripcion;
    public $imagen;
    public $imagen1;
    public $imagen_nueva;
    public $imagen1_nueva;
    public $imagen2;
    public $imagen2_nueva;
    public $imagen3;
    public $imagen3_nueva;
    public $imagen4;
    public $imagen4_nueva;
    public $imagen5;
    public $imagen5_nueva;
    public $WhatsApp_Number;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        // 'salario' => 'required',
        'categoria' => 'required',
        // 'empresa' => 'required',
        // 'ultimo_dia' => 'required',
        'descripcion' => 'required',
        'imagen_nueva' => 'nullable|image|max:10240',
        'imagen1_nueva' => 'nullable|image|max:10240',
        'imagen2_nueva' => 'nullable|image|max:10240',
        'imagen2_nueva' => 'nullable|image|max:10240',
        'imagen4_nueva' => 'nullable|image|max:10240',
        'imagen5_nueva' => 'nullable|image|max:10240',
        'WhatsApp_Number' => 'required',
    ];

    public function mount(Vacante $vacante)
    {
        $this->vacante_id = $vacante->id;
        $this->titulo = $vacante->titulo;
        // $this->salario = $vacante->salario_id;
        $this->categoria = $vacante->categoria_id;
        // $this->empresa = $vacante->empresa;
        // $this->ultimo_dia = Carbon::parse( $vacante->ultimo_dia)->format('Y-m-d');
        $this->descripcion = $vacante->descripcion;
        $this->imagen = $vacante->imagen;
        $this->imagen1 = $vacante->imagen1;
        $this->imagen2 = $vacante->imagen2;
        $this->imagen3 = $vacante->imagen3;
        $this->imagen4 = $vacante->imagen4;
        $this->imagen5 = $vacante->imagen5;
        $this->WhatsApp_Number = $vacante->WhatsApp_Number;
        
    }

    public function editarVacante() 
    {
        $datos = $this->validate();

        // Si hay una nueva imagen
        if($this->imagen_nueva) {
            // $imagen = $this->imagen_nueva->store('public/vacantes');
            // $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);
            $imagen = $this->imagen_nueva;
            // $imagen = $this->imagen->store('public/vacantes');
    
            $nombreImagen = Str::uuid() . "." . $imagen->extension();
    
            $imagenServidor = Image::make($imagen);
            $imagenServidor->fit(182, 324);
    
            $imagenPath = public_path('storage/vacantes') . '/' . $nombreImagen;
            // $imagenPath = 'public/storage/vacantes/' . $nombreImagen;
            $imagenServidor->save($imagenPath);
    
            // $datos['imagen'] = str_replace('public/storage/vacantes', '', $imagenPath);
    
            $datos['imagen'] = $nombreImagen;
        }


        if($this->imagen1_nueva) {
            // $imagen = $this->imagen_nueva->store('public/vacantes');
            // $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);
            $imagen1 = $this->imagen1_nueva;
            // $imagen = $this->imagen->store('public/vacantes');
    
            $nombreImagen1 = Str::uuid() . "." . $imagen1->extension();
    
            $imagen1Servidor = Image::make($imagen1);
    
            $imagen1Path = public_path('storage/vacantes') . '/' . $nombreImagen1;
            // $imagenPath = 'public/storage/vacantes/' . $nombreImagen;
            $imagen1Servidor->save($imagen1Path);
    
            // $datos['imagen'] = str_replace('public/storage/vacantes', '', $imagenPath);
    
            $datos['imagen1'] = $nombreImagen1;
        }


        if($this->imagen2_nueva) {
            // $imagen = $this->imagen_nueva->store('public/vacantes');
            // $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);
            $imagen2 = $this->imagen2_nueva;
            // $imagen = $this->imagen->store('public/vacantes');
    
            $nombreImagen2 = Str::uuid() . "." . $imagen2->extension();
    
            $imagen2Servidor = Image::make($imagen2);
    
            $imagen2Path = public_path('storage/vacantes') . '/' . $nombreImagen2;
            // $imagenPath = 'public/storage/vacantes/' . $nombreImagen;
            $imagen2Servidor->save($imagen2Path);
    
            // $datos['imagen'] = str_replace('public/storage/vacantes', '', $imagenPath);
    
            $datos['imagen2'] = $nombreImagen2;
        }


        
        if($this->imagen3_nueva) {
            // $imagen = $this->imagen_nueva->store('public/vacantes');
            // $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);
            $imagen3 = $this->imagen3_nueva;
            // $imagen = $this->imagen->store('public/vacantes');
    
            $nombreimagen3 = Str::uuid() . "." . $imagen3->extension();
    
            $imagen3Servidor = Image::make($imagen3);
    
            $imagen3Path = public_path('storage/vacantes') . '/' . $nombreimagen3;
            // $imagenPath = 'public/storage/vacantes/' . $nombreImagen;
            $imagen3Servidor->save($imagen3Path);
    
            // $datos['imagen'] = str_replace('public/storage/vacantes', '', $imagenPath);
    
            $datos['imagen3'] = $nombreimagen3;
        }


        if($this->imagen4_nueva) {
            // $imagen = $this->imagen_nueva->store('public/vacantes');
            // $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);
            $imagen4 = $this->imagen4_nueva;
            // $imagen = $this->imagen->store('public/vacantes');
    
            $nombreimagen4 = Str::uuid() . "." . $imagen4->extension();
    
            $imagen4Servidor = Image::make($imagen4);
    
            $imagen4Path = public_path('storage/vacantes') . '/' . $nombreimagen4;
            // $imagenPath = 'public/storage/vacantes/' . $nombreImagen;
            $imagen4Servidor->save($imagen4Path);
    
            // $datos['imagen'] = str_replace('public/storage/vacantes', '', $imagenPath);
    
            $datos['imagen4'] = $nombreimagen4;
        }


        if($this->imagen5_nueva) {
            // $imagen = $this->imagen_nueva->store('public/vacantes');
            // $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);
            $imagen5 = $this->imagen5_nueva;
            // $imagen = $this->imagen->store('public/vacantes');
    
            $nombreimagen5 = Str::uuid() . "." . $imagen5->extension();
    
            $imagen5Servidor = Image::make($imagen5);
    
            $imagen5Path = public_path('storage/vacantes') . '/' . $nombreimagen5;
            // $imagenPath = 'public/storage/vacantes/' . $nombreImagen;
            $imagen5Servidor->save($imagen5Path);
    
            // $datos['imagen'] = str_replace('public/storage/vacantes', '', $imagenPath);
    
            $datos['imagen5'] = $nombreimagen5;
        }

        // Encontrar la vacante a editar
        $vacante = Vacante::find($this->vacante_id);

        // Asignar los valores
        $vacante->titulo = $datos['titulo'];
        // $vacante->salario_id = $datos['salario'];
        $vacante->categoria_id = $datos['categoria'];
        // $vacante->empresa = $datos['empresa'];
        // $vacante->ultimo_dia = $datos['ultimo_dia'];
        $vacante->descripcion = $datos['descripcion'];
        $vacante->imagen = $datos['imagen'] ?? $vacante->imagen;
        $vacante->imagen1 = $datos['imagen1'] ?? $vacante->imagen1;
        $vacante->imagen2 = $datos['imagen2'] ?? $vacante->imagen2;
        $vacante->imagen3 = $datos['imagen3'] ?? $vacante->imagen3;
        $vacante->imagen4 = $datos['imagen4'] ?? $vacante->imagen4;
        $vacante->imagen5 = $datos['imagen5'] ?? $vacante->imagen5;
        $vacante->WhatsApp_Number = $datos['WhatsApp_Number'];

        // Guardar la vacante
        $vacante->save();

        // redireccionar
        session()->flash('mensaje', 'La Vacante se actualizó Correctamente');

        return redirect()->route('vacantes.index');
    }

    public function render()
    {
        // Consultar BD
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.editar-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
