<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Factory as faker;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\transaksi>
 */
class transaksiFactory extends Factory
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
            'produk_id' => Arr::random([1,2,3,4]),
            'pengguna_id' => Arr::random([1,2,3,5,7,8,9,11,12,14]),
            'qty' =>   $faker->randomNumber(2, true),
            'total_payment'=>$faker->numerify('Rp.##'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];
    }
}
