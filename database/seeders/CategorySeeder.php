<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Categories::factory(3)->create();

        Categories::create([
            'name' => 'Web Development',
            'slug' => 'web-development'
        ]);
        Categories::create([
            'name' => 'Mobile Development',
            'slug' => 'mobile-development'
        ]);
        Categories::create([
            'name' => 'UI/UX Design',
            'slug' => 'ui-ux-design'
        ]);
        Categories::create([
            'name' => 'Data Science',
            'slug' => 'data-science'
        ]);
    }
}
