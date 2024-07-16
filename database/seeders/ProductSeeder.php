<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()
            ->count(100)
            ->hasComments(10)
            ->hasFiles(10)
            ->forUser([
                'first_name' => 'Adam',
                'last_name' => 'Małysz',
                'email' => 'admin@gmail.com',
            ])
            ->create();

        Product::factory()
            ->count(100)
            ->withoutSubscription()
            ->hasComments(3)
            ->hasFiles(10)
            ->create();
    }
}
