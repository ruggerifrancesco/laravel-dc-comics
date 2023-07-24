<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comicData) {
            $comic = new Comic();
            $comic->title = $comicData['title'];
            $comic->description = $comicData['description'];
            $comic->thumb = $comicData['thumb'];
            $comic->price = $comicData['price'];
            $comic->series = $comicData['series'];
            $comic->sale_date = $comicData['sale_date'];
            $comic->type = $comicData['type'];
            $comic->artists = json_encode($comicData['artists']);
            $comic->writers = json_encode($comicData['writers']);
            $comic->save();
        }
    }
}
