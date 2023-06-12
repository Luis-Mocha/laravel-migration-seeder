<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// implemento il modello
use App\Models\Train;

// implemento faker
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {

            $newTrain = new Train();
            $newTrain->nome_azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->unique()->numberBetween(10, 99);
            $newTrain->numero_carrozze = $faker->numberBetween(5, 10);
            $newTrain->in_orario = true;
            $newTrain->cancellato = false;

            $newTrain->save();

        }
    }
}
