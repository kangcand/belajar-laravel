<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $film = new Film();
        $film->judul = "Spiderman";
        $film->deskripsi = "lorem ipusum";
        $film->save();

        Film::create([
            'judul' => 'Suicide Squad',
            'deskripsi' => 'Lorem Ipsum',
        ]);

        Film::create([
            'judul' => 'Batman',
            'deskripsi' => 'Lorem Ipsum',
        ]);
    }
}
