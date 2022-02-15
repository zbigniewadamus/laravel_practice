
@props(['movie'])
<article class="mt-16 max-w-2xl m-auto">
    <div class="">
        <a href="./" class="flex hover:text-yellow-400">
            <svg class="text-6xl" xmlns="http://www.w3.org/2000/svg"
                 aria-hidden="true" role="img"
                 width="1em" height="1em"
                 preserveAspectRatio="xMidYMid meet"
                 viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M13.83 19a1 1 0 0 1-.78-.37l-4.83-6a1 1 0 0 1 0-1.27l5-6a1 1 0 0 1 1.54 1.28L10.29 12l4.32 5.36a1 1 0 0 1-.78 1.64z"
                />
            </svg>
            <p class="pt-5 hover:scale-125">Wróć do listy</p>
        </a>
    </div>
    <div class="flex py-5 px-5 ">
        <div class="">
            <img src="./IMG/movie_photo/{{$movie->cover}}" alt="Movie photo" class="m-5 " onerror="this.onerror=null; this.src='./IMG/movie_photo/blankMoviePicture.png'">
        </div>

        <div class="flex flex-col justify-center">

            <header>
                <div class="space-x-2">
                    <a href="#"
                       class="px-3 py-1 border border-yellow-400 rounded-full text-yellow-400 hover:text-yellow-700 hover:border-yellow-700 text-xs uppercase font-semibold"
                      >{{$movie->name}}
                    </a>
                </div>

                <div class="mt-5">
                    <h1 class="text-5xl">
                        {{$movie->title}}
                    </h1>
                    <span class="mt-2 ml-5 block text-gray-400 text-s">
                         Dostępna ilość: <span>1</span>
                    </span>
                </div>
            </header>


            <form method="POST" action="/loan" class="">
                <input value="{{$movie->id}}" hidden/>
                <button class=" transition-colors duration-600 ml-2.5 mt-10 text-black text-xl bg-yellow-400 hover:bg-yellow-700 rounded-full py-2 px-6 mauto" type="submit">
                    {{$movie->price}} zł na 48h
                </button>
                <p class="relative top-1.5 left-16 text-gray-400 italic text-xs">Naciśnij aby zamówić</p>
            </form>
        </div>
    </div>
    <div class=" text-xl mt-4">
        <p style="text-indent:20px">
            {{$movie->description}}
        </p>

        <p class="mt-4 text-sm">
            Obsada:
            @yield("obsada")
        </p>
    </div>
</article>





<!--
            -->
