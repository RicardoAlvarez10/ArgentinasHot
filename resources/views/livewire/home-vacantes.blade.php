<div>
    <livewire:filtrar-vacantes />

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <!-- <h3 class="font-extrabold text-4xl text-gray-700 mb-12 text-center">Para ti</h3> -->

            <!-- Contenedor de las categorías -->
            @foreach ($categorias as $categoria)
                @if ($categoria->vacantes->count() > 0)
                    <div class="mb-12">
                        <!-- Encabezado de categoría -->
                        <div style="background-image: linear-gradient(to left, rgba(13,0,36,1) 0%, rgba(56,9,121,1) 100%, rgba(0,212,255,1) 100%); box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.3);" 
                            class="p-6 rounded-lg">
                            <h4 class="text-4xl font-extrabold text-white mb-4 tracking-wide">
                                {{ $categoria->categoria }}
                            </h4>
                        </div>



                        <!-- Contenedor de las vacantes -->
                        <div class="grid md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6 mt-6">
                            @foreach ($categoria->vacantes as $vacante)
                                <div class="relative bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 ease-in-out max-w-full h-full">
                                    <!-- Título en la esquina inferior izquierda con texto blanco -->
                                    <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent text-white p-4">
                                        <h3 class="text-lg font-semibold">
                                            {{ $vacante->titulo }}
                                        </h3>
                                    </div>
                                    <!-- Imagen de fondo -->
                                    <a href="{{ route('vacantes.show', $vacante->id) }}">
                                        <img src="{{ asset('storage/vacantes/' . $vacante->imagen ) }}" 
                                             alt="{{'Imagen vacante ' . $vacante->titulo}}" 
                                             class="w-full h-64 object-cover">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
