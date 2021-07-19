<?php
use App\Offert;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class OffertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $offert = new Offert();
            $offert->name = $faker->state();
            $offert->img = $faker->imageUrl(400, 400, 'state', true);
            $offert->people = $faker->randomDigit();
            $offert->departure = $faker->city();
            $offert->arrival = $offert->name;
            $offert->day = $faker->randomDigit();
            $offert->description = $faker->paragraph();
            $offert->price = $faker->numberBetween(2000, 10000);
            $offert->save();
        }
    }
}
