<x-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-xl font-bold">Daftar Siswa</h1>
        <a href="{{ route('siswa.create') }}" 
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Tambah Siswa
        </a>
    </div>
    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200">
            <thead class="ltr:text-left rtl:text-right">
            <tr class="*:font-medium *:text-gray-900">
                <th class="px-3 py-2 whitespace-nowrap">Nama</th>
                <th class="px-3 py-2 whitespace-nowrap">Tanggal Lahir</th>
                <th class="px-3 py-2 whitespace-nowrap">Jurusan</th>
                <th class="px-3 py-2 whitespace-nowrap">Nilai</th>
                <th class="px-3 py-2 whitespace-nowrap text-center">Aksi</th>
            </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($siswa as $item)
                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-2 whitespace-nowrap">{{ $item['nama'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $item['tanggal_lahir'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $item['jurusan'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $item['nilai'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap text-center">
                            <div class="flex items-center justify-center gap-2">
                                {{-- Tombol Edit --}}
                                <a href="{{ route('siswa.edit', $item['id']) }}" 
                                   class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                    Edit
                                </a>

                                {{-- Tombol Hapus --}}
                                <form action="{{ route('siswa.destroy', $item['id']) }}" method="POST" 
                                      onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <x-slot:footer>
        <strong>Daftar Siswa page</strong>
    </x-slot:footer>
</x-layout>
