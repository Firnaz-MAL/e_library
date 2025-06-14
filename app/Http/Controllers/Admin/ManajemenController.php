<?php

namespace App\Http\Controllers\Admin;

use App\Models\Manajemen;
use App\Http\Controllers\Controller;
use App\Models\DetailManajemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Manajemen::with('detailmanajemen')->get();

        return view('admin.manajemen', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crudmanajemen.createdata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judulbuku' => 'required',
            'deskripsi' => 'required',
            'kodebuku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunterbit' => 'required|digits:4|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'judulbuku.required' => 'Judul buku tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi buku tidak boleh kosong',
            'kodebuku.required' => 'Kode buku tidak boleh kosong',
            'penulis.required' => 'Penulis buku tidak boleh kosong',
            'penerbit.required' => 'Penerbit buku tidak boleh kosong',
            'tahunterbit.required' => 'Tahun terbit buku tidak boleh kosong',
            'tahunterbit.integer' => 'Tahun terbit buku harus berupa angka',
            'tahunterbit.digits' => 'Tahun terbit buku harus terdiri dari 4 angka',
            'image.image' => 'Format gambar buku harus berupa gambar',
        ]);

        // upload image
        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        $manajemen = Manajemen::create([
            'judulbuku' => $request->judulbuku,
            'gambarbuku' => $image->hashName(),
            'deskripsi' => $request->deskripsi,
        ]);

        DetailManajemen::create([
            'manajemen_id' => $manajemen->id,
            'kodebuku' => $request->kodebuku,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahunterbit
        ]);

        return redirect()->route('manajemen.index')->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manajemen = Manajemen::with('detailmanajemen')->findOrFail($id);
        return view('admin.crudmanajemen.editdata', compact('manajemen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judulbuku' => 'required',
            'deskripsi' => 'required',
            'kodebuku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunterbit' => 'required|digits:4|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        // cari id buku
        $manajemen = Manajemen::findOrFail($id);

        // cek jika gambar baru di upload
        if ($request->hasFile('image')) {
            // hapus gambar lama
            Storage::delete('public/products/' . $manajemen->gambarbuku);

            // upload gambar baru
            $image = $request->file('image');
            $image->storeAs('public/products', $image->hashName());

            // update data buku
            $manajemen->update([
                'judulbuku' => $request->judulbuku,
                'gambarbuku' => $image->hashName(),
                'deskripsi' => $request->deskripsi,
            ]);

        }else{
            $manajemen->update([
                'judulbuku' => $request->judulbuku,
                'deskripsi' => $request->deskripsi,
            ]);
        }

        // update data detail buku
        DetailManajemen::where('manajemen_id', $id)->update([
            'kodebuku' => $request->kodebuku,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahunterbit
        ]);

        return redirect()->route('manajemen.index')->with('success', 'Buku berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $manajemen = Manajemen::findOrFail($id);
        // $manajemen->detailmanajemen()->delete();
        Storage::delete('public/products/' . $manajemen->gambarbuku);

        $manajemen->delete();

        return redirect()->route('manajemen.index')->with('success', 'Buku berhasil dihapus');
    }
}
