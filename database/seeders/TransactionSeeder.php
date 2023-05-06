<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Transaction::factory(10)->create();

        // each user has purchase 3 coffee at different time
        Transaction::insert([
            // Ms. Fei Fei Li 18 Maret
            [
                'userId' => 2,
                'menuId' => 3,
                'completed' => 1,
                'created_at' => Carbon::create(2023, 3, 18)
            ],
            // Ms.Fei Fei Li 19 Maret
            [
                'userId' => 2,
                'menuId' => 5,
                'completed' => 1,
                'created_at' => Carbon::create(2023, 3, 19)
            ],
            // Mr. Vico Lomar 19 Maret
            [
                'userId' => 1,
                'menuId' => 1,
                'completed' => 1,
                'created_at' => Carbon::create(2023, 3, 19)
            ],
            // Mr. Vico Lomar 20 Maret
            [
                'userId' => 1,
                'menuId' => 2,
                'completed' => 1,
                'created_at' => Carbon::create(2023, 3, 20)
            ],
            // Ms. Fei Fei Li 21 Maret
            [
                'userId' => 2,
                'menuId' => 6,
                'completed' => 1,
                'created_at' => Carbon::create(2023, 3, 21)
            ],
            // Mr. Vico Lomar 21 Maret
            [
                'userId' => 1,
                'menuId' => 7,
                'completed' => 1,
                'created_at' => Carbon::create(2023, 3, 21)
            ],
        ]);
    }
}
