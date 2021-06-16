<div>
    <form wire:submit.prevent="save" action="#" method="POST">
        <div class="bg-white shadow-md rounded max-w-4xl mx-auto p-10 md:p-14 mb-4 flex flex-col my-2">
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
                        Email
                    </label>
                    <input
                        wire:model="email"
                        class="@error('email') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                        id="email"
                        name="email"
                        type="text">

                    @error('email') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="dni">
                        DNI
                    </label>
                    <input
                        wire:model="dni"
                        class="@error('dni') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                        id="dni" 
                        name="dni" 
                        type="text">
                    
                    @error('dni') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="nombre">
                        Nombre
                    </label>
                    <input
                        wire:model="nombre"
                        class="@error('nombre') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                        id="nombre" 
                        name="nombre" 
                        type="text">

                    @error('nombre') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror

                </div>
                <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="apellido">
                        Apellido
                    </label>
                    <input
                        wire:model="apellido"
                        class="@error('apellido') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                        id="apellido" 
                        name="apellido" 
                        type="text">
                        
                    @error('apellido') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="telefono">
                        Telefono
                    </label>
                    <input
                        wire:model="telefono"
                        class="@error('telefono') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                        id="telefono" 
                        name="telefono" 
                        type="text">

                    @error('telefono') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="flex items-center justify-center">
                <button class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" type="submit">
                    Guardar
                </button>
            </div>
        </div>
    </form>
</div>