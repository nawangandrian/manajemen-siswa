<x-layout>
    <h1 class="text-xl font-bold mb-5">
        {{ isset($siswa) ? 'Form Edit Siswa' : 'Form Tambah Siswa' }}
    </h1>

    <form 
        action="{{ isset($siswa) ? route('siswa.update', $siswa->id) : route('siswa.store') }}" 
        method="POST" 
        class="space-y-4 w-full"
    >
        @csrf
        @if(isset($siswa))
            @method('PUT')
        @endif

        <div>
            <label class="block text-sm font-medium mb-1">Nama Siswa</label>
            <input type="text" name="nama" 
                   class="w-full border rounded px-3 py-2"
                   value="{{ old('nama', $siswa->nama ?? '') }}"
                   placeholder="Masukkan nama siswa">
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" 
                   class="w-full border rounded px-3 py-2"
                   value="{{ old('tanggal_lahir', $siswa->tanggal_lahir ?? '') }}">
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Jurusan</label>
            <input type="text" name="jurusan" 
                   class="w-full border rounded px-3 py-2"
                   value="{{ old('jurusan', $siswa->jurusan ?? '') }}"
                   placeholder="Contoh: Sistem Informasi">
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Nilai</label>
            <input type="number" name="nilai" 
                   class="w-full border rounded px-3 py-2"
                   value="{{ old('nilai', $siswa->nilai ?? '') }}"
                   placeholder="Masukkan nilai">
        </div>

        <div class="flex gap-3 mt-5">
            <button type="submit" 
                    class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                {{ isset($siswa) ? 'Update' : 'Simpan' }}
            </button>
            <a href="{{ route('siswa.index') }}" 
               class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">
                Kembali
            </a>
        </div>
    </form>

    <x-slot:footer>
        <strong>{{ isset($siswa) ? 'Form Edit Siswa' : 'Form Tambah Siswa' }}</strong>
    </x-slot:footer>
</x-layout>
