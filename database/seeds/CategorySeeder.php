<?php

use Illuminate\Database\Seeder;
use App\CategoryModel;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CategoryModel::class,5)->create();
        
        
    }
}
