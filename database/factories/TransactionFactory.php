<?php

namespace Database\Factories;

use App\Models\Transaction;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition()
    {
        return [
            'brand_id' => Brand::factory(),
            'category_id' => Category::factory(),
            'size_id' => Size::factory(),
            'color_id' => Color::factory(),
            'quantity' => $this->faker->numberBetween(1, 10),
            'total_price' => $this->faker->numberBetween(10000, 100000),
        ];
    }
}