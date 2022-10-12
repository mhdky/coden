@extends('partials.nav-admin')

@section('container')
<div class="w-full p-10">
    {{-- name section --}}
    <h1 class="w-max text-3xl font-semibold border-b-4 border-blue-secondary">Edit Content</h1>

    <form action="/dashboard/content/{{ $content->id }}" method="post" enctype="multipart/form-data" class="mt-10">
        @method('put')
        @csrf
        <div class="w-full">
            {{-- title --}}
            <p class="ml-1">Title</p>
            <input type="text" name="title" value="{{ old('title', $content->title) }}" required class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('title')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- slug --}}
            <p class="ml-1">Slug</p>
            <input type="text" name="slug" value="{{ old('slug', $content->slug) }}" required class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('slug')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- description --}}
            <p class="ml-1">Description</p>
            <input type="text" name="description" required value="{{ old('description', $content->description) }}" class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('description')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- date --}}
            <p class="ml-1">Date</p>
            <input type="text" name="date" value="{{ old('date', $content->date) }}" required class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('date')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- author --}}
            <p class="ml-1">Author</p>
            <input type="text" name="author" value="{{ old('author', $content->author) }}" required class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('author')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- body --}}
            <p class="ml-1">Body</p>
            <textarea name="body" required class="w-full h-96 mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">{{ old('body', $content->body) }}</textarea>
            @error('body')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- twitter --}}
            <p class="ml-1">Twitter</p>
            <input type="url" name="twitter" value="{{ old('twitter', $content->twitter) }}" class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('twitter')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- facebook --}}
            <p class="ml-1">Facebook</p>
            <input type="url" required name="facebook" value="{{ old('facebook', $content->facebook) }}" class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('facebook')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- linkedin --}}
            <p class="ml-1">Linkedin</p>
            <input type="url" required name="linkedin" value="{{ old('linkedin', $content->linkedin) }}" class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('linkedin')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- pinterest --}}
            <p class="ml-1">Pinterest</p>
            <input type="url" required name="pinterest" value="{{ old('pinterest', $content->pinterest) }}" class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('pinterest')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- telegram --}}
            <p class="ml-1">Telegram</p>
            <input type="url" required name="telegram" value="{{ old('telegram', $content->telegram) }}" class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('telegram')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- whatsapp --}}
            <p class="ml-1">Whatsapp</p>
            <input type="url" required name="whatsapp" value="{{ old('whatsapp', $content->whatsapp) }}" class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('whatsapp')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- youtuebe status --}}
            <p class="ml-1">Youtube Status</p>
            <select name="youtube_on_off" class="select-youtube w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
                @if (old('youtube_on_off', $content->youtube_on_off) === 'On')
                    <option value="On" selected>On</option>
                    <option value="Off">Off</option>

                @elseif (old('youtube_on_off', $content->youtube_on_off) === 'Off')
                    <option value="On">On</option>
                    <option value="Off" selected>Off</option>
                    
                @else
                    <option value="On">On</option>
                    <option value="Off">Off</option>
                @endif
            </select>
            @error('youtube_on_off')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="input-youtube w-full mt-5 {{ (old('youtube_on_off', $content->youtube_on_off) === 'On') ? 'block' : 'hidden' }}">
            {{-- youtube --}}
            <p class="ml-1">Youtube Link Address</p>
            <input type="url" name="youtube" id="input-youtube" value="{{ old('youtube', $content->youtube) }}" class="w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('youtube')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>

        <div class="w-full mt-5">
            {{-- poster --}}
            @if ($content->poster)
                <img src="{{ asset('storage/' . $content->poster) }}" alt="" class="img-preview w-52">
            @else
                <img  alt="" class="img-preview w-5">
            @endif
            <p class="ml-1">Poster</p>
            <input type="hidden" name="oldPoster" value="{{ $content->poster }}">
            <input type="file" name="poster" value="{{ old('poster', $content->poster) }}" onchange="previewImage()" class="poster-content w-full mt-1 px-2 py-1 bg-slate-admin border border-slate-secondary rounded-[10px] outline-none focus:outline-blue-secondary">
            @error('poster')
                <p class="text-red-600 ml-1">{{ $message }}</p>                
            @enderror
        </div>
        
        <div class="w-full mt-5">
            <button type="submit" class="w-full mt-1 px-2 py-1 bg-blue-secondary border border-[#485182] rounded-[10px] outline-none focus:outline-blue-secondary">Add Content</button>
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

    const selectYoutube = document.querySelector('.select-youtube');
    const inputYoutube = document.querySelector('.input-youtube');
    const inputYoutubeForm = document.querySelector('#input-youtube');
    selectYoutube.addEventListener("change", function() {
    if (this.value === "On") {
            inputYoutube.style.display = "block";
            inputYoutubeForm.required = true;
        }
        else {
            inputYoutube.style.display = "none";
            inputYoutubeForm.required = false;
            inputYoutubeForm.value = "";
        }
    });
</script>

@endsection