@extends('layouts.main')

@section('title', 'Katalog Event')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-800 mb-2">Katalog Event</h1>
    <p class="text-slate-500">Jelajahi dan temukan berbagai event menarik di kampus Amikom.</p>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300 group flex flex-col">
        <div class="h-40 bg-indigo-100 relative flex items-center justify-center">
            <i class="fas fa-laptop-code text-5xl text-indigo-300 group-hover:scale-110 transition duration-300"></i>
            <span class="absolute top-3 right-3 bg-white px-3 py-1 rounded-md text-xs font-bold text-indigo-600 shadow-sm">Online</span>
        </div>
        <div class="p-6 flex flex-col flex-1">
            <div class="text-xs font-bold text-slate-400 mb-2 tracking-wider">12 MEI 2026</div>
            <h3 class="text-lg font-bold text-slate-800 mb-2">Webinar Masa Depan AI</h3>
            <p class="text-slate-500 text-sm mb-6 flex-1">Pelajari bagaimana Artificial Intelligence membentuk masa depan industri teknologi bersama pakar.</p>
            <button class="w-full bg-slate-50 text-indigo-600 border border-slate-200 font-semibold py-2.5 rounded-lg hover:bg-indigo-600 hover:text-white hover:border-indigo-600 transition duration-300">
                Detail Event
            </button>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300 group flex flex-col">
        <div class="h-40 bg-emerald-100 relative flex items-center justify-center">
            <i class="fas fa-palette text-5xl text-emerald-300 group-hover:scale-110 transition duration-300"></i>
            <span class="absolute top-3 right-3 bg-white px-3 py-1 rounded-md text-xs font-bold text-emerald-600 shadow-sm">Offline</span>
        </div>
        <div class="p-6 flex flex-col flex-1">
            <div class="text-xs font-bold text-slate-400 mb-2 tracking-wider">20 MEI 2026</div>
            <h3 class="text-lg font-bold text-slate-800 mb-2">Workshop UI/UX Design</h3>
            <p class="text-slate-500 text-sm mb-6 flex-1">Praktik langsung mendesain antarmuka menggunakan Figma dari nol hingga menjadi prototipe interaktif.</p>
            <button class="w-full bg-slate-50 text-indigo-600 border border-slate-200 font-semibold py-2.5 rounded-lg hover:bg-indigo-600 hover:text-white hover:border-indigo-600 transition duration-300">
                Detail Event
            </button>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300 group flex flex-col">
        <div class="h-40 bg-orange-100 relative flex items-center justify-center">
            <i class="fas fa-trophy text-5xl text-orange-300 group-hover:scale-110 transition duration-300"></i>
            <span class="absolute top-3 right-3 bg-white px-3 py-1 rounded-md text-xs font-bold text-orange-600 shadow-sm">Hybrid</span>
        </div>
        <div class="p-6 flex flex-col flex-1">
            <div class="text-xs font-bold text-slate-400 mb-2 tracking-wider">01 JUNI 2026</div>
            <h3 class="text-lg font-bold text-slate-800 mb-2">Amikom Hackathon 2026</h3>
            <p class="text-slate-500 text-sm mb-6 flex-1">Kompetisi inovasi teknologi 48 jam. Raih kesempatan memenangkan pendanaan untuk idemu!</p>
            <button class="w-full bg-slate-50 text-indigo-600 border border-slate-200 font-semibold py-2.5 rounded-lg hover:bg-indigo-600 hover:text-white hover:border-indigo-600 transition duration-300">
                Detail Event
            </button>
        </div>
    </div>
</div>
@endsection