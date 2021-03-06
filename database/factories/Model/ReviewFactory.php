<?php



namespace Database\Factories\Model;

use App\Models\model\Review;
use App\Models\model\Product;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
	 protected $model = Review::class;
    public function definition()
    {
        return [
            'product_id' => function(){
				return Product::all()->random();
			},
			'customer' => $this->faker->name,
			'review' => $this->faker->paragraph,
			'star' => $this->faker->numberBetween(0,5)
        ];
    }
}
