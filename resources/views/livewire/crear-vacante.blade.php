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
        <x-label for="categoria" :value="__('Categoría')" />
        <select
            id="categoria"
            wire:model="categoria"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
            <option>-- Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{$categoria->categoria}}</option>
            @endforeach
        </select>

        @error('categoria')
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


    <div>
        <x-label for="imagen1" :value="__('Imagen1')" />
        <x-input 
            id="imagen1" 
            class="block mt-1 w-full" 
            type="file" 
            wire:model="imagen1"
            accept="image/*"
        />

        <div class="my-5 w-80">
            @if($imagen1) 
                Imagen:
                <img src="{{ $imagen1->temporaryUrl() }}" >
            @endif
        </div>

        @error('imagen1')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
        <x-label for="imagen2" :value="__('Imagen2')" />
        <x-input 
            id="imagen2" 
            class="block mt-1 w-full" 
            type="file" 
            wire:model="imagen2"
            accept="image/*"
        />

        <div class="my-5 w-80">
            @if($imagen2) 
                Imagen:
                <img src="{{ $imagen2->temporaryUrl() }}" >
            @endif
        </div>

        @error('imagen2')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
        <x-label for="imagen3" :value="__('Imagen3')" />
        <x-input 
            id="imagen3" 
            class="block mt-1 w-full" 
            type="file" 
            wire:model="imagen3"
            accept="image/*"
        />

        <div class="my-5 w-80">
            @if($imagen3) 
                Imagen:
                <img src="{{ $imagen3->temporaryUrl() }}" >
            @endif
        </div>

        @error('imagen3')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
        <x-label for="imagen4" :value="__('Imagen4')" />
        <x-input 
            id="imagen4" 
            class="block mt-1 w-full" 
            type="file" 
            wire:model="imagen4"
            accept="image/*"
        />

        <div class="my-5 w-80">
            @if($imagen4) 
                Imagen:
                <img src="{{ $imagen4->temporaryUrl() }}" >
            @endif
        </div>

        @error('imagen4')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
        <x-label for="imagen5" :value="__('Imagen5')" />
        <x-input 
            id="imagen5" 
            class="block mt-1 w-full" 
            type="file" 
            wire:model="imagen5"
            accept="image/*"
        />

        <div class="my-5 w-80">
            @if($imagen5) 
                Imagen:
                <img src="{{ $imagen5->temporaryUrl() }}" >
            @endif
        </div>

        @error('imagen5')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <x-button>
        Crear Post
    </x-button>

</form>