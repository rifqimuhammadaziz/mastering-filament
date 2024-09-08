<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'name' => 'Apple',
            'slug' => Str::slug('Apple'),
            'url' => 'https://www.apple.com',
            'primary_hex' => '#FF5733', // Example hex color
            'is_visible' => true,
            'description' => 'Apple is an American multinational multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.',
        ]);

        Brand::create([
            'name' => 'Samsung',
            'slug' => Str::slug('Samsung'),
            'url' => 'https://www.samsung.com',
            'primary_hex' => '#33C1FF', // Example hex color
            'is_visible' => false,
            'description' => 'Samsung is a South Korean multinational conglomerate headquartered in Samsung Town, Seoul. It is the world\'s largest cell phone manufacturer.',
        ]);

        Brand::create([
            'name' => 'Xiaomi',
            'slug' => Str::slug('Xiaomi'),
            'url' => null,
            'primary_hex' => '#8E44AD', // Example hex color
            'is_visible' => true,
            'description' => 'Xiaomi is a Chinese multinational conglomerate headquartered in Hangzhou, Zhejiang, China.',
        ]);
    }
}
