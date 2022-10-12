<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="Html css javascript tailwind css php laravel mysql">
    <meta name="author" content="Muhammad Rizki">

    <meta itemprop="name" content="{{ $title }}">
    <meta itemprop="description" content="{{ $description }}">
    <meta itemprop="image" content="{{ asset('img/' . $poster) }}">
 
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://mhdrizki.com/">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ asset('img/' . $poster) }}">
 
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ asset('img/' . $poster) }}">
    <link rel="icon" type="image" href="{{ asset('img/logo-icon.png') }}">
    @vite('resources/css/app.css')
</head>
<body class="">
    <div class="w-full bg-[#0a1226] hidden lg-1326:block">
        <div class="w-[1300px] mx-auto flex justify-between">
            {{-- sidebar --}}
            <div class="bg-slate-admin w-64 h-screen sticky top-0 flex flex-col justify-between">
                <div class="">
                    @if (Request::is('dashboard/content') || Request::is('dashboard/content*'))
                        <a href="/dashboard/content"><img src="{{ asset('img/LOGO.png') }}" alt="" class="w-[80%] mx-auto my-14"></a>
                    @elseif (Request::is('dashboard/image') || Request::is('dashboard/image*'))
                    <a href="/dashboard/image"><img src="{{ asset('img/LOGO.png') }}" alt="" class="w-[80%] mx-auto my-14"></a>
                    @else
                        <a href="/dashboard/category"><img src="{{ asset('img/LOGO.png') }}" alt="" class="w-[80%] mx-auto my-14"></a>
                    @endif
    
                    {{-- list --}}
                    <ul>
                        <li class="border-y border-blue-border-admin">
                            <a href="/dashboard/content" class="flex items-center w-full py-4 border-l-8 {{ (Request::is('dashboard/content*')) ? 'border-blue-secondary' : 'border-transparent' }} hover:border-blue-secondary">
                                <i class="fa-solid fa-file-lines mx-4 text-lg text-cyan-primary"></i>
                                <p class="text-cyan-primary">Content</p>
                            </a>
                        </li>
                        <li class="border-b border-blue-border-admin">
                            <a href="/dashboard/image" class="flex items-center w-full py-4 border-l-8 {{ (Request::is('dashboard/image*')) ? 'border-blue-secondary' : 'border-transparent' }} hover:border-blue-secondary">
                                <i class="fa-solid fa-image mx-[14px] text-lg text-cyan-primary"></i>
                                <p class="text-cyan-primary">Images</p>
                            </a>
                        </li>
                        <li class="border-b border-blue-border-admin">
                            <a href="/dashboard/category" class="flex items-center w-full py-4 border-l-8 {{ (Request::is('dashboard/category*')) ? 'border-blue-secondary' : 'border-transparent' }} hover:border-blue-secondary">
                                <i class="fas fa-list-ul mx-[14px] text-lg text-cyan-primary"></i>
                                <p class="text-cyan-primary">Category</p>
                            </a>
                        </li>
                    </ul>
                </div>
    
                <form action="/logout" method="post" class="w-full bg-blue-secondary">
                    @csrf
                    <button type="submit" class="w-full py-2">Logout</button>
                </form>
            </div>
    
            <div class="w-[81%] bg-body">
                @yield('container')
            </div>
        </div>
    </div>

    <div class="w-full h-screen flex flex-col justify-center items-center lg-1326:hidden">
        <p class="text-center">Tidak dapat membuka halaman di device ini, silahkan buka di device yang minimal lebar 1326px</p>
        <form action="/logout" method="post" class="w-full">
            @csrf
            <button type="submit" class="w-full py-2 text-blue-strong">Logout</button>
        </form>
    </div>

    {{-- success add content alert --}}
    @if (session()->has('success'))
        <div class="admin-alert w-full flex justify-center fixed z-20 top-0 duration-150">
            <p class="py-4 px-5 bg-blue-strong text-sm font-semibold">{{ session('success') }}</p>
        </div>
    @endif

    <script>
        const adminAlert = document.querySelector('.admin-alert');
        function alertShow() {
            adminAlert.style.transform = 'translateY(-110%)';
        }

        setTimeout(alertShow,  5000);
    </script>

    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>