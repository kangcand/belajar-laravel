<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public $fillable = ['nama_genre'];
    public $visible = ['nama_genre'];
    public $timestamps = true;

    // relasi many to many genre & buku
    public function buku()
    {
        // model Genre memiliki banyak data dari model Buku
        // melalui table 'pivot' genre_buku yang diwakili
        // oleh id_genre & id_buku
        return $this->belongsToMany(Buku::class, 'genre_buku', 'id_genre', 'id_buku');
    }
}
