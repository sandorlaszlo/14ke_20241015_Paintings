<x-layout>
    {{-- @dd($paintings) --}}

    <div class="row">
        <form class="col-md-6" method="POST" action="/paintings/search-by-artist">
            @csrf
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="title" class="form-label">Artist</label>
                <select class="form-select mx-2" id="artist" name="artist">
                    @foreach ($artists as $artist)
                        @if (old('artist') == $artist)
                            <option selected value="{{ $artist }}">{{ $artist }}</option>
                        @else
                            <option value="{{ $artist }}">{{ $artist }}</option>
                        @endif
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
        
        <form class="col-md-6" method="POST" action="/paintings/search-by-title">
            @csrf
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control mx-2" id="text" name="title" value="{{ old('title') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>


    <div class="row">
        @foreach ($paintings as $paint)
            <div class="col-md-3 my-2">
                <x-card :paint="$paint"></x-card>
            </div>
        @endforeach
    </div>
</x-layout>