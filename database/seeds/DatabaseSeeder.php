<?php

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
      $users = factory(\App\User::class, 10)->create();
      $categories = factory(\App\Category::class, 6)->create();
      $products = factory(\App\Product::class, 48)->create();
    }
}
