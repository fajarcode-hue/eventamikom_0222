@extends('layouts.main')

@section('title', 'Bantuan & FAQ')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="text-center mb-10 mt-4">
        <h1 class="text-3xl font-bold text-slate-800 mb-3">Pusat Bantuan</h1>
        <p class="text-slate-500">Pertanyaan yang sering diajukan (FAQ) seputar penggunaan platform.</p>
    </div>

    <div class="space-y-4">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:border-indigo-300 transition duration-300">
            <h3 class="text-lg font-bold text-slate-800 flex items-center gap-3 mb-2">
                <i class="fas fa-info-circle text-indigo-500"></i>
                Bagaimana cara mendaftar ke sebuah event?
            </h3>
            <p class="text-slate-500 pl-8">
                Pilih menu <strong class="text-slate-700">Katalog Event</strong> di sidebar, cari event yang Anda minati, lalu klik tombol detail. Jika kuota pendaftaran masih tersedia, akan muncul tombol "Daftar Sekarang".
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:border-indigo-300 transition duration-300">
            <h3 class="text-lg font-bold text-slate-800 flex items-center gap-3 mb-2">
                <i class="fas fa-ticket-alt text-indigo-500"></i>
                Apakah semua event di platform ini gratis?
            </h3>
            <p class="text-slate-500 pl-8">
                Tidak semua. Kami memfasilitasi baik event yang bersifat gratis maupun berbayar. Rincian biaya administrasi selalu ditampilkan secara transparan di halaman detail setiap event.
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:border-indigo-300 transition duration-300">
            <h3 class="text-lg font-bold text-slate-800 flex items-center gap-3 mb-2">
                <i class="fas fa-certificate text-indigo-500"></i>
                Kapan dan bagaimana saya menerima e-sertifikat?
            </h3>
            <p class="text-slate-500 pl-8">
                Sertifikat digital akan dikirimkan otomatis ke email Anda atau dapat diunduh melalui halaman profil Anda selambat-lambatnya 7x24 jam setelah penyelenggara menyelesaikan verifikasi absensi event.
            </p>
        </div>
    </div>
    
    <div class="mt-10 bg-indigo-50 p-8 rounded-xl border border-indigo-100 flex flex-col items-center text-center">
        <h4 class="text-indigo-800 font-bold text-xl mb-2">Masih Membutuhkan Bantuan?</h4>
        <p class="text-indigo-600/80 mb-6">Tim admin kami siap membantu pertanyaan teknis Anda.</p>
        <a href="/" class="bg-indigo-600 text-white font-semibold py-2.5 px-8 rounded-lg hover:bg-indigo-700 hover:shadow-lg transition duration-300">
            Hubungi Admin EventHub
        </a>
    </div>
</div>
@endsection