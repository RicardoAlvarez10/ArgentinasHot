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
    <x-label for="imagen" :value="__('PERFIL')" />
    <x-input 
        id="imagen" 
        class="block mt-1 w-full" 
        type="file" 
        wire:model="imagen_nueva"
        accept="image/*"
    />

    <div class="flex my-5 w-full">
        <div class="w-1/2 flex flex-col items-center">
            <x-label :value="__('Imagen Actual')" />
            <div class="w-full h-48 flex justify-center items-center border border-gray-300 rounded-md overflow-hidden">
                <img src="{{ asset('storage/vacantes/' . $imagen) }}" 
                    alt="{{ 'Imagen Vacante ' . $titulo }}" 
                    class="w-full h-full object-cover">
            </div>
        </div>

        @if($imagen_nueva) 
            <div class="w-1/2 flex flex-col items-center">
                <x-label :value="__('Imagen Nueva')" />
                <div class="w-full h-48 flex justify-center items-center border border-gray-300 rounded-md overflow-hidden">
                    <img src="{{ $imagen_nueva->temporaryUrl() }}" 
                        class="w-full h-full object-cover">
                </div>
            </div>
        @endif
    </div>

        @error('imagen_nueva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
    <x-label for="imagen1" :value="__('Imagen 1')" />
    <x-input 
        id="imagen1" 
        class="block mt-1 w-full" 
        type="file" 
        wire:model="imagen1_nueva"
        accept="image/*"
    />

    <div class="flex my-5 w-full">
        <div class="w-1/2 flex flex-col items-center">
            <x-label :value="__('imagen1 Actual')" />
            <div class="w-full h-48 flex justify-center items-center border border-gray-300 rounded-md overflow-hidden">
                <img src="{{ asset('storage/vacantes/' . $imagen1) }}" 
                    alt="{{ 'imagen1 Vacante ' . $titulo }}" 
                    class="w-full h-full object-cover">
            </div>
        </div>

        @if($imagen1_nueva) 
            <div class="w-1/2 flex flex-col items-center">
                <x-label :value="__('imagen1 Nueva')" />
                <div class="w-full h-48 flex justify-center items-center border border-gray-300 rounded-md overflow-hidden">
                    <img src="{{ $imagen1_nueva->temporaryUrl() }}" 
                        class="w-full h-full object-cover">
                </div>
            </div>
        @endif
    </div>

        @error('imagen1_nueva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
    <x-label for="imagen2" :value="__('Imagen2')" />
    <x-input 
        id="imagen2" 
        class="block mt-1 w-full" 
        type="file" 
        wire:model="imagen2_nueva"
        accept="image/*"
    />

    <div class="flex my-5 w-full">
        <div class="w-1/2 flex flex-col items-center">
            <x-label :value="__('imagen2 Actual')" />
            <div class="w-full h-48 flex justify-center items-center border border-gray-300 rounded-md overflow-hidden">
                <img src="{{ asset('storage/vacantes/' . $imagen2) }}" 
                    alt="{{ 'imagen2 Vacante ' . $titulo }}" 
                    class="w-full h-full object-cover">
            </div>
        </div>

        @if($imagen2_nueva) 
            <div class="w-1/2 flex flex-col items-center">
                <x-label :value="__('imagen2 Nueva')" />
                <div class="w-full h-48 flex justify-center items-center border border-gray-300 rounded-md overflow-hidden">
                    <img src="{{ $imagen2_nueva->temporaryUrl() }}" 
                        class="w-full h-full object-cover">
                </div>
            </div>
        @endif
    </div>

        @error('imagen2_nueva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>



    <div>
    <x-label for="imagen3" :value="__('imagen3')" />
    <x-input 
        id="imagen3" 
        class="block mt-1 w-full" 
        type="file" 
        wire:model="imagen3_nueva"
        accept="image/*"
    />

    <div class="flex my-5 w-full">
        <div class="w-1/2 flex flex-col items-center">
            <x-label :value="__('imagen3 Actual')" />
            <div class="w-full h-48 flex justify-center items-center border border-gray-300 rounded-md overflow-hidden">
                <img src="{{ asset('storage/vacantes/' . $imagen3) }}" 
                    alt="{{ 'imagen3 Vacante ' . $titulo }}" 
                    class="w-full h-full object-cover">
            </div>
        </div>

        @if($imagen3_nueva) 
            <div class="w-1/2 flex flex-col items-center">
                <x-label :value="__('imagen3 Nueva')" />
                <div class="w-full h-48 flex justify-center items-center border border-gray-300 rounded-md overflow-hidden">
                    <img src="{{ $imagen3_nueva->temporaryUrl() }}" 
                        class="w-full h-full object-cover">
                </div>
            </div>
        @endif
    </div>

        @error('imagen3_nueva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
    <x-label for="imagen4" :value="__('imagen4')" />
    <x-input 
        id="imagen4" 
        class="block mt-1 w-full" 
        type="file" 
        wire:model="imagen4_nueva"
        accept="image/*"
    />

    <div class="flex my-5 w-full">
        <div class="w-1/2 flex flex-col items-center">
            <x-label :value="__('imagen4 Actual')" />
            <div class="w-full h-48 flex justify-center items-center border border-gray-300 rounded-md overflow-hidden">
                <img src="{{ asset('storage/vacantes/' . $imagen4) }}" 
                    alt="{{ 'imagen4 Vacante ' . $titulo }}" 
                    class="w-full h-full object-cover">
            </div>
        </div>

        @if($imagen4_nueva) 
            <div class="w-1/2 flex flex-col items-center">
                <x-label :value="__('imagen4 Nueva')" />
                <div class="w-full h-48 flex justify-center items-center border border-gray-300 rounded-md overflow-hidden">
                    <img src="{{ $imagen4_nueva->temporaryUrl() }}" 
                        class="w-full h-full object-cover">
                </div>
            </div>
        @endif
    </div>

        @error('imagen4_nueva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
    <x-label for="imagen5" :value="__('imagen5')" />
    <x-input 
        id="imagen5" 
        class="block mt-1 w-full" 
        type="file" 
        wire:model="imagen5_nueva"
        accept="image/*"
    />

    <div class="flex my-5 w-full">
        <div class="w-1/2 flex flex-col items-center">
            <x-label :value="__('imagen5 Actual')" />
            <div class="w-full h-48 flex justify-center items-center border border-gray-300 rounded-md overflow-hidden">
                <img src="{{ asset('storage/vacantes/' . $imagen5) }}" 
                    alt="{{ 'imagen5 Vacante ' . $titulo }}" 
                    class="w-full h-full object-cover">
            </div>
        </div>

        @if($imagen5_nueva) 
            <div class="w-1/2 flex flex-col items-center">
                <x-label :value="__('imagen5 Nueva')" />
                <div class="w-full h-48 flex justify-center items-center border border-gray-300 rounded-md overflow-hidden">
                    <img src="{{ $imagen5_nueva->temporaryUrl() }}" 
                        class="w-full h-full object-cover">
                </div>
            </div>
        @endif
    </div>

        @error('imagen5_nueva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <x-button>
        Guardar Cambios
    </x-button>
</form>
