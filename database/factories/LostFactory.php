<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\models\Lost;

class LostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lost::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        'left_design_id'=>$this->faker->numberBetween(1,7),
        'right_design_id'=>$this->faker->numberBetween(1,7),
        'center_design_id'=>$this->faker->numberBetween(1,7),
        'cutin_id'=>$this->faker->numberBetween(1,2),
        'directing_id'=>1,
        ];
    }
}
