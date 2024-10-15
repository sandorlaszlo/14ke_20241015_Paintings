<x-layout>
    {{-- @dd($paintings) --}}

    <form method="POST" action="/paintings/search-by-title">
        @csrf
        <div class="mb-3 d-flex justify-content-center align-items-center">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control mx-2" id="text" name="title">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>


    <div class="row">
        @foreach ($paintings as $paint)
            <div class="col-md-3 my-2">
                <x-card :paint="$paint"></x-card>
            </div>
        @endforeach
    </div>
</x-layout>