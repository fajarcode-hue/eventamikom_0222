@extends('layouts.admin', ['title' => 'Tambah Kategori'])

@section('content')
<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Tambah Kategori</h1>
        <p class="text-slate-500 font-medium">Masukkan informasi kategori event yang baru.</p>
    </div>
    <a href="{{ route('admin.categories.index') }}" class="px-6 py-3 bg-slate-100 text-slate-700 rounded-2xl font-bold hover:bg-slate-200 transition">
        Kembali
    </a>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden p-8 max-w-2xl">
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        
        <div class="mb-6">
            <label class="block text-sm font-bold text-slate-700 mb-2">Nama Kategori</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition font-medium text-slate-700 placeholder-slate-400" placeholder="Contoh: Konser Musik" required>
            @error('name') 
                <span class="text-rose-500 text-sm font-medium mt-2 block">{{ $message }}</span> 
            @enderror
        </div>

        <div class="flex gap-4 mt-8">
            <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold shadow-lg hover:bg-indigo-700 transition">
                Simpan Kategori
            </button>
        </div>
    </form>
</div>
@endsection