<x-layout>
    <div class="max-w-3xl mx-auto text-center space-y-6 py-10">

        <h1 class="text-3xl font-bold text-gray-800">Tentang Aplikasi</h1>
        <p class="text-gray-600 leading-relaxed">
            <strong>Manajemen Siswa</strong> adalah aplikasi CRUD sederhana yang dibuat untuk membantu pengelolaan data siswa di sekolah atau lembaga pendidikan.
            Aplikasi ini dibuat dengan framework <strong>Laravel</strong> dan menggunakan <strong>TailwindCSS</strong> untuk tampilan yang bersih, modern, dan responsif.
        </p>

        <div class="border rounded-lg p-6 bg-gray-50 mt-6">
            <h2 class="text-xl font-semibold mb-3 text-gray-700">Fitur Utama</h2>
            <ul class="text-gray-600 list-disc list-inside text-left inline-block">
                <li>Menambahkan data siswa baru</li>
                <li>Mengedit data siswa yang sudah ada</li>
                <li>Menghapus data siswa</li>
                <li>Menampilkan daftar siswa secara dinamis</li>
            </ul>
        </div>

        <div class="mt-10">
            <h2 class="text-xl font-semibold mb-3 text-gray-700">Tentang Pengembang</h2>
            <p class="text-gray-600">
                Aplikasi ini dikembangkan sebagai latihan untuk memahami konsep dasar CRUD (Create, Read, Update, Delete)
                serta implementasi MVC pada Laravel.  
                <br><br>
                Dibuat oleh: <strong>{{ $data ?? 'Nama Kamu' }}</strong><br>
                HP: <strong>{{ $hp }} tahun</strong><br>
                Email: <strong>{{ $email }}</strong>
            </p>
        </div>

        <a href="{{ route('home') }}" 
           class="mt-8 inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
            ⬅ Kembali ke Beranda
        </a>
    </div>

    <x-slot:footer>
        <strong>About Page - Aplikasi Manajemen Siswa</strong>
    </x-slot:footer>
</x-layout>
