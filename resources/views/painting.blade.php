<x-layout>
    <img class="float-end" src="{{ $paint['Image'] }}" alt="">
    <h1>{{$paint['Painting']}}</h1>
    @foreach ($paint as $key => $value)
        @if ($key != 'Image')
            <p><b>{{$key}}</b>: {{$value}}</p>
        @endif
    @endforeach
</x-layout>