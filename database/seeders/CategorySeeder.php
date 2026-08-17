<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
        'name'=>'ai',
        'slug'=>'artificial-inteligence',
        'description'=>'Articles about AI, machine learning and modern intelligent systems',
        'status'=>true,
        ]);
         Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial-intelligence',
            'description' => 'Articles about AI, machine learning and modern intelligent systems.',
            'status' => true,
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
            'description' => 'Programming tutorials, tips, best practices and development guides.',
            'status' => true,
        ]);

        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'description' => 'Laravel tutorials, tips, packages and development techniques.',
            'status' => true,
        ]);

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'description' => 'Articles about frontend, backend and full-stack web development.',
            'status' => true,
        ]);
    }
}
