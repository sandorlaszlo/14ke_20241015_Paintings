<x-layout>

    <x-slot name="title">{{ $paint['Painting'] }}</x-slot>

    <img class="float-end" src="{{ $paint['Image'] }}" alt="">
    @foreach ($paint as $key => $value)
        @if ($key != 'Image' && $key != 'Painting' && $value != '')
            @if (str_contains($key, 'Wikipedia'))
                <p><a target="_blank" href='{{ $value }}'>{{$key}}</a></p>
            @else
                <p><b>{{$key}}</b>: {{$value}}</p>
            @endif
        @endif
    @endforeach
</x-layout>