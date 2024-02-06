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
    <div class="w-scren h-screen flex justify-center ml-[4rem] flex-col items-center shadow-md sm:rounded-lg">
        <h1 class="font-bold text-[2rem] mb-[2rem]">Daftar Sekolah</h1>
        <table class="w-[60%] text-sm text-left rtl:text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                <tr>
                    <th scope="col" class="px-6 py-3">id</th>
                    <th scope="col" class="px-6 py-3">Nama Sekolah</th>
                    <th scope="col" class="px-6 py-3">Kecamatan</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_sekolah as $sekolah)
                    <tr class="bg-white border-b ">
                        <td scope="row" class="px-6 py-4 font-medium whitespace-test">{{$sekolah->id}}</td>
                        <td class="px-6 py-4">{{ $sekolah->nama }}</td>
                        <td class="px-6 py-4">{{ $sekolah->kecamatan->nama }}</td>
                        <td class="px-6 py-4">{{ $sekolah->status }}</td>
                        <td class="px-6 py-4 flex gap-3 items-center">
                            <form action="{{ route('sekolah.destroy', ['id' => $sekolah->id] )}}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="font-medium text-blue-600  hover:underline mr-3">Hapus</button>
                            </form>
                            <a href="{{ route('sekolah.edit', ['id' => $sekolah->id]) }}" class="font-medium text-blue-600  hover:underline">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>