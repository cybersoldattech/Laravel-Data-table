<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->titleMale,
            'slug'=> $this->faker->jobTitle(),
            'free'=> [true,false][rand(0,1)],
            'difficulty'=> ['beginner','intermediate','advanced'][rand(0,2)],
            'type'=> ['theory','project','snippet'][rand(0,2)],
        ];
    }
}
