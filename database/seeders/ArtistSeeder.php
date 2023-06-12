<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $artist = new Artist();

            $artist->artista = $faker->randomElement(['Andrea Bocelli', 'Ed Sheeran', 'Laura Pausini', 'Tiziano Ferro', 'Tina Turner', 'Zucchero', 'Beatles', 'Giorgia', 'Ligabue', 'Negramaro', 'Bob Marley']);

            $artist->nazionalita = $faker->randomElement(['Italiana', 'Irlandese', 'Giamaicana']);

            $artist->prossimo_concerto = $faker->date();

            $artist->ultimo_album = $faker->word();

            $artist->ultimo_singolo = $faker->word();

            $artist->save();
        }
    }
}
