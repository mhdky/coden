@extends('partials.nav-admin')

@section('container')
<div class="w-full p-10">
    {{-- name section --}}
    <h1 class="w-max text-3xl font-semibold border-b-4 border-blue-secondary">Add Category</h1>

    <form action="/dashboard/category/{{ $category->id }}" method="post" class="mt-10">
        @method('put')
        @csrf
        <div class="w-full">
            {{-- name --}}
            <p class="ml-1">Category Name</p>
            <input type="text" required name="name" value="{{ old('name', $category->name) }}" class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('name')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- slug --}}
            <p class="ml-1">Category Url</p>
            <input type="text" required name="url" value="{{ old('url', $category->url) }}" class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('url')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            <button type="submit" class="w-full mt-1 px-2 py-1 bg-blue-secondary border border-[#485182] rounded-[10px] outline-none focus:outline-blue-secondary">Add Category</button>
        </div>
    </form>
</div>

@endsection