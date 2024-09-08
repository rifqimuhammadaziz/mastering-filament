<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch a random brand to associate with the products
        $brand = Brand::inRandomOrder()->first();

        // Sample product data
        Product::create([
            'brand_id' => $brand->id,
            'name' => 'Sample Product 1',
            'slug' => Str::slug('Sample Product 1'),
            'sku' => 'PROD-001',
            'image' => 'images/sample-product-1.jpg', // Replace with actual image path
            'description' => 'This is a sample product description for product 1.',
            'quantity' => 100,
            'price' => 29.99,
            'is_visible' => true,
            'is_featured' => false,
            'type' => 'deliverable',
            'published_at' => now()
        ]);

        Product::create([
            'brand_id' => $brand->id,
            'name' => 'Sample Product 2',
            'slug' => Str::slug('Sample Product 2'),
            'sku' => 'PROD-002',
            'image' => 'images/sample-product-2.jpg', // Replace with actual image path
            'description' => 'This is a sample product description for product 2.',
            'quantity' => 50,
            'price' => 49.99,
            'is_visible' => true,
            'is_featured' => true,
            'type' => 'downloadable',
            'published_at' => now()
        ]);

        Product::create([
            'brand_id' => $brand->id,
            'name' => 'Sample Product 3',
            'slug' => Str::slug('Sample Product 3'),
            'sku' => 'PROD-003',
            'image' => 'images/sample-product-3.jpg', // Replace with actual image path
            'description' => 'This is a sample product description for product 3.',
            'quantity' => 200,
            'price' => 19.99,
            'is_visible' => false,
            'is_featured' => false,
            'type' => 'deliverable',
            'published_at' => now()
        ]);
    }
}
