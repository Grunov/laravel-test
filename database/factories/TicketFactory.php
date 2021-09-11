<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'ticket_title' => $this->faker->name, //Generates a fake sentence
          'name' => $this->faker->name,
          'phone' => $this->faker->name,
          'company' => $this->faker->name,
          'message' => $this->faker->paragraph(30), //generates fake 30 paragraphs
          'file_url' => $this->faker->name,
          'user_id' => User::factory() //Generates a User from factory and extracts id
        ];
    }
}
