<form class="md:w-1/2 space-y-5" wire:submit.prevent='editarVacante'>
    <div>
        <x-label for="titulo" :value="__('Titulo Vacante')" />
        <x-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="titulo" 
            :value="old('titulo')" 
            placeholder="Titulo Vacante"
        />

        @error('titulo')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="WhatsApp_Number" :value="__('WhatsApp_Number')" />
        <textarea
            wire:model="WhatsApp_Number"
            placeholder="Numero al que deseas que te contacten"
            class="block mt-1 w-full" 
        ></textarea>

        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="descripcion" :value="__('Descripción Puesto')" />
        <textarea
            wire:model="descripcion"
            placeholder="Descripción general del puesto, experiencia"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full h-72"
        ></textarea>

        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="imagen" :value="__('Imagen')" />
        <x-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            wire:model="imagen_nueva"
            accept="image/*"
        />
        
        <div class="my-5 w-80">
            <x-label :value="__('Imagen Actual')" />

            <img src="{{ asset('storage/vacantes/' . $imagen) }}" alt="{{ 'Imagen Vacante ' . $titulo }}">
        </div>

        <div class="my-5 w-80">
            @if($imagen_nueva) 
                Imagen Nueva:
                <img src="{{ $imagen_nueva->temporaryUrl() }}" >
            @endif
        </div>

        @error('imagen_nueva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <x-button>
        Guardar Cambios
    </x-button>

</form>