<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Factory as faker;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pengguna>
 */
class penggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'name' => $faker->name(),
            'email' => $faker->email(),
            'pw' =>   $faker->randomNumber(4, true),
            'img' =>  Arr::random(['face1.jpg','face2.jpg','face3.jpg','face4.jpg','face5.jpg','face6.jpg','face7.jpg','face8.jpg','face9.jpg','face10.jpg','face11.jpg','face12.jpg','face13.jpg','face14.jpg','face15.jpg','face16.jpg','face16.jpg','face17.jpg','face18.jpg','face19.jpg']),
            'role_id'=>Arr::random([1,2]),
            'updated_at'=>Carbon::now()
        ];
    }
}
