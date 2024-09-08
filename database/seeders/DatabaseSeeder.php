<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Disable foreign key checks to avoid errors when truncating tables with foreign keys
        Schema::disableForeignKeyConstraints();

        // Truncate tables to clean all data
        DB::table('products')->truncate();
        DB::table('brands')->truncate();
        DB::table('categories')->truncate();

        // Enable foreign key checks after truncating tables
        Schema::enableForeignKeyConstraints();

        // Call each seeder class here
        $this->call([
            CategorySeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
        ]);

    }
}
