<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Usuário Admin
        User::create([
            'name' => 'Lucas Admin',
            'email' => 'admin@a.com',
            'email_verified_at' => now(),
            'telefone' => '(55) 99130-6263',
            'password' => Hash::make('12345678'), // Altere para uma senha segura
            'cargo' => 'admin'
        ]);

        // Usuário Funcionário
        User::create([
            'name' => 'Lucas Funcionario',
            'email' => 'funcionario@a.com',
            'email_verified_at' => now(),
            'telefone' => '(11) 98888-8888',
            'password' => Hash::make('12345678'), // Altere para uma senha segura
            'cargo' => 'funcionario' // Pode omitir pois é o default
        ]);
    }
}
