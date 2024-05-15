<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Media::create([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'IMDB',
            'url_media' => 'https: //www.imdb.com/title/tt10872600/',
        ]);

        Media::create([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'YT',
            'url_media' => 'https: //www.youtube.com/watch?v=JfVOs4VSpmA',
        ]);

        Media::create([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'IMDB',
            'url_media' => 'https: //www.imdb.com/title/tt10872600/',
        ]);

        Media::create([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'YT',
            'url_media' => 'https: //www.youtube.com/watch?v=JfVOs4VSpmA',
        ]);

        Media::create([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'IMDB',
            'url_media' => 'https: //www.imdb.com/title/tt10872600/',
        ]);

        Media::create([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'YT',
            'url_media' => 'https: //www.youtube.com/watch?v=JfVOs4VSpmA',
        ]);

    }
}
