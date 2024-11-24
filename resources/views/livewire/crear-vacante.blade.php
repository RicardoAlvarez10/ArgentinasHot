<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>
    <div>
        <x-label for="titulo" :value="__('Titulo Post')" />
        <x-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="titulo" 
            :value="old('titulo')" 
            placeholder="Titulo Post"
        />

        @error('titulo')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="WhatsApp_Number" :value="__('WhatsApp_Number')" />
        <textarea
            wire:model="WhatsApp_Number"
            placeholder="Numero de WhatsApp"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full h-11"
        ></textarea>

        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="descripcion" :value="__('Descripción')" />
        <textarea
            wire:model="descripcion"
            placeholder="Descripción general"
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
            wire:model="imagen"
            accept="image/*"
        />

        <div class="my-5 w-80">
            @if($imagen) 
                Imagen:
                <img src="{{ $imagen->temporaryUrl() }}" >
            @endif
        </div>

        @error('imagen')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <x-button>
        Crear Post
    </x-button>

</form>