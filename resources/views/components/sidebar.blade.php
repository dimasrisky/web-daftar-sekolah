<div class="h-full fixed left-0 w-[20%] bg-blue-700 px-5 py-8 flex flex-col gap-6">
    <a href="{{ route('logout') }}" class="flex items-center gap-3 text-white font-semibold text-[1rem]">
        <img src="/icons/logout.svg" alt="daftar-sekolah" class="w-[1rem]">
        <h1>Logout</h1>
    </a>
    <a href="{{ route('sekolah.index') }}" class="flex items-center gap-3 text-white font-semibold text-[1rem]">
        <img src="/icons/list.svg" alt="daftar-sekolah" class="w-[1rem]">
        <h1>Daftar Sekolah</h1>
    </a>
    <a href="{{ route('sekolah.create') }}" class="flex items-center gap-3 text-white font-semibold text-[1rem]">
        <img src="/icons/add.svg" alt="daftar-sekolah" class="w-[1rem]">
        <h1>Tambah Sekolah</h1>
    </a>
</div>