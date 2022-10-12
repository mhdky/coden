@extends('layouts.main')

@section('container')
    @include('partials.nav-home')
    <div class="jumbotron-content py-10 bg-no-repeat bg-cover lg-1200:flex lg-1200:justify-center md-768:py-20">
        <div class="mx-3 flex flex-col justify-center md-768:flex-row md-768:justify-start md-768:mx-5 lg-1000:mx-10 lg-1200:w-[1100px] lg-1200:justify-center">
            {{-- poster --}}
            <img src="{{ asset('storage/' . $content->poster) }}" alt="" class="h-max md-768:order-2 md-768:w-[40%]">

            <div class="mt-4 mr-4 md-768:order-1 md-768:mt-0 md-768:w-[60%]">
                {{-- title --}}
                <h1 class="text-[24px] capitalize font-semibold leading-10 md-768:leading-[50px] md-768:text-4xl"> {{ $content->title }}</h1>

                <div class="mt-5">
                    {{-- date --}}
                    <div class="flex items-center mt-3 text-sm">
                        <i class="far fa-calendar mr-[18px] text-cyan-primary"></i>
                        <p class="text-cyan-primary">Diposting pada {{ $content->date }}</p>
                    </div>
                    {{-- author --}}
                    <div class="flex items-center mt-3 text-sm">
                        <i class="fas fa-pen mr-4 text-cyan-primary"></i>
                        <p class="text-cyan-primary">Ditulis oleh {{ $content->author }}</p>
                    </div>
                    {{-- play video --}}
                    <div class="flex items-center mt-3 text-sm">
                        <i class="far fa-play-circle mr-4 text-cyan-primary"></i>
                        @if ($content->youtube_on_off === 'On')
                            <p class="text-cyan-primary"><a href="{{ $content->youtube }}">Play video</a></p>
                        @else
                            <p class="no-video text-cyan-primary md-768:cursor-pointer">Play video</p>                            
                        @endif
                    </div>
                </div>

                <div class="py-2 mt-4 text-sm flex items-center">
                    <a href="/">Home</a>
                    <i class="fas fa-angle-right mx-3"></i>
                    <p class="text-cyan-primary capitalize sm-360:hidden">{{ Str::limit($content->title, 25) }}</p>
                    <p class="text-cyan-primary capitalize hidden sm-360:block sm-412:hidden">{{ Str::limit($content->title, 30) }}</p>
                    <p class="text-cyan-primary capitalize hidden sm-412:block sm-450:hidden">{{ Str::limit($content->title, 37) }}</p>
                    <p class="text-cyan-primary capitalize hidden sm-450:block sm-480:hidden">{{ Str::limit($content->title, 43) }}</p>
                    <p class="text-cyan-primary capitalize hidden sm-480:block sm-510:hidden">{{ Str::limit($content->title, 50) }}</p>
                    <p class="text-cyan-primary capitalize hidden sm-510:block sm-540:hidden">{{ Str::limit($content->title, 55) }}</p>
                    <p class="text-cyan-primary capitalize hidden sm-540:block sm-570:hidden">{{ Str::limit($content->title, 60) }}</p>
                    <p class="text-cyan-primary capitalize hidden sm-570:block sm-630:hidden">{{ Str::limit($content->title, 65) }}</p>
                    <p class="text-cyan-primary capitalize hidden sm-630:block sm-660:hidden">{{ Str::limit($content->title, 70) }}</p>
                    <p class="text-cyan-primary capitalize hidden sm-660:block sm-700:hidden">{{ Str::limit($content->title, 75) }}</p>
                    <p class="text-cyan-primary capitalize hidden sm-700:block sm-750:hidden">{{ Str::limit($content->title, 80) }}</p>
                    <p class="text-cyan-primary capitalize hidden sm-750:block md-768:hidden">{{ Str::limit($content->title, 86) }}</p>
                    <p class="text-cyan-primary capitalize hidden md-768:block md-810:hidden">{{ Str::limit($content->title, 40) }}</p>
                    <p class="text-cyan-primary capitalize hidden md-810:block md-900:hidden">{{ Str::limit($content->title, 45) }}</p>
                    <p class="text-cyan-primary capitalize hidden md-900:block lg-1080:hidden">{{ Str::limit($content->title, 55) }}</p>
                    <p class="text-cyan-primary capitalize hidden lg-1080:block lg-1190:hidden">{{ Str::limit($content->title, 65) }}</p>
                    <p class="text-cyan-primary capitalize hidden lg-1190:block">{{ Str::limit($content->title, 75) }}</p>
                </div>
            </div>
        </div>
    </div>

    <main class="flex flex-col items-center">
        <div class="w-full px-5 flex justify-between md-810:w-[800px]">
            {{-- share --}}
            <div class="hidden h-max mt-1 mr-10 md-768:flex md-768:flex-col md-768:items-center md-768:sticky md-768:top-3">
                <p class="text-blue-strong font-semibold">SHARE</p>
                {{-- fb --}}
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $content->facebook }}" class="my-2"><i class="fab fa-facebook-f text-blue-strong"></i></a>
                {{-- wa --}}
                <a href="whatsapp://send?text={{ $content->whatsapp }}" class="my-2"><i class="fab fa-whatsapp text-green-500"></i></a>
                {{-- tele --}}
                <a href="https://t.me/share/url?url={{ $content->telegram }}" class="my-2"><i class="fab fa-telegram-plane text-blue-500"></i></a>
                {{-- tw --}}
                <a href="https://twitter.com/intent/tweet?url={{ $content->twitter }}" class="my-2"><i class="fab fa-twitter text-sky-500"></i></i></a>
                {{-- lk --}}
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $content->linkedin }}" class="my-2"><i class="fab fa-linkedin text-blue-600"></i></i></a>
                {{-- pin --}}
                <a href="https://pinterest.com/pin/create/button/?media=&url={{ $content->pinterest }}" class="my-2"><i class="fab fa-pinterest-square text-red-600"></i></i></i></a>
            </div>
            <div class="">
                <article class="w-full leading-8 text-justify">
                    {!! $content->body !!}
                </article>

                {{-- share  --}}
                <div class="mt-10 p-3 rounded-[5px] border border-slate-500 md-768:hidden">
                    <p class="text-blue-strong text-center mb-2 font-semibold">SHARE</p>
                    <div class="flex justify-between">
                        {{-- fb --}}
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $content->facebook }}" class="flex justify-center items-center bg-slate-800 w-[14%] h-9 rounded-[5px]">
                            <i class="fab fa-facebook-f text-blue-strong"></i>
                        </a>
                        {{-- wa --}}
                        <a href="whatsapp://send?text={{ $content->whatsapp }}" class="flex justify-center items-center bg-slate-800 w-[14%] h-9 rounded-[5px]">
                            <i class="fab fa-whatsapp text-green-500"></i>
                        </a>
                        {{-- tele --}}
                        <a href="https://t.me/share/url?url={{ $content->telegram }}" class="flex justify-center items-center bg-slate-800 w-[14%] h-9 rounded-[5px]">
                            <i class="fab fa-telegram-plane text-blue-500"></i>
                        </a>
                        {{-- tw --}}
                        <a href="https://twitter.com/intent/tweet?url={{ $content->twitter }}" class="flex justify-center items-center bg-slate-800 w-[14%] h-9 rounded-[5px]">
                            <i class="fab fa-twitter text-sky-500"></i>
                        </a>
                        {{-- lin --}}
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $content->linkedin }}" class="flex justify-center items-center bg-slate-800 w-[14%] h-9 rounded-[5px]">
                            <i class="fab fa-linkedin text-blue-600"></i>
                        </a>
                        {{-- pin --}}
                        <a href="https://pinterest.com/pin/create/button/?media=&url={{ $content->pinterest }}" class="flex justify-center items-center bg-slate-800 w-[14%] h-9 rounded-[5px]">
                            <i class="fab fa-pinterest-square text-red-600"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- no video alert --}}
    <div class="video-alert w-full flex justify-center fixed z-20 top-0 -translate-y-full duration-150">
        <p class="py-4 px-5 bg-blue-strong text-sm font-semibold">Video tidak tersedia</p>
    </div>

    @include('partials.footer')
@endsection