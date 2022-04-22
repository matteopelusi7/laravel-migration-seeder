<?php

use App\Models\Train; 
use Illuminate\Database\Seeder;
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

        for ($i=0; $i < 100; $i++) { 

            $train = new Train();
            
            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->giorno_di_partenza = $faker->dayOfWeek();
            $train->codice_treno = $faker->numberBetween(1000, 10000000);
            $train->numero_carrozze = $faker->numberBetween(1,30);
    
            $train->save();
        }
        
    }
}
