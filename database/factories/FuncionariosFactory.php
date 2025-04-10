<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FuncionariosFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'telefone' => $this->faker->phoneNumber(),
            'password' => bcrypt('password'), // senha padrão
            'cargo' => 'funcionario', // fixo como funcionário
            'remember_token' => Str::random(10),
        ];
    }
}
