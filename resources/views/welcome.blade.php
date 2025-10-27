<x-layout>
    <div class="flex flex-col items-center justify-center min-h-[70vh] text-center space-y-8">

        <!-- Judul Aplikasi -->
        <div>
            <h1 class="text-4xl font-extrabold text-gray-800 mb-3">
                📘 Aplikasi Manajemen Siswa
            </h1>
            <p class="text-gray-600 text-lg max-w-xl mx-auto">
                Aplikasi sederhana untuk mengelola data siswa secara efisien — mulai dari menambah, mengedit, hingga menghapus data dengan mudah.
            </p>
        </div>

        <!-- Tombol Navigasi -->
        <div class="flex gap-4 mt-6">
            <a href="{{ route('siswa.index') }}" 
               class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition">
                👩‍🎓 Lihat Daftar Siswa
            </a>

            <a href="{{ route('siswa.create') }}" 
               class="bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition">
                ➕ Tambah Siswa Baru
            </a>
        </div>

        <!-- Fitur Aplikasi -->
        <div class="grid sm:grid-cols-3 gap-6 mt-12 w-full max-w-4xl">
            <div class="p-5 border rounded-lg shadow-sm hover:shadow-md transition">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Tambah Data</h3>
                <p class="text-gray-600 text-sm">Masukkan data siswa baru dengan mudah melalui form yang sederhana dan intuitif.</p>
            </div>
            <div class="p-5 border rounded-lg shadow-sm hover:shadow-md transition">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Edit & Update</h3>
                <p class="text-gray-600 text-sm">Perbarui informasi siswa kapan pun dibutuhkan tanpa repot.</p>
            </div>
            <div class="p-5 border rounded-lg shadow-sm hover:shadow-md transition">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Hapus Data</h3>
                <p class="text-gray-600 text-sm">Kelola data dengan aman dan hapus entri yang tidak diperlukan.</p>
            </div>
        </div>
    </div>

    <x-slot:footer>
        <strong>Home - Aplikasi Manajemen Siswa</strong>
    </x-slot:footer>
</x-layout>
