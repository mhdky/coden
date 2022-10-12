@extends('layouts.main')

@section('container')
    <div class="login-page bg-no-repeat bg-cover w-full h-screen flex flex-col justify-center items-center">
        <a href="/"><img src="{{ asset('img/LOGO.png') }}" alt="" class="w-52 mb-2"></a>

        <form action="/admin" method="POST" autocomplete="off" class="w-[90%] bg-slate-primary border border-slate-secondary p-5 rounded-[10px] sm-412:w-[380px]">
            @csrf
            <p class="mb-2 ml-1">Username</p>
            <input type="text" name="username" autofocus required value="{{ old('username') }}" class="w-full bg-[#4D5D82] p-[7px] outline-none border border-cyan-primary rounded-[10px] focus:outline-[#212D6C]">
            @error('username')
                <p class="text-sm text-red-600 mt-1 ml-1">{{ $message }}</p>
            @enderror
            <p class="mt-4 mb-2 ml-1">Password</p>
            <input type="password" name="password" required class="w-full bg-[#4D5D82] p-[7px] outline-none border border-cyan-primary rounded-[10px] focus:outline-[#212D6C]">
            @error('password')
                <p class="text-sm text-red-600 mt-1 ml-1">{{ $message }}</p>
            @enderror
            <button type="submit" class="w-full bg-[#212D6C] p-[9px] outline-none mt-10 border border-[#485182] rounded-[10px]">Login</button>
        </form>
    </div>

    @if (session()->has('loginError'))
        <div class="login-error fixed top-0 w-full flex justify-center">
            <p class="p-3 bg-red-600">{{ session('loginError') }}</p>
        </div>
    @endif
@endsection