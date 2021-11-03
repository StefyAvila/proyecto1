<?php

namespace Database\Factories;

use App\Models\Comico;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComicoFactory extends Factory
{
     /**
     * Define the model's default state.
     * 
     *     @var String
     */
    protected $model = Comico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' =>$this->faker->name(), 
            'categoria' =>$this->faker->randomElement(['Familiar', 
        'adolescentes', 'niños']), 
            'ubicaciones' =>$this->faker->locale()
        ];
    }
}
