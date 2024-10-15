<x-layout>
    <h1>Paintings</h1>
    {{-- @dd($paintings) --}}
    <div class="row">
        @foreach ($paintings as $paint)
            <div class="col-md-3 my-2">
                <x-card :paint="$paint"></x-card>
            </div>
        @endforeach
    </div>
</x-layout>