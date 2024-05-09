<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'gender'=> $this->faker->shuffle(),
            'email' => $this->faker->safeEmail,
            'tel' => $this->faker->numberBetween(10,11),
            'address' => $this->faker->city,
            'building' => $this->faker->randomLetter,
            'gender' => $this->faker->shuffle(),
            'content'=> $this->faker->text(255),
        ];
    }
}
