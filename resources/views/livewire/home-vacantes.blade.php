<div>
    <livewire:filtrar-vacantes />

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-700 mb-12 text-center">Para ti</h3>

            <!-- Contenedor de las vacantes -->
            <div class="grid md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-6" >
                @forelse ($vacantes as $vacante)
                    <div class="bg-green p-6 rounded-lg border border-gray-200 shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out max-w-full h-full  ">
                        <a class="text-2xl font-bold text-gray-700 mb-2 hover:text-aqua-600 transition-colors duration-300" href="{{ route('vacantes.show', $vacante->id) }}">
                            {{$vacante->titulo}}
                            <img src="{{ asset('storage/vacantes/' . $vacante->imagen ) }}" alt="{{'Imagen vacante ' . $vacante->titulo}}"  class="w-full h-auto object-contain rounded-md mx-auto max-w-full">
                        </a>
                        <p class="text-sm text-gray-500 mb-3 font-semibold ">{{$vacante->empresa}}</p>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-600">No hay vacantes aún</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
