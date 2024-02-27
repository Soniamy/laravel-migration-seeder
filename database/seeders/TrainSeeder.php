<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Process\FakeProcessResult;
use Illuminate\Support\Testing\Fakes\Fake;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        foreach (range(1, 10) as $index) {
          $train = new Train();
                $train->company = fake()->words(rand(1,3), true);
                $train ->departure_station = fake()->words(rand(1,5), true);
                $train ->arrival_station = fake()->words(rand(1,5), true);
                $train ->departure_time = fake()->time();
                $train ->arrival_time = fake()->time();
                $train ->train_code = fake()->randomNumber(5, true);
                $train ->carriage_count = fake()->randomNumber(3, true);
                $train ->on_time = fake()->boolean();
                $train ->canceled = fake()->boolean();
                $train -> save();
         
        }
    }
}
