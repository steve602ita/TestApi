<?php


namespace Database\Factories\Model;

use App\Models\model\Product;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
	 protected $model = Product::class;
	 
    public function definition()
    {
        return [
            'name' => $this->faker->word,
			'detail' => $this->faker->paragraph,
			'price' => $this->faker->numberBetween(100,1000),
			'stock' => $this->faker->randomDigit,
			'discount' => $this->faker->numberBetween(2,30)
			
        ];
    }
}
