<div class="p-8 bg-white rounded-lg shadow-lg"> 
    <div class="mb-6 text-center">
        <h3 class="font-bold text-2xl md:text-3xl text-gray-900">
            {{ $vacante->titulo }}
        </h3>
    </div>

    <div class="flex flex-col md:flex-row gap-8">
        <div class="flex-1">
            <img 
                class="w-full h-[350px] md:h-[200] object-cover rounded-lg shadow-md"
                src="{{ asset('storage/vacantes/' . $vacante->imagen ) }}"
                alt="{{ 'Imagen vacante ' . $vacante->titulo }}"
            >
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <h2 class="text-xl md:text-2xl font-bold mb-4 text-gray-800">Descripción</h2>
            <p class="text-gray-700 leading-relaxed flex-grow">
                {{ $vacante->descripcion }}
            </p>
        </div>
    </div>

    @cannot('create', App\Models\Vacante::class)
        <div class="mt-8 flex flex-col items-center space-y-6">
            <livewire:postular-vacante :vacante="$vacante" />
        </div>
    @endcannot
</div>