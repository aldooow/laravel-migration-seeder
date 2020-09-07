<?php

use Illuminate\Database\Seeder;
use App\Car;
use Faker\Generator as Faker;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
          $new_car = new Car();
          $new_car->brand = $faker->randomElement($array = array ('Citroen', 'MINI', 'Nissan', 'Toyota', 'Ferrari'));
          $new_car->model = $faker->buildingNumber;
          $new_car->year = $faker->numberBetween($min = 1990, $max = 2020);
          $new_car->port = $faker->numberBetween($min = 2, $max = 5);
          $new_car->fuel = $faker->randomElement($array = array ('PETROL','DIESEL'));

          $new_car->save();
        }

        // $cars_array = [
        //   [
        //     'brand' => 'Citroen',
        //     'model' => 'C3',
        //     'year' => 2017,
        //     'port' => 5,
        //     'fuel' => 'Petrol',
        //
        //   ],
        //   [
        //     'brand' => 'Mini',
        //     'model' => 'Countryman',
        //     'year' => 2020,
        //     'port' => 5,
        //     'fuel' => 'Diesel',
        //   ],
        // ];


        // foreach ($cars_array as $car) {
        //   $new_car = new Car();

          // (--- $new_car->brand = $car['brand'];
          // $new_car->model = $car['model'];
          // $new_car->year = $car['year'];
          // $new_car->port = $car['port'];
          // $new_car->fuel = $car['fuel']; ---)
          // SE I NOMI CORRISPONDONO CON QUELLI DEL 'MODEL',
          // POSSIAMO UTTILIZZARE LA FUNZIONE 'FILL' -> $new_car->fill($car);
          // $new_car->fill($car);

          // $new_car->save();


    }
}
