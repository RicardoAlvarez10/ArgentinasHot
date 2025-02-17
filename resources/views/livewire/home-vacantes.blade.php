<div>
    <livewire:filtrar-vacantes />

    <div class="py-12 min-h-screen" style="background-image: linear-gradient(to left, rgba(13,0,36,1) 0%, rgba(56,9,121,1) 100%, rgba(0,212,255,1) 100%);">
        <div class="max-w-7xl mx-auto px-6">
            @foreach ($categorias as $categoria)
                @if ($categoria->vacantes->count() > 0)
                    <div class="mb-12">
                        <div class="p-6 rounded-lg shadow-lg text-white" 
                            style="background-image: linear-gradient(to left, rgba(13,0,36,1) 0%, rgba(56,9,121,1) 100%, rgba(0,212,255,1) 100%); box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.3);">
                            <h4 class="text-4xl font-extrabold mb-4 tracking-wide">
                                {{ $categoria->categoria }}
                            </h4>
                        </div>

                        <!-- Ajuste para que en pantallas pequeñas se muestren 2 imágenes por fila -->
                        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6 mt-6">
                            @foreach ($categoria->vacantes as $vacante)
                                <div class="relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105 duration-300 ease-in-out text-white"
                                    style="background-image: linear-gradient(to left, rgba(13,0,36,1) 0%, rgba(56,9,121,1) 100%, rgba(0,212,255,1) 100%); height: 256px; width: 192px;">
                                    <a href="{{ route('vacantes.show', $vacante->id) }}" class="block">
                                        <img src="{{ asset('storage/vacantes/' . $vacante->imagen ) }}" 
                                             alt="{{'Imagen vacante ' . $vacante->titulo}}" 
                                             class="w-full h-full object-cover mx-auto rounded-t-lg">
                                    </a>
                                    <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-4">
                                        <h3 class="text-lg font-semibold">
                                            {{ $vacante->titulo }}
                                        </h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
