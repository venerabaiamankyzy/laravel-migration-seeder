<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 9; $i++) {
            $train = new Train;

            $train->azienda = $faker->randomElement(['Frecciarossa', 'Italo', 'Trenitalia', 'Trenord']);
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->dateTimeBetween('now', '+60 minutes');
            $train->orario_di_arrivo = $faker->dateTimeBetween('+60 minutes', '+2 hours');
            $train->codice_treno = $faker->randomNumber(6, true);
            $train->numero_carrozze = $faker->numberBetween(5, 20);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();

        }
        
        // $train = new Train;

        // $train->azienda = 'Trenitalia';
        // $train->stazione_di_partenza = 'Roma Termini';
        // $train->stazione_di_arrivo = 'Milano Centrale';
        // $train->orario_di_partenza = '08:00:00';
        // $train->orario_di_arrivo = '12:30:00';
        // $train->codice_treno = 'AV1234';
        // $train->numero_carrozze = 10;
        // $train->in_orario = true;
        // $train->cancellato = false;

        // $train->save();

        // $train = new Train;
        // $train->azienda = 'Italo';
        // $train->stazione_di_partenza = 'Napoli Centrale';
        // $train->stazione_di_arrivo = 'Firenze Santa Maria Novella';
        // $train->orario_di_partenza = '10:30:00';
        // $train->orario_di_arrivo = '14:45:00';
        // $train->codice_treno = 'AV5678';
        // $train->numero_carrozze = 8;
        // $train->in_orario = false;
        // $train->cancellato = true;
        
        // $train->save();

        // $train = new Train;
        // $train->azienda = 'Trenord';
        // $train->stazione_di_partenza = 'Como Nord Lago';
        // $train->stazione_di_arrivo = 'Saronno';
        // $train->orario_di_partenza = '09:15:00';
        // $train->orario_di_arrivo = '10:00:00';
        // $train->codice_treno = 'R1234';
        // $train->numero_carrozze = 3;
        // $train->in_orario = true ;
        // $train->cancellato = false;
        
        // $train->save();
        
        
    }
}