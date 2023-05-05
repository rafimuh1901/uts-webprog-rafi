<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new UserSeeder();
        $category = new CategorySeeder();
        $menu = new MenuSeeder();
        $transaction = new TransactionSeeder();

        $user->run();
        $category->run();
        $menu->run();
        $transaction->run();
    }
}
