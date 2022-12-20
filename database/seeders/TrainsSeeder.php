<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->words(3, true);
            $train->stazione_di_arrivo = $faker->words(3, true);
            $train->orario_di_partenza = $faker->time('H:i:s', 'now');
            $train->orario_di_arrivo = $faker->time('H:i:s', 'now');
            $train->numero_carrozze = $faker->randomDigitNotNull();;
            $train->codice_treno = $faker->randomNumber(5, true);
            $train->in_orario = $faker->randomElement([true, false]);
            $train->cancellato = $faker->randomElement([true, false]);
            $train->save();
        }
    }
}
