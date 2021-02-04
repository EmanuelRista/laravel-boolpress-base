<?php

use App\PostInformationModel;
use Illuminate\Database\Seeder;

class PostInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PostInformationModel::class, 10)->create();
    }
}
