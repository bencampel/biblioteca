<div class="px-5 py-12 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <div class="w-full md:w-1/2">
            <img alt="libro" class="object-cover object-center rounded border border-gray-200" src="{{$libro->getPortada()}}">
        </div>
        
        <div class="w-full md:w-1/2  md:pl-10 md:py-6 mt-6 md:mt-0">
            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">
                {{$libro->titulo}}
            </h1>
            <h2 class="text-sm title-font text-gray-500 tracking-widest mb-3">
                {{$libro->subtitulo}}
            </h2>

            <h2 class="text-gray-900 text-2xl title-font font-medium mb-1">Reseña</h2>
            <p class="leading-relaxed mb-3">
                {{$libro->resenia}}
            </p>

            <div class="flex justify-between items-center mb-3">
                <div>
                    <h2 class="text-gray-900 text-2xl title-font font-medium mb-1">Autores</h2>
                    <ul class="flex flex-col">
                        @foreach ($libro->autores as $autor)
                        <li class="font-semibold">{{$autor->nombre}}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <ul class="flex flex-col">
                        <li><span class="pr-1 font-semibold">ISBN:</span>{{$libro->ISBN}}</li>
                        <li><span class="pr-1 font-semibold">Publicado:</span>{{$libro->publicado->format('Y-m-d')}}</li>
                    </ul>
                </div>
            </div>
            

            <div class="flex items-center">
                
                @if ($libro->unidades > 0)
                <span class="title-font font-bold text-xl text-green-700">
                    DISPONIBLE
                </span>
                @else
                <span class="title-font font-bold text-xl text-red-700">
                   NO DISPONIBLE
                </span>
                @endif

                @if ($libro->unidades > 0)
                <button
                    class="flex ml-auto text-white bg-blue-700 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">
                    Reservar
                </button>
                @endif
            </div>
        </div>
    </div>
</div>
