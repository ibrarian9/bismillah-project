<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $berita = Berita::all();
        $kategori = Kategori::all();
        $title = "Berita";
        return view('admin.berita-admin', compact('berita', 'title', 'kategori'));
    }

    public function store(Request $req): RedirectResponse
    {
        $validate = $req->validate([
            'judul' => 'required|max:50',
            'author' => 'required|max:50',
            'isi_berita' => 'required',
            'foto_berita' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'id_kategori' => 'required',
            'tanggal_terbit' => 'required|date',
        ]);

        DB::beginTransaction();

        try {
            if ($req->hasFile('foto_berita')) {
                $imageName = time().".".$req->foto_berita->extension();
                $req->foto_berita->storeAs('public/foto_berita', $imageName);
                $validate['foto_berita'] = $imageName;
            }

            Berita::create($validate);
            DB::commit();
            return redirect()->route("berita-admin.index")->with("pesan", "Berita berhasil ditambahkan");
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route("berita-admin.index")->with("pesan", $th->getMessage());
        }
    }

    public function update(Request $req, Berita $berita): RedirectResponse
    {
        $req->validate([
            'judul' => 'required|max:50',
            'author' => 'required|max:50',
            'isi_berita' => 'required',
            'foto_berita' => '',
            'id_kategori' => '',
            'tanggal_terbit' => 'required|date',
        ]);

        $berita->update($req->all());
        return redirect()->route('berita-admin.index')->with('success', 'Berita updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('berita-admin.index')->with('success', 'Berita berhasil dihapus.');
    }
}
