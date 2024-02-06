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
    <div class="w-[80%] mx-auto mt-[8rem]">
        <h1 class="font-bold text-4xl text-black text-center mb-4">Daftar Sekolah.</h1>
        <div class="flex items-center gap-5 flex-wrap">
            @foreach ($data_sekolah as $sekolah)
                <div class="w-[20rem] shadow-md">
                    <img src="/img/{{ $sekolah->image }}" alt="smk" class="w-full">
                    <div class="text-lg mt-4 p-6 flex flex-col gap-2">
                        <h1 class="text-xs"><span class="font-bold">Nama Sekolah</span> : {{ $sekolah->nama }} </h1>
                        <p class="text-xs"><span class="font-bold">Status</span> : {{ $sekolah->status == 'N'? 'Negeri' : 'Swasta'}}</p>
                        <p class="text-xs"><span class="font-bold">Kecamatan</span> : {{ $sekolah->kecamatan->nama }} </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>