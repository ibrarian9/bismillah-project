<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Gallery;
use App\Models\VisiMisi;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(): View
    {
        $berita = Berita::all();
        $title = "Beranda";
        return view('home', compact('title', 'berita'));
    }

    public function blog(): View
    {
        $berita = Berita::all();
        $title = "Blog";
        return view('blog', compact('title', 'berita'));
    }

    public function about(): View
    {
        $visiMisi = VisiMisi::all()->get(0);
        $title = "Tentang Kami";
        return view('about', compact('visiMisi', 'title'));
    }

    public function gallery(): View
    {
        $gallery = Gallery::all();
        $title = "Gallery";
        return view('gallery', compact('gallery', 'title'));
    }
}
