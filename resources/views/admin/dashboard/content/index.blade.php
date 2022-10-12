@extends('partials.nav-admin')

@section('container')
    <div class="w-full p-10">
        {{-- name section --}}
        <h1 class="w-max text-3xl font-semibold border-b-4 border-blue-secondary">Content</h1>

        {{-- add content dan search  --}}
        <div class="flex justify-between mt-7">
            <a href="/dashboard/content/create" class="bg-blue-secondary p-2">Add Content</a>

            <form action="/dashboard/content" method="get" class="w-[87%] flex">
                <input type="text" name="search-content" id="" value="{{ request('search-content') }}" class="w-full bg-transparent border-2 border-blue-secondary outline-none px-2">

                <button type="submit" class="bg-blue-secondary px-4">Search</button>
            </form>
        </div>

        {{-- table --}}
        <table class="w-full mt-4 bg-slate-admin text-center text-sm">
            <tr>
                <td class="text-cyan-primary py-1 w-[50px]">No</td>
                <td class="text-cyan-primary py-1 w-[150px]">Poster</td>
                <td class="text-cyan-primary py-1 px-1">Title</td>
                <td class="text-cyan-primary py-1 w-[130px]">Date</td>
                <td class="text-cyan-primary py-1 w-[150px]">Author</td>
                <td class="text-cyan-primary py-1 w-[100px]">Youtube</td>
                <td class="text-cyan-primary py-1 w-[140px]">Action</td>
            </tr>
            @foreach ($contents as $key => $content)
                <tr class="border-y-4 border-body">
                    <td class="py-3">{{ $contents->firstItem() + $key }}</td>
                    <td class="py-3"><img src="{{ asset('storage/' . $content->poster) }}" alt=""></td>
                    <td class="py-3 capitalize">{{ $content->title }}</td>
                    <td class="py-3">{{ $content->date }}</td>
                    <td class="py-3">{{ $content->author }}</td>
                    <td class="py-3">{{ $content->youtube_on_off }}</td>
                    <td class="py-3">
                        <a href="/content/{{ $content->slug }}"><i class="fa-solid fa-eye"></i></a>
                        <a href="/dashboard/content/{{ $content->id }}/edit" class="mx-2"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="/dashboard/content/{{ $content->id }}" method="post" class="inline">
                            @method('delete')
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus &quot;{{ $content->title }}&quot')"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>                
            @endforeach
        </table>

        @if ($contents->count() < 1)
            <p class="w-max mx-auto mt-5">Content yang anda cari tidak ditemukan</p>
        @endif

        <div class="w-full flex justify-center mt-5">
            {{ $contents->links() }}
        </div>
    </div>
@endsection