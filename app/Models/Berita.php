<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';
    protected $fillable = [
        "judul",
        "author",
        "isi_berita",
        "foto_berita",
        "id_kategori",
        "tanggal_terbit"
    ];
}
