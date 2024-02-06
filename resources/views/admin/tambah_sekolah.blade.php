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
    {{-- Sidebar --}}
    @include('components.sidebar')
    <form action="{{ route('sekolah.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-center items-center w-screen h-screen flex-col">
        <h1 class="font-bold text-[2rem] mb-[2rem]">Tambah Sekolah</h1>
        @csrf
        <div class="flex flex-col w-[40%] mb-[2rem]">
            <label for="nama_sekolah" class="font-bold">Nama Sekolah :</label>
            <input id="nama_sekolah" type="text" class="border border-black rounded-md py-1 px-2" placeholder="masukkan nama..." name="nama_sekolah">
        </div>
        <div class="flex flex-col w-[40%] mb-[2rem]">
            <label for="kecamatan" class="font-bold">Kecamatan :</label>
            <select name="kecamatan" id="kecamatan" class="border border-black">
                @foreach ($data_kecamatan as $kecamatan)
                <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama }}</option>
                @endforeach
            </select>
            <div class="mt-[2rem]">
                <h1 class="font-bold">Status Sekolah :</h1>
                <input id ="negeri" type="radio" value="N" name="status">
                <label for="negeri">Negeri</label>
                <input id ="swasta" type="radio" value="S" name="status">
                <label for="swasta">Swasta</label>
            </div>
        </div>
        <div class="flex flex-col w-[40%] mb-[2rem]">
            <label for="image" class="font-bold">Foto Sekolah :</label>
            <input id="image" type="file" class="border border-black rounded-md py-1 px-2" name="image">
        </div>
        <div class="flex flex-col w-[40%] gap-2">
            <button type="submit" class="bg-blue-700 text-white rounded-md py-2 font-semibold w-[8rem] text-xs">Masukkan Data !</button>
        </div>
    </form>
</body>
</html>