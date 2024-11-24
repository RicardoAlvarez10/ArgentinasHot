<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $vacante->titulo }}
        </h3>
    </div>


    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-3">
            <img src="{{ asset('storage/vacantes/' . $vacante->imagen ) }}" alt="{{'Imagen vacante ' . $vacante->titulo}}">
        </div>

        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5">Descripción</h2>
            <p>{{$vacante->descripcion}}</p>
        </div>
    </div>


    @cannot('create', App\Models\Vacante::class) 
        <livewire:postular-vacante :vacante="$vacante" />
    @endcannot
</div>
