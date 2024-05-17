<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Genre;
use App\Models\Penulis;

class FrontController extends Controller
{
    // menampilkan semua data buku
    public function buku()
    {
        $buku = Buku::latest()->get();
        $genre = Genre::all();
        $penulis = Penulis::all();
        return view('welcome', compact('buku', 'penulis', 'genre'));
    }

    public function detailBuku($id)
    {
        $buku = Buku::findOrFail($id);
        return view('detail_buku', compact('buku'));
    }
}
