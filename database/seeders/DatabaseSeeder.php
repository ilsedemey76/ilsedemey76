<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * php artisan make:seeder UserSeeder
     *
    * php artisan db:seed
    *
    * php artisan db:seed --class=UserSeeder
	*
     * @return void
     */
    public function run()
    {
        $this->call(
            ProductSeeder::class,
            //ProductImagesSeeder::class,
        );
        // \App\Models\User::factory(10)->create();
    }
}
