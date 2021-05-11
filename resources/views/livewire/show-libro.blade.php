<div>
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-10 pt-10 text-xl">
            <ol class="list-reset flex text-blue-600">
                <li>
                    <a href="/libros" class="font-bold">Libros</a>
                </li>
                <li>
                    <span class="mx-2">/</span>
                </li>
                <li>
                    <a href="/libros/{{$libro->id}}">{{$libro->titulo}}</a>
                </li>
            </ol>
        </div>
        
        <x-libroDetalle :libro="$libro" />
    </section>
</div>
