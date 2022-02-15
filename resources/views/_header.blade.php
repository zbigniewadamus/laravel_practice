
<header class="max-w-2xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Ogromna ilość filmów polskich<br/> i zagranicznych
    </h1>

    <h2 class="inline-flex mt-2">tylko w <img class="ml-3" src="./IMG/logo.png" width="120px" height="12px"
                                              alt="Filmen"></h2>

    <p class="text-sm mt-14 max-w-xl m-auto ">
        Kolejny rok. Kolejne filmy w bazie. Uzupełniamy naszą bazę filmów.
        Mamy nadzieje, że zdążycie obejrzeć je wszystkie!
    </p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->
        <div class="relative flex lg:inline-flex items-center bg-yellow-400 rounded-xl text-black">
            <select class="flex-1 appearance-none bg-transparent rounded-xl py-2 pl-3 pr-9 text-sm font-semibold text-black capitalize">
                <option value="kategorie" disabled selected hidden>kategorie</option>
                <option value="kategorie" >Wszystko</option>
                <option value="akcja">akcja</option>
                <option value="komedia">komedia</option>
                <option value="kryminalny">kryminalny</option>
                <option value="obyczajowy">obyczajowy</option>
                <option value="przygodowy">przygodowy</option>
                <option value="sci-fi">sci-fi</option>
            </select>

            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                 height="22" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222"
                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg>
        </div>

        <!-- Other Filters -->
        <div class="relative flex w-56 lg:inline-flex items-center bg-yellow-400  rounded-xl text-black">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="name" selected>Sortuj wg. nazwy
                </option>
                <option value="availability">Sortuj wg. dostępności
                </option>
                <option value="blank">Sortowanie na kiju
                </option>
            </select>

            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                 height="22" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222"
                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg>
        </div>

        <!-- Search -->
        <div class=" flex lg:inline-flex items-center bg-yellow-400  rounded-xl text-black ">
            <form method="GET" action="#" class="flex">
                <input type="text" name="search" placeholder="Szukaj..."
                       class="bg-transparent placeholder-black font-semibold text-sm px-3 py-2 ">
                <button type="submit" class="hover:scale-125">
                    <svg class="mr-3 "
                         xmlns="http://www.w3.org/2000/svg"
                         aria-hidden="true"
                         role="img"
                         width="1em"
                         height="1em"
                         reserveAspectRatio="xMidYMid meet"
                         viewBox="0 0 20 20">
                        <path
                            d="M17.545 15.467l-3.779-3.779a6.15 6.15 0 0 0 .898-3.21c0-3.417-2.961-6.377-6.378-6.377A6.185 6.185 0 0 0 2.1 8.287c0 3.416 2.961 6.377 6.377 6.377a6.15 6.15 0 0 0 3.115-.844l3.799 3.801a.953.953 0 0 0 1.346 0l.943-.943c.371-.371.236-.84-.135-1.211zM4.004 8.287a4.282 4.282 0 0 1 4.282-4.283c2.366 0 4.474 2.107 4.474 4.474a4.284 4.284 0 0 1-4.283 4.283c-2.366-.001-4.473-2.109-4.473-4.474z"
                            fill="currentColor"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</header>
