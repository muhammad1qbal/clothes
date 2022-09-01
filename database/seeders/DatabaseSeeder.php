<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Laptop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory(2)->create();

        Brand::create([
            'name' => 'Apple',
            'slug' => 'apple-laptop'
        ]);

        Brand::create([
            'name' => 'Lenovo',
            'slug' => 'lenovo-laptop'
        ]);

        Brand::create([
            'name' => 'Dell',
            'slug' => 'dell-laptop'
        ]);

        User::create([
            'name' => 'Muhammad Iqbal',
            'email' => 'iqbal@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Laptop::factory(20)->create();
    }
}
