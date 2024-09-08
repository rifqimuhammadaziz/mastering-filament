<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Parent Category
        $parentCategory = Category::create([
            'name' => 'Apple Products',
            'slug' => Str::slug('Apple Products'),
            'parent_id' => null,
            'is_visible' => true,
            'description' => 'This is for Apple Products.',
        ]);

        // Example child category
        Category::create([
            'name' => 'iPhone',
            'slug' => Str::slug('iPhone'),
            'parent_id' => $parentCategory->id,
            'is_visible' => true,
            'description' => 'This is iPhone category.',
        ]);

        // Additional categories
        Category::create([
            'name' => 'MacBook',
            'slug' => Str::slug('MacBook'),
            'parent_id' => null,
            'is_visible' => false,
            'description' => 'This is Macbook category.',
        ]);
    }
}
