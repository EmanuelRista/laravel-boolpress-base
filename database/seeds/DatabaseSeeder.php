<?php

use App\PostInformationModel;
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
        $this->call([
            CategorySeeder::class,
            PostSeeder::class,
            PostInformationSeeder::class
        ]);
    }
}
