<?php

namespace Database\Factories;

use App\Models\Honduco;
use Illuminate\Database\Eloquent\Factories\Factory;

class HonducoFactory extends Factory
{
     /**
     * Define the model's default state.
     * 
     *     @var String
     */
    protected $model = Honduco::class;
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
            'direccion' =>$this->faker->address(),
            'descripcion' =>$this->faker->paragraph()
        ];
    }
}
