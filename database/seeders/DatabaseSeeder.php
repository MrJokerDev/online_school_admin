<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        $this->call([
            LevelSeeder::class,
        ]);
        
        $this->call([
            UserSeeder::class,
        ]);

        // \App\Models\User::factory()->create([
        //     'first_name' => 'Super',
        //     'last_name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('123123123'),
        //     'status' => 'active',
        //     'payment_status' => 'active'
        // ]);
    }
}