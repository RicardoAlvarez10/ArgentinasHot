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
        // Obtener categorías con vacantes, aplicando el término de búsqueda si existe
        $categorias = \App\Models\Categoria::with(['vacantes' => function ($query) {
            $query->when($this->termino, function ($query) {
                $query->where('titulo', 'LIKE', "%" . $this->termino . "%")
                      ->orWhere('descripcion', 'LIKE', "%" . $this->termino . "%");
            })->orderBy('updated_at', 'desc'); // Ordenar por updated_at
        }])->whereHas('vacantes', function ($query) {
            $query->when($this->termino, function ($query) {
                $query->where('titulo', 'LIKE', "%" . $this->termino . "%")
                      ->orWhere('descripcion', 'LIKE', "%" . $this->termino . "%");
            });
        })->get();

        // Retornar la vista con las categorías
        return view('livewire.home-vacantes', [
            'categorias' => $categorias
        ]);
    }
}
