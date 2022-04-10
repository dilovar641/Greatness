<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
		    'name' => $this->faker->unique()->name(),
            'age' => $this->faker->unique()->numberBetween(1, 10), 
			'salary' => $this->faker->unique()->numberBetween(1, 10)
            
        ];
    }
}
