<nav class="w-full fixed top-0">
    <div class="w-[80%] mx-auto flex justify-between item-center my-6">
        <div class="flex items-center gap-3">
            <img src="/icons/logo.svg" alt="logo" class="w-[2rem]">
            <h1 class="text-md font-bold">Sekolahku.id</h1>
        </div>
        <div class="flex items-center gap-[2rem]">
            @auth
                <a href="{{ route('logout') }}" class="px-9 py-2 text-xs font-semibold bg-blue-600 text-white rounded-[0.2rem]">Keluar</a>    
            @endauth
            @guest
                <a href="{{ route('login.form') }}" class="px-9 py-2 text-xs font-semibold bg-blue-600 text-white rounded-[0.2rem]">Masuk</a>
                <a href="{{ route('register.form') }}" class="px-9 py-2 text-xs font-semibold bg-blue-600 text-white rounded-[0.2rem]">Daftar</a>
            @endguest
        </div>
    </div>
</nav>