<!doctype html>

<title>Filmen</title>
<link rel="icon"

      href="IMG/favicon.ico">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">

<body style="font-family: Nunito; background-color:#0f0f0f; color:white;">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="./">
                    <img src="./IMG/logo.png" alt="Wypozyczalnia logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0">
                <a href="#" class="text-xs font-bold uppercase">zaloguj</a>

                <a href="#" class="bg-yellow-400 ml-3 rounded-full text-xs font-semibold text-black uppercase py-3 px-5">
                    zarejestruj
                </a>
            </div>
        </nav>
        {{ $slot }}
    </section>
</body>
