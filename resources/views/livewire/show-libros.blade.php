<div>
    <x-search />
    
    @if ($libros->count())
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 justify-items-center md:px-6">
            @foreach ($libros as $libro)
                <x-libro :libro="$libro"></x-libro>
            @endforeach
        </div>

        <div class="my-5 flex justify-center">
            {{ $libros->links() }}
        </div>
    @else
        <div>
            <x-alerts.info>
                No se encontraron resultados
            </x-alerts.info>
        </div>
    @endif
    
</div>




