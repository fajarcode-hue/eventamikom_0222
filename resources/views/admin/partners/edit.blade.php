@extends('layouts.admin', ['title' => 'Edit Partner'])

@section('content')
<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Edit Data Partner</h1>
        <p class="text-slate-500 font-medium">Perbarui profil atau logo mitra kerja sama di bawah ini.</p>
    </div>
    <a href="{{ route('admin.partners.index') }}" class="px-6 py-3 bg-slate-100 text-slate-700 rounded-2xl font-bold hover:bg-slate-200 transition">
        Kembali
    </a>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden p-8 max-w-2xl">
    <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-6">
            <label class="block text-sm font-bold text-slate-700 mb-2">Nama Partner / Perusahaan</label>
            <input type="text" name="name" value="{{ old('name', $partner->name) }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition font-medium text-slate-700" required>
            @error('name') 
                <span class="text-rose-500 text-sm font-medium mt-2 block">{{ $message }}</span> 
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-bold text-slate-700 mb-2">Logo Saat Ini</label>
            <div class="w-32 h-32 bg-slate-50 border border-slate-100 rounded-2xl p-3 flex items-center justify-center mb-3">
                <img src="{{ asset('storage/' . $partner->logo_url) }}" class="max-w-full max-h-full object-contain">
            </div>
            
            <label class="block text-sm font-bold text-slate-700 mb-2">Ganti Logo Baru <span class="text-xs text-slate-400 font-normal">(Kosongkan jika tidak ingin diubah)</span></label>
            <input type="file" name="logo_url" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition font-medium text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 file:cursor-pointer">
            @error('logo_url') 
                <span class="text-rose-500 text-sm font-medium mt-2 block">{{ $message }}</span> 
            @enderror
        </div>

        <div class="flex gap-4 mt-8">
            <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold shadow-lg hover:bg-indigo-700 transition">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection