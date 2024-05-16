<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    public $fillable = ['judul', 'isbn', 'deskripsi', 'jml_halaman', 'cover', 'tgl_terbit',
        'id_penulis'];
    public $visible = ['judul', 'isbn', 'deskripsi', 'jml_halaman', 'cover', 'tgl_terbit',
        'id_penulis'];

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }

    // relasi many to many buku & genre
    public function genre()
    {
        // model Buku memiliki banyak data dari model Genre
        // melalui table 'pivot' genre_buku yang diwakili
        // oleh id_genre & id_buku
        return $this->belongsToMany(Genre::class, 'genre_buku', 'id_buku', 'id_genre');
    }

    // menghapus foto
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/buku/' . $this->cover))) {
            return unlink(public_path('images/buku/' . $this->cover));
        }
    }
}
