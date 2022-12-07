<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Concert','Sport','Park'];

        foreach ($categories as $key => $value) {

            Category::create([

                'name'  => $value

            ]);
        }
    }
}
