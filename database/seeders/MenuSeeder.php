<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert([
            [
                'name' => 'Caffe Latte',
                'price' => '50000',
                'categoryId' => 1
            ],
            [
                'name' => 'Cappuccino',
                'price' => '45000',
                'categoryId' => 1
            ],
            [
                'name' => 'Caramel Macchiato',
                'price' => '65000',
                'categoryId' => 1
            ],
            [
                'name' => 'Caffe Americano',
                'price' => '30000',
                'categoryId' => 1
            ],
            [
                'name' => 'Freshly Brewed Coffee',
                'price' => '20000',
                'categoryId' => 2
            ],
            [
                'name' => 'Misto',
                'price' => '30000',
                'categoryId' => 2
            ],
            [
                'name' => 'Cold Brew',
                'price' => '35000',
                'categoryId' => 2
            ],
            [
                'name' => 'Mango Passion Frappucino',
                'price' => '45000',
                'categoryId' => 3
            ],
            [
                'name' => 'Raspberry Currant Frappuccino',
                'price' => '50000',
                'categoryId' => 3
            ],
            [
                'name' => 'Caramel Frappuccino',
                'price' => '55000',
                'categoryId' => 3
            ],
            [
                'name' => 'Signature Chocolate',
                'price' => '30000',
                'categoryId' => 4
            ],
            [
                'name' => 'Green Tea Latte',
                'price' => '33000',
                'categoryId' => 4
            ],
            [
                'name' => 'Earl Grey Tea Latte',
                'price' => '35000',
                'categoryId' => 4
            ],
            [
                'name' => 'Teavana English Breakfast Hot Tea',
                'price' => '25000',
                'categoryId' => 4
            ],
        ]);
    }
}
