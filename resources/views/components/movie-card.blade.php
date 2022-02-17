@props(['movie'])
<article
    class="transition-colors duration-300 hover:bg-gray-700 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-5 px-5">
        <div class="space-x-2 mb-2.5">
            <a href="#"
               class="px-3 py-1 border border-yellow-400 rounded-full text-yellow-400 hover:text-yellow-700 hover:border-yellow-700 text-xs uppercase font-semibold"
               style="font-size: 10px">{{$movie->category['name']}}  </a>
            <a href="#"
               class="px-3 py-1 rounded-full text-black bg-yellow-400 hover:bg-yellow-700 text-xs uppercase font-semibold"
               style="font-size: 10px">{{$movie->yearOfProduction}}</a>
        </div>
        <div>
            <img src="./IMG/movie_photo/{{$movie->cover}}" alt="Movie illustration" class="rounded-xl mx-auto">
        </div>

        <div class="mt-2 flex flex-col justify-between">
            <header>
                <div class="mt-4">
                    <h1 class="text-3xl">
                        {{$movie->title}}
                    </h1>
                    <span class="mt-2 block text-gray-400 text-xs">
                        Dostępna ilość: <span>1</span>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-4">
                <p style="text-indent:10px">
                    {{$movie->description}}
                </p>

                <p class="mt-4 text-xs">
                    Obsada:




            </div>


            <div class="my-10 text-right">
                <a href="./{{$movie->title}}"
                   class=" transition-colors duration-300 text-xs font-semibold bg-yellow-400 hover:bg-yellow-700 rounded-full py-2 px-8"
                >
                    Zobacz więcej
                </a>
            </div>

        </div>
    </div>
</article>
