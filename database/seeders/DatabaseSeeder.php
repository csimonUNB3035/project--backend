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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $item1 = [
            "name" => "Bacon English Muffin Breakfast Sandwich",
            "slug" => "bacon-english-muffin-sandwich",
            "description" => "Breakfast sandwich made with bacon, egg, cheese, on an english muffin.",
            "price" => "5.99",
        ];
        $item2 = [
            "name" => "Sausage English Muffin Breakfast Sandwich",
            "slug" => "sausage-english-muffin-sandwich",
            "description" => "Breakfast sandwich made with sausage, egg, cheese, on an english muffin.",
            "price" => "5.99",
        ];
        $item3 = [
            "name" => "Egg English Muffin Breakfast Sandwich",
            "slug" => "egg-english-muffin-sandwich",
            "description" => "Breakfast sandwich made with egg, cheese, on an english muffin. This one doesn't have meat",
            "price" => "3.99",
        ];

        \App\Models\MenuItem::create($item1);
        \App\Models\MenuItem::create($item2);
        \App\Models\MenuItem::create($item3);
        
    }
}
