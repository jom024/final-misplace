<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Item;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class UserItemFactory extends Factory
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
            'user_id' => User::factory()->create(),
            'item_id' => Item::factory()->create(),
            'return_date' => fake()->dateTime(),
        ];
    }
}
