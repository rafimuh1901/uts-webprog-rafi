<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Jika ingin generate users (dummy data)
        // User::factory(5)->create();

        // Insert Mr. Vico Lomar & Ms. Fei Fei Li
        User::insert([
            [
                'name' => 'Vico Lomar',
                'gender' => 'Male',
                'level' => 'Gold',
                'points' => 100
            ],
            [
                'name' => 'Fei Fei Li',
                'gender' => 'Female',
                'level' => 'Green',
                'points' => 50
            ]
        ]);
    }
}
