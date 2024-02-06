<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $title }}</title>
</head>
<body>
    {{-- Navbar --}}
    @include('components.navbar')

    <form action="{{ route('login.handle') }}" method="POST" class="flex justify-center items-center w-screen h-screen flex-col gap-2">
        @csrf
        <div class="flex flex-col w-[70%]">
            <label for="username">Username :</label>
            <input id="username" type="text" class="border border-black rounded-md py-1 px-2" placeholder="masukkan nama..." name="username">
        </div>
        <div class="flex flex-col w-[70%]">
            <label for="password">Password :</label>
            <input type="password" id="password" class="border border-black rounded-md py-1 px-2" placeholder="masukkan password..." name="password">
        </div>
        <div class="flex flex-col w-[70%] gap-2">
            <a href="{{ route('register.form') }}" class="text-xs">Tidak Punya Aku?<span class="text-blue-500">Daftar</span></a>
            <button type="submit" class="bg-blue-700 text-white rounded-md py-2 font-semibold w-[5rem] text-xs">Login !</button>
        </div>
    </form>
</body>
</html>