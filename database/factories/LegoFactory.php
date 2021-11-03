<?php

namespace Database\Factories;

use App\Models\Lego;

use Illuminate\Database\Eloquent\Factories\Factory;

class LegoFactory extends Factory
{
     /**
     * Define the model's default state.
     * 
     *     @var String
     */
    protected $model = Lego::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
           'email' =>$this->faker->unique()->safeEmail(),
            'descripcion' =>$this->faker->text(), 
            'connection' =>$this->faker->randomElement(['Si', 'No'])
        ];
    }
}
