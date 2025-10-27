<x-layout>
    <div class="max-w-3xl mx-auto py-10 space-y-6">

        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">
            Hubungi Kami
        </h1>

        <p class="text-center text-gray-600 mb-8">
            Jika kamu memiliki pertanyaan, saran, atau ingin bekerja sama, silakan hubungi kami melalui informasi di bawah ini.
        </p>

        <!-- Informasi Kontak -->
        <div class="bg-gray-50 border rounded-lg p-6 shadow-sm space-y-4">
            <div class="flex items-center space-x-3">
                <span class="text-blue-600 text-xl">📍</span>
                <p><strong>Alamat:</strong> Jl. Rahtawu Raya, Kudus, Indonesia</p>
            </div>
            <div class="flex items-center space-x-3">
                <span class="text-blue-600 text-xl">📞</span>
                <p><strong>Telepon:</strong> +62 858 6531 7821</p>
            </div>
            <div class="flex items-center space-x-3">
                <span class="text-blue-600 text-xl">✉️</span>
                <p><strong>Email:</strong> nawangandrian@gmail.com</p>
            </div>
            <div class="flex items-center space-x-3">
                <span class="text-blue-600 text-xl">🌐</span>
                <p><strong>Website:</strong> http://nawangandrian.github.io/MyPortfolio_25</p>
            </div>
        </div>

        <!-- Formulir Kontak -->
        <div class="bg-white border rounded-lg p-6 shadow mt-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Kirim Pesan</h2>
            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium mb-1">Nama</label>
                    <input type="text" name="nama" class="w-full border rounded px-3 py-2" placeholder="Masukkan nama anda">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" name="email" class="w-full border rounded px-3 py-2" placeholder="Masukkan email anda">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Pesan</label>
                    <textarea name="pesan" rows="4" class="w-full border rounded px-3 py-2" placeholder="Tulis pesan anda di sini..."></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Kirim Pesan
                </button>
            </form>
        </div>

        <div class="text-center mt-8">
            <a href="{{ route('home') }}" 
               class="inline-block bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">
                ⬅ Kembali ke Beranda
            </a>
        </div>
    </div>

    <x-slot:footer>
        <strong>Contact Page - Aplikasi Manajemen Siswa</strong>
    </x-slot:footer>
</x-layout>
