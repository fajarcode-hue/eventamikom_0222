@extends('layouts.main')

@section('title', 'Profil Praktikan')

@section('content')
<div class="max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold text-slate-800 mb-6">Profil Praktikan</h1>
    
    <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-200 flex flex-col md:flex-row items-center gap-8">
        <div class="w-32 h-32 bg-indigo-50 rounded-full flex items-center justify-center border-4 border-indigo-100 shrink-0">
            <i class="fas fa-user-graduate text-5xl text-indigo-500"></i>
        </div>
        
        <div class="flex-1 text-center md:text-left">
            <h2 class="text-2xl font-bold text-slate-800 mb-1">Fajar Sindu Nugroho</h2>
            <p class="text-indigo-600 font-semibold mb-4">NIM: 24.62.0222</p>
            <p class="text-slate-500 leading-relaxed mb-6">
                Halo! Saya adalah praktikan mata kuliah Pemrograman Web. Halaman ini merupakan purwarupa untuk sistem manajemen acara AmikomEventHub yang dibangun menggunakan Laravel dan Tailwind CSS.
            </p>
            
            <div class="flex flex-wrap gap-2 justify-center md:justify-start">
                <span class="bg-slate-100 text-slate-600 px-4 py-1.5 rounded-lg text-sm font-medium border border-slate-200">Laravel Blade</span>
                <span class="bg-slate-100 text-slate-600 px-4 py-1.5 rounded-lg text-sm font-medium border border-slate-200">Tailwind CSS</span>
            </div>
        </div>
    </div>
</div>
@endsection