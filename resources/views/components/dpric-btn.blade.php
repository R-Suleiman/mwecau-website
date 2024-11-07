@props(['btnLink' => '#'])

<a href="{{$btnLink}}"><button
    class="p-2 text-lg text-white bg-purple-800 hover:text-purple-800 hover:bg-white hover:border-2 hover:border-purple-800">
   {{$slot}}
</button></a>
