@extends('partials.nav-admin')

@section('container')
<div class="w-full p-10">
    {{-- name section --}}
    <h1 class="w-max text-3xl font-semibold border-b-4 border-blue-secondary">Images</h1>

    {{-- add content dan search  --}}
    <div class="flex justify-between mt-7">
        <a href="/dashboard/image/create" class="bg-blue-secondary py-2 px-4">Add Image</a>

        <form action="/dashboard/image" method="get" class="w-[87%] flex">
            <input type="text" name="search" id="" value="{{ request('search') }}" class="w-full bg-transparent border-2 border-blue-secondary outline-none px-2">

            <button type="submit" class="bg-blue-secondary px-4">Search</button>
        </form>
    </div>

    <div class="mt-5 -ml-1 -mr-1">
        <div class="flex flex-wrap">
            @foreach ($images as $image)
                <div class="w-[19.1%] h-32 bg-black m-1 rounded-md overflow-hidden relative">
                    <div class="absolute top-0 right-0 w-7 h-7 bg-blue-secondary">
                        <form action="/dashboard/image/{{ $image->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" onclick="return confirm('Hapus image?')" class="w-7 h-7"><i class="fas fa-trash-alt text-sm"></i></button>
                        </form>
                    </div>
                    <img src="{{ asset('storage/' . $image->img) }}" alt="" class="w-full h-full object-cover">
                </div>
            @endforeach
        </div>
        @if ($images->count() < 1)
            <p class="w-max mx-auto mt-5">Image yang anda cari tidak ditemukan</p>
        @endif

        <div class="w-full flex justify-center mt-5">
            {{ $images->links() }}
        </div>
    </div>
</div>
@endsection