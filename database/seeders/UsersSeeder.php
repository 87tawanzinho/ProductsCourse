<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName' => 'Carlos',
            'lastName' => 'Dubai',
            'email'=> '2222@gmail.com',
            'password'=> bcrypt('12345678'),
        ]);
    }
}
