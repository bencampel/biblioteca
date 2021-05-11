<div>
    <form wire:submit.prevent="login" action="#" method="POST">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 md:px-16 md:py-16 mb-4 flex flex-col max-w-4xl mx-auto">
            <div class="mb-4">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    wire:model="email"
                    class="@error('email') border-red-500 @enderror appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                    id="email" 
                    type="text"
                    name="email"
                    placeholder="juan@miemail.com">
                
                @error('email') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div class="mb-6">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
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
            <div class="flex items-center justify-between">
                <button class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" type="submit">
                    Iniciar
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="/register">
                    Crear una Cuenta
                </a>
            </div>
        </div>
    </form>
</div>
