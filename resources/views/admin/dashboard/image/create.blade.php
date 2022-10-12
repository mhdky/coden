@extends('partials.nav-admin')

@section('container')
<div class="w-full p-10">
    {{-- name section --}}
    <h1 class="w-max text-3xl font-semibold border-b-4 border-blue-secondary">Add Image</h1>

    <form action="/dashboard/image" method="post" enctype="multipart/form-data" class="mt-10">
        @csrf
        <div class="w-full mt-5">
            {{-- poster --}}
            <img alt="" class="img-preview w-52">
            <p class="ml-1">Image</p>
            <input type="file" name="img" onchange="previewImage()" class="poster-content w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('img')
                <p class="text-red-600 ml-1">{{ $message }}</p>        
            @enderror
        </div>
        
        <div class="w-full mt-5">
            <button type="submit" class="w-full mt-1 px-2 py-1 bg-blue-secondary border border-[#485182] rounded-[10px] outline-none focus:outline-blue-secondary">Add Image</button>
        </div>
    </form>
</div>

<script>
    function previewImage () {
        const image = document.querySelector('.poster-content');
        const imgPreview = document.querySelector('.img-preview');

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection