<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Gallery;
use App\Models\VisiMisi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $berita = Berita::all();
        $jumlahBerita = $berita->count();
        $title = 'Dashboard';
        return view('admin/dashboard', compact('berita', 'title', 'jumlahBerita'));
    }

    public function editProfile(): View
    {
        $visiMisi = VisiMisi::all()->get(0);
        $title = "profile-PT.MSI";
        return view("admin/profilePT", compact("title", "visiMisi"));
    }

    public function updateProfile(Request $req, $id): RedirectResponse
    {
        $req->validate([
            "visi" => "required",
            "misi" => "required",
        ]);
        $visiMisi = VisiMisi::findOrFail($id);
        $visiMisi->update($req->all());
        return redirect()->route("profilePT");
    }

    public function galleryAdmin(): View
    {
        $title = "Gallery";
        $gallery = Gallery::all();
        return view("admin/gallery-admin", compact("title", "gallery"));
    }

    public function addGallery(Request $req): RedirectResponse
    {
        $validate = $req->validate([
            "name" => "required",
            "foto" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "description" => "required"
        ]);

        if ($req->hasFile('foto')) {
            $fotoName = time().".".$req->foto->extension();
            $req->foto->storeAs("public/gallery", $fotoName);
            $validate["foto"] = $fotoName;
        }

        Gallery::create($validate);
        return redirect()->route("galleryAdmin");
    }

    public function deleteGallery($id): RedirectResponse
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->route("galleryAdmin");
    }
}
