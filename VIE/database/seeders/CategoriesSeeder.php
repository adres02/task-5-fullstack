<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        $categories = [
            [
                'name' => 'Category 1',
                'user_id' => $users->random()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Category 2',
                'user_id' => $users->random()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        Categories::insert($categories);
    }
}
