<x-layout>
    <div class="lg:grid lg:grid-cols-8">
@foreach($actors as $actor)
    <x-cast-card :actor="$actor"/>
@endforeach
    </div>
</x-layout>
