<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class HomeVacantes extends Component
{

    public $termino;
    
    protected $listeners = ['terminosBusqueda' => 'buscar'];

    public function buscar($termino)
    {
        $this->termino = $termino;
    }

    public function render()
    {
        // $vacantes = Vacante::all();

        $vacantes = Vacante::when($this->termino, function($query) {
            $query->where('titulo', 'LIKE', "%" . $this->termino . "%" )->orWhere('descripcion', 'LIKE', "%" . $this->termino . "%");
        })->orderBy('updated_at', 'desc')->paginate(20);
        

        return view('livewire.home-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
