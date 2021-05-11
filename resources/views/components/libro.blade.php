<div class="w-52 mx-4 rounded overflow-hidden shadow-lg my-2 bg-white transform hover:scale-105 duration-300 ease-in-out">
    <a href="/libros/{{$libro->id}}">
        <img class="w-full" src="{{$libro->getPortada()}}" alt="libro item">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">
                {{$libro->titulo}}
            </div>
            <p class="text-grey-darker text-base mb-2">
                {{$libro->subtitulo}}
            </p>
            @if ($libro->unidades > 0)
            <p class="title-font font-bold text-base text-green-700">
                DISPONIBLE
            </p>
            @else
            <p class="title-font font-bold text-base text-red-700">
                NO DISPONIBLE
            </p>
            @endif
        </div>
    </a>
</div>