@extends('partials.nav-admin')

@section('container')
    <div class="w-full p-10">
        {{-- name section --}}
        <h1 class="w-max text-3xl font-semibold border-b-4 border-blue-secondary">Content</h1>

        {{-- add content dan search  --}}
        <div class="flex justify-between mt-7">
            <a href="/dashboard/category/create" class="bg-blue-secondary p-2">Add Category</a>
        </div>

        {{-- table --}}
        <table class="w-full mt-4 bg-slate-admin text-center text-sm">
            <tr>
                <td class="text-cyan-primary py-1">No</td>
                <td class="text-cyan-primary py-1">Name</td>
                <td class="text-cyan-primary py-1 px-1">Url</td>
                <td class="text-cyan-primary py-1 px-1">Action</td>
            </tr>

            @foreach ($categories as $category)
                <tr class="border-y-4 border-body">
                    <td class="py-3">{{ $loop->iteration }}</td>
                    <td class="py-3">{{ $category->name }}</td>
                    <td class="py-3">{{ $category->url }}</td>
                    <td class="py-3">
                        <a href="/dashboard/category/{{ $category->id }}/edit" class="mx-2"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="/dashboard/category/{{ $category->id }}" method="post" class="inline">
                            @method('delete')
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus category &quot;{{ $category->name }}&quot')"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {{-- @if ($contents->count() < 1)
            <p class="w-max mx-auto mt-5">Content yang anda cari tidak ditemukan</p>
        @endif --}}
    </div>
@endsection