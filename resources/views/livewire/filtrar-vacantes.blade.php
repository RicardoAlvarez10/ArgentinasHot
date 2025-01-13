<div class="bg-gray-100 py-10 " style="background-image: linear-gradient(to left, rgba(13,0,36,1) 0%, rgba(56,9,121,1) 100%, rgba(0,212,255,1) 100%);">
    <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5 mt-20">Filtrar</h2>

    <div class="max-w-7xl mx-auto ">
        <form
            wire:submit.prevent='leerDatosFormulario'
        >
            <div class="md:grid md:grid-cols-1 gap-5">
                <div class="mb-5">
                    <label 
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="termino">
                    </label>
                    <input 
                        id="termino"
                        type="text"
                        placeholder="Buscar por nombre, descripcion o zona"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="termino"
                    />
                </div>

            </div>

            <div class="flex justify-end">
                <input 
                    type="submit"
                    class="bg-indigo-500 hover:bg-indigo-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                    value="Buscar"
                />
            </div>
        </form>
    </div>
</div>