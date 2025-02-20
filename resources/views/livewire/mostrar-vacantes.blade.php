<div>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        @forelse ($vacantes as $vacante)
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">

            <div class="space-y-3">
                <a href="{{ route('vacantes.show', $vacante->id ) }}" class="text-xl font-bold truncate block max-w-xs">
                    {{ $vacante->titulo }}
                </a>
            </div>


                <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
                    <a 
                        href="{{ route('vacantes.edit', $vacante->id) }}"
                        class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center" 
                    >Editar</a>

                    <button 
                        wire:click="$emit('mostrarAlerta', {{ $vacante->id }})"
                        class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                    >Eliminar</button>

                </div>
            </div>
        @empty 
            <p class="p-3 text-center text-sm text-gray-600">No se encontraron coincidencias</p>
        @endforelse
    </div>

</div>

@push('scripts')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        Livewire.on('mostrarAlerta', vacanteId => {
            Swal.fire({
                title: '¿Eliminar Vacante?',
                text: "Una vacante eliminada no se puede recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, ¡Eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // eliminar la vacante
                    Livewire.emit('eliminarVacante', vacanteId)

                    Swal.fire(
                        'Se eliminó la Vacante',
                        'Eliminado Correctamente',
                        'success'
                    )
                }
            })
        }) 

        
    </script>
@endpush