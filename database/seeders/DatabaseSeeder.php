<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            BrandSeeder::class,
            CategorySeeder::class,
            SizeSeeder::class,
            ColorSeeder::class,
            TransactionSeeder::class,
            UserTableSeeder::class,
        ]);
    }
}