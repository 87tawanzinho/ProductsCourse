<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "name"=> $this->faker->unique()->sentence(4),
            "description"=> $this->faker->paragraph(),
            "price"=> $this->faker->randomFloat(2, 24, 600),
            "image"=> $this->faker->imageUrl(400, 400),
            "id_user"=> User::pluck('id')->random(),
            "id_categoria"=> Categoria::pluck('id')->random(),
        ];
    }
}
