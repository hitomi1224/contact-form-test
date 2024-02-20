<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name'=> $this->faker->name,
            'first_name'=> $this->faker->name,
            'gender'=> $this->faker->sentence('男性', '女性', 'その他'),
            'email'=> $this->faker->safeEmail,
            'tell'=> $this->faker->numberBetween(1,5),
            'address'=> $this->faker->state,
            'building'=> $this->faker->city,
            'category_id'=> $this->faker->('商品のお届けについて', '商品の交換について', '商品トラブル', 'ショップへのお問い合わせ', 'その他'),
            'detail'=> $this->faker->text(120)
        ];
    }
}
