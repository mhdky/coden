@extends('layouts.main')

@section('container')
    @include('partials.nav-home')

    {{-- isi jumbotron --}}
    <div class="jumboron bg-no-repeat bg-cover w-full py-20 bg-black-transparent flex flex-col justify-center items-center md-768:py-[150px]">
        {{-- Temukan source code --}}
        <h1 class="text-first font-semibold text-center text-3xl mx-2 sm-700:text-4xl lg-1000:text-[40px] lg-1000:py-1">Temukan Artikel, Tutorial dan Source Code</h1>
        <p class=" text-center mt-4 mx-2 sm-700:text-lg sm-700:w-[500px] lg-1000:mt-6">Code-N adalah blog yang membahas seputar web design dan web programming</p>
        {{-- form search --}}
        <form action="/" method="get" autocomplete="off" class="w-full flex justify-center">
            <div class="bg-body w-[90%] mt-4 py-3 px-6 rounded-[5px] flex justify-between items-center sm-600:w-[500px] sm-700:w-[600px] lg-1000:w-[750px] lg-1000:mt-6">
                <input type="text" name="search" id="input-search" placeholder="Masukan kata kunci" value="{{ request('search') }}" onkeyup="ada()" class="input-search w-[100%] outline-none bg-transparent  placeholder:text-gray-primary">
                <button type="submit" id="button-search" disabled class="ml-6"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>

    <main class="flex flex-col items-center">
        {{-- jika ada pencarian --}}
        @if (request('search') && $contents->count() > 0)
            <p class=" mt-6 mx-3 text-center">Menampilkan hasil pencarian <span class="text-blue-strong">{{ Str::limit(request('search'), 50) }}</span></p>
        @endif

        @if ($contents->count() < 1)
            <p class="mt-6 mx-3 text-center">Artikel yang kamu cari tidak ditemukan</p>
        @endif

        <div class="w-full mt-10 lg-1200:w-[1200px] flex flex-wrap justify-center sm-540:justify-evenly">
            @foreach ($contents as $content)
                <div class="w-[90%] mb-10 sm-540:w-[45%] md-810:w-[30%] lg-1080:w-[21%]">
                    {{-- poster --}}
                    <a href="/content/{{ $content->slug }}"><img src="{{ asset('storage/' . $content->poster) }}" alt="" class="w-full mb-3"></a>
                    {{-- date --}}
                    <p class="text-cyan-primary text-[12px] mb-2"><i class="far fa-calendar mr-1 text-cyan-primary"></i></i> {{ $content->date }}</p>
                    {{-- title --}}
                    <a href="/content/{{ $content->slug }}" class="sm-360:hidden"><p class=" capitalize">{{ Str::limit($content->title, 30) }}</p></a>
                    <a href="/content/{{ $content->slug }}" class="hidden sm-360:block sm-412:hidden"><p class=" capitalize">{{ Str::limit($content->title, 35) }}</p></a>
                    <a href="/content/{{ $content->slug }}" class="hidden sm-412:block sm-540:hidden"><p class=" capitalize">{{ Str::limit($content->title, 40) }}</p></a>
                    <a href="/content/{{ $content->slug }}" class="hidden sm-540:block sm-650:hidden"><p class=" capitalize">{{ Str::limit($content->title, 23) }}</p></a>
                    <a href="/content/{{ $content->slug }}" class="hidden sm-650:block md-810:hidden"><p class=" capitalize">{{ Str::limit($content->title, 29) }}</p></a>
                    <a href="/content/{{ $content->slug }}" class="hidden md-810:block lg-1000:hidden"><p class=" capitalize">{{ Str::limit($content->title, 23) }}</p></a>
                    <a href="/content/{{ $content->slug }}" class="hidden lg-1000:block lg-1080:hidden"><p class=" capitalize">{{ Str::limit($content->title, 29) }}</p></a>
                    <a href="/content/{{ $content->slug }}" class="hidden lg-1080:block lg-1200:hidden"><p class=" capitalize">{{ Str::limit($content->title, 22) }}</p></a>
                    <a href="/content/{{ $content->slug }}" class="hidden lg-1200:block"><p class=" capitalize">{{ Str::limit($content->title, 25) }}</p></a>
                </div>                
            @endforeach

            {{-- manipulation --}}
            <div class="w-[90%] sm-540:w-[45%] md-810:w-[30%] lg-1080:w-[21%]"></div>
            <div class="w-[90%] sm-540:w-[45%] md-810:w-[30%] lg-1080:w-[21%]"></div>
            <div class="w-[90%] sm-540:w-[45%] md-810:w-[30%] lg-1080:w-[21%]"></div>
            <div class="w-full paginationssss flex justify-center mb-10">
                {{ $contents->links() }}
            </div>
        </div>

        {{-- road learn --}}
        <div class="flex flex-col items-center mt-5">
            <p class="text-first text-2xl text-center font-bold mx-2 mb-10 sm-600:text-4xl">Tutorial yang ada di CODE-N</p>
            <img src="{{ asset('img/road_learn.png') }}" alt="">
        </div>
    </main>

    @include('partials.footer')

    {{-- <div class="h-[1000px]"></div> --}}
@endsection