<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\models\Winning;

class WinningFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Winning::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'left_design_id'=>7,
            'right_design_id'=>7,
            'center_design_id'=>7,
            'round'=>10,
            'cutin_id'=>$this->faker->numberBetween(1,2),
            'directing_id'=>$this->faker->numberBetween(5,6),
        ];
    }
}
