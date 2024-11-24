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
    // public $categoria;
    // public $empresa;
    // public $ultimo_dia;
    public $descripcion;
    public $imagen;
    public $imagen_nueva;
    public $WhatsApp_Number;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        // 'salario' => 'required',
        // 'categoria' => 'required',
        // 'empresa' => 'required',
        // 'ultimo_dia' => 'required',
        'descripcion' => 'required',
        'imagen_nueva' => 'nullable|image|max:10240',
        'WhatsApp_Number' => 'required',
    ];

    public function mount(Vacante $vacante)
    {
        $this->vacante_id = $vacante->id;
        $this->titulo = $vacante->titulo;
        // $this->salario = $vacante->salario_id;
        // $this->categoria = $vacante->categoria_id;
        // $this->empresa = $vacante->empresa;
        // $this->ultimo_dia = Carbon::parse( $vacante->ultimo_dia)->format('Y-m-d');
        $this->descripcion = $vacante->descripcion;
        $this->imagen = $vacante->imagen;
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

        // Encontrar la vacante a editar
        $vacante = Vacante::find($this->vacante_id);

        // Asignar los valores
        $vacante->titulo = $datos['titulo'];
        // $vacante->salario_id = $datos['salario'];
        // $vacante->categoria_id = $datos['categoria'];
        // $vacante->empresa = $datos['empresa'];
        // $vacante->ultimo_dia = $datos['ultimo_dia'];
        $vacante->descripcion = $datos['descripcion'];
        $vacante->imagen = $datos['imagen'] ?? $vacante->imagen;
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
