@extends('layouts.main')

@section('container')
    @include('partials.nav-home')
    <div class="header-about fixed -z-10 top-0 w-full h-screen bg-no-repeat bg-cover overflow-y-auto">
        <div class="sm-600:flex sm-600:justify-center">
            <div class="flex mt-24 px-3 sm-600:w-[570px] md-900:w-[820px] md-900:mt-32">
                <div class="">
                    <div class="leading-7">
                        <h1 class="text-blue-strong text-2xl font-semibold mb-3">Apa itu CODE-N?</h1>
                        <p class="text-justify">Ngoding Web adalah sebuah blog atau sebuah website yang menyajikan konten-konten, artikel, tutorial, dan source code mengenai web programming dan web design.</p>
                    </div>
                    
                    <div class="leading-7 mt-8">
                        <h1 class="text-blue-strong text-2xl font-semibold mb-3">Apa tujuan dari CODE-N?</h1>
                        <p class="mb-2 text-justify">Tujuan dari CODE-N adalah tidak lain dan tidak bukan untuk membantu kamu yang sedang mencari informasi tutorial web design dan web programming agar dapat menemukan solusi dari masalah yang kamu punya.
                        </p>
                        <p class="text-justify">Saya sangat percaya dari ilmu yang saya punya dapat membantu kamu dalam menemukan solusi yang kamu hadapi.</p>
                    </div>
    
                    <div class="leading-7 mt-8">
                        <h1 class="text-blue-strong text-2xl font-semibold mb-3">Artikel apa saja yang ada di CODE-N?</h1>
                        <p class="mb-2 text-justify"> CODE-N membahas tentang web design dan web programming, baik itu dari teknologi Html, Css, Javascript, Tailwindcss, Php, Laravel dan lain sebagainya.
                        </p>
                    </div>

                    <div class="w-full bg-slate-admin flex flex-col items-center mx-auto mt-10 py-10 rounded-[10px] md-900:hidden">
                        <img src="{{ asset('img/muhammad_rizki.png') }}" alt="" class="w-20">

                        <h1 class="text-xl mt-3">Muhammad Rizki</h1>

                        <p class="text-cyan-primary mt-2">Front-End Dev</p>

                        <div class="flex items-center mt-2">
                            <a href="https://mhdrizki.com/" class="mx-2 inline-block"><i class="fa-solid fa-user text-slate-secondary"></i></a>
                            <a href="https://instagram.com/rizki_sr_my" class="mx-2 inline-block"><i class="fa-brands fa-instagram text-slate-secondary"></i></a>
                            <a href="" class="mx-2 inline-block"><i class="fa-brands fa-linkedin text-slate-secondary"></i></a>
                            <a href="https://github.com/mhdky" class="mx-2 inline-block"><i class="fa-brands fa-github text-slate-secondary"></i></a>
                        </div>
                    </div>
                </div>

                <div class="w-full h-max bg-slate-admin hidden sticky top-[100px] flex-col items-center ml-5 py-10 rounded-[10px] md-900:flex">
                    <img src="{{ asset('img/muhammad_rizki.png') }}" alt="" class="w-20">

                    <h1 class="text-xl mt-3">Muhammad Rizki</h1>

                    <p class="text-cyan-primary mt-2">Front-End Dev</p>

                    <div class="flex items-center mt-2">
                        <a href="https://mhdrizki.com/" class="mx-2 inline-block"><i class="fa-solid fa-user text-slate-secondary"></i></a>
                        <a href="https://instagram.com/rizki_sr_my" class="mx-2 inline-block"><i class="fa-brands fa-instagram text-slate-secondary"></i></a>
                        <a href="https://www.linkedin.com/in/muhammad-rizki-335851226/" class="mx-2 inline-block"><i class="fa-brands fa-linkedin text-slate-secondary"></i></a>
                        <a href="https://github.com/mhdky" class="mx-2 inline-block"><i class="fa-brands fa-github text-slate-secondary"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="flex flex-col items-center mt-10 mb-3">
            {{-- logo footer --}}
            <a href="/"><img src="{{ asset('img/LOGO.png') }}" alt="" class="w-48"></a>
            {{-- medsos footer --}}
            <div class="flex fustify-center items-center text-blue-secondary">
                <a href="https://mhdrizki.com" class="w-10 h-10 flex justify-center items-center rounded-full border-[3px] border-blue-secondary hover:bg-[#0000ff0c] cursor-default md-810:cursor-pointer">
                    <i class="fas fa-user text-blue-secondary"></i>
                </a>
        
                <a href="https://www.youtube.com/channel/UCLqWzuNZP9ISnNK-edu6ciQ" class="w-10 h-10 mx-3 flex justify-center items-center rounded-full border-[3px] border-blue-secondary hover:bg-[#0000ff0c] cursor-default md-810:cursor-pointer">
                    <i class="fab fa-youtube text-blue-secondary"></i>
                </a>
        
                <a href="https://github.com/mhdky" class="w-10 h-10 flex justify-center items-center rounded-full border-[3px] border-blue-secondary hover:bg-[#0000ff0c] cursor-default md-810:cursor-pointer">
                    <i class="fab fa-github text-xl text-blue-secondary"></i>
                </a>
            </div>
        
            <p class="text-blue-secondary text-sm font-semibold mt-4">© 2022 CODE-N | All Rights Reserved</p>
        </footer>
    </div>

@endsection