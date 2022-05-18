<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Test::class;
    public function definition()
    {
        return [
            'script_name'=>$this->faker->text($maxNbChars = 25),
            'start_time'=>$this->faker->unixTime($max = 'now'),
            'end_time'=>$this->faker->unixTime($max = 'now') ,
            'result'=>$this->faker->randomElement($array = array ('normal','illegal','failed','success')),
        ];
    }
}
