<div>
    <div class="max-w-4xl mx-auto">
        <div class="bg-white shadow-md rounded my-6">
            @if ($prestamos->count())
            <table class="text-left w-full border-collapse">
                <thead>
                    <tr>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-center text-grey-dark border-b border-grey-light">
                            #
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-center text-grey-dark border-b border-grey-light">
                            Fecha
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-center text-grey-dark border-b border-grey-light">
                            Hora
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-center text-grey-dark border-b border-grey-light">
                            Devolucion
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-center text-grey-dark border-b border-grey-light">
                            Estado
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-center text-grey-dark border-b border-grey-light">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prestamos as $prestamo)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light uppercase text-sm text-center">
                            {{ $prestamo->id }}
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light uppercase text-sm text-center">
                            {{ $prestamo->created_at->format('Y-m-d') }}
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light uppercase text-sm text-center">
                            {{ $prestamo->created_at->format('h:i A') }}
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light uppercase text-sm text-center">
                            {{ $prestamo->fecha_devolucion->format('Y-m-d') }}
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light uppercase text-sm text-center text-green-600">
                            {{ $prestamo->estadoPrestamo() }}
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light uppercase text-sm text-center">
                            @if($prestamo->puedeCancelar())
                            <button
                                wire:click="cancelarPrestamo({{ $prestamo->id }})"
                                class="text-red-600 font-bold py-1 px-3 rounded hover:text-red-500 cursor-pointer">
                                Cancelar
                            </button>
                            @else
                            <span> -- </span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @else
            <div class="text-center w-full border-collapse p-6">
                <span class="text-lg">¡No Tienes prestamos en el sistema!</span>
            </div>
            @endif
        </div>
    </div>
</div>