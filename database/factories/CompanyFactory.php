<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\SmsLocation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'balance' => $this->faker->numberBetween(250, 750),
            'sms_location_id' => function() {
                return SmsLocation::factory()->create()->id;
            }
        ];
    }
}
