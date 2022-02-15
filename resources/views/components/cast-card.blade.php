@props(['actor'])
<div class="flex flex-col max-w-2xl overflow-auto">
     <div class="m-10" style="width:120px;">
        <img  src="./IMG/actors_photo/{{$actor->photo}}" style="height:160px;  object-fit: cover;"/>

    </div>
    <div>
        <p>{{$actor->firstName}} {{$actor->lastName}}</p>
    </div>
</div>




