<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $partners = Partner::when($search, function ($query, $search) {
            return $query->where('name', 'LIKE', '%' . $search . '%');
        })->latest()->get();

        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo_url' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048', // maksimal 2MB
        ]);

        // Proses upload file logo
        $logoPath = $request->file('logo_url')->store('partners', 'public');

        Partner::create([
            'name' => $request->name,
            'logo_url' => $logoPath,
        ]);

        return redirect()->route('admin.partners.index')->with('success', 'Partner baru berhasil ditambahkan!');
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo_url' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $data = ['name' => $request->name];

        // Jika admin mengupload logo baru
        if ($request->hasFile('logo_url')) {
            // Hapus logo lama dari storage jika ada
            if ($partner->logo_url && Storage::disk('public')->exists($partner->logo_url)) {
                Storage::disk('public')->delete($partner->logo_url);
            }
            // Simpan logo baru
            $data['logo_url'] = $request->file('logo_url')->store('partners', 'public');
        }

        $partner->update($data);

        return redirect()->route('admin.partners.index')->with('success', 'Data partner berhasil diubah!');
    }

    public function destroy(Partner $partner)
    {
        // Hapus file logo dari storage sebelum menghapus data dari DB
        if ($partner->logo_url && Storage::disk('public')->exists($partner->logo_url)) {
            Storage::disk('public')->delete($partner->logo_url);
        }

        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', 'Partner berhasil dihapus!');
    }
}