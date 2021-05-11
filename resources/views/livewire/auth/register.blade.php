<div>
    <form wire:submit.prevent="register" action="#" method="POST">
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
                        type="text" 
                        placeholder="juan@miemail.com">

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
                        type="text" 
                        placeholder="11223344">
                    
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
                        type="text" 
                        placeholder="Juan">

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
                        type="text" 
                        placeholder="Perez">
                        
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
                        type="text" 
                        placeholder="+54 (011) 4811 3766">

                    @error('telefono') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="password">
                        Contraseña
                    </label>
                    <input
                        wire:model.lazy="password"
                        class="@error('password') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                        id="password" 
                        name="password" 
                        type="password" 
                        placeholder="******************">

                    @error('password') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="password-confirm">
                        Repetir Contraseña
                    </label>
                    <input
                        wire:model.lazy="passwordConfirmation"
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                        id="passwordConfirmation" 
                        name="passwordConfirmation" 
                        type="password" 
                        placeholder="******************">
                </div>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" type="submit">
                    Registrase
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="/login">
                    Ya tengo una cuenta
                </a>
            </div>
        </div>
    </form>
</div>