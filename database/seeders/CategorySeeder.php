<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => 'Electronics',
            'slug' => 'electronics',
        ]);
        Category::create([
            'title' => 'Fashion',
            'slug' => 'fashion',
        ]);
    }
}
