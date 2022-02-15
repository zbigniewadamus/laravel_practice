
<x-layout>

    @include('_header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <div class="lg:grid lg:grid-cols-4 md:grid md:grid-cols-2">
            @foreach($movie_data as $movie)
                <x-movie-card :movie="$movie"/>
            @endforeach
        </div>
    </main>
</x-layout>

