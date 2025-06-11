<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;
use Database\Seeders\CategoriesTableSeeder;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        $customAddress = $this->faker->prefecture() . $this->faker->city() . $this->faker->streetAddress();

        return [
            'category_id' => $this->faker->numberBetween(1, 5),
            'last_name' => $this->faker->lastName(),
            'first_name' =>  $this->faker->firstName(),
            'gender' => $this->faker->numberBetween(1, 3), //1:男性 2:女性 3:その他
            'email' => $this->faker->unique()->safeEmail(),
            'tel' => $this->faker->phoneNumber(),
            'address' => $customAddress,
            'building' => $this->faker->secondaryAddress(),
            'detail' => $this->faker->realText(120),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
