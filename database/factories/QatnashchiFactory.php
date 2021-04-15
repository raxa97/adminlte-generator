<?php

namespace Database\Factories;

use App\Models\Qatnashchi;
use Illuminate\Database\Eloquent\Factories\Factory;

class QatnashchiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Qatnashchi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
        'last_name' => $this->faker->word,
        'first_name' => $this->faker->word,
        'middle_name' => $this->faker->word,
        'gender' => $this->faker->word,
        'email' => $this->faker->word,
        'country' => $this->faker->word,
        'city' => $this->faker->word,
        'organization' => $this->faker->word,
        'position' => $this->faker->word,
        'academic_degree' => $this->faker->word,
        'work_phone' => $this->faker->word,
        'desired_status' => $this->faker->word,
        'need_visa' => $this->faker->word,
        'accompanying_person' => $this->faker->word,
        'comments' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
