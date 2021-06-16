<div>
    <div class="max-w-4xl mx-auto">
        <div class="bg-white shadow-md rounded my-6">
            @if(count($cart['libros']) > 0)
            <table class="text-left w-full border-collapse">
                <thead>
                    <tr>
                        <th
                            class="py-4 bg-grey-lightest font-bold uppercase text-sm text-center text-grey-dark border-b border-grey-light">
                            Portada</th>
                        <th
                            class="py-4 bg-grey-lightest font-bold uppercase text-sm text-center text-grey-dark border-b border-grey-light">
                            Titulo</th>
                        <th
                            class="py-4 bg-grey-lightest font-bold uppercase text-sm text-center text-grey-dark border-b border-grey-light">
                            Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart['libros'] as $libro)
                    <tr class="hover:bg-grey-lighter">
                        <td class="border-b border-grey-light">
                            <img class="w-20 mx-auto" src="{{$libro->getPortada()}}" alt="libro item">
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light uppercase text-sm text-center">
                            {{ $libro->titulo }}
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light uppercase text-sm text-center">
                            <a wire:click="removeFromCart({{ $libro->id }})"
                                class="text-green-600 font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark cursor-pointer">
                                Quitar
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-right w-full p-6">
                <button wire:click="confirmarPrestamo()"
                    class="flex ml-auto text-white bg-blue-700 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">
                    Confirmar Prestamo
                </button>
            </div>
            @else
            <div class="text-center w-full border-collapse p-6">
                <span class="text-lg">¡Tu carrito esta vacio!</span>
            </div>
            @endif
        </div>
    </div>
</div>