<?php

namespace Database\Seeders;
use App\Models\Post;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
        'user_id'=>1,
        'category_id'=>1,

        'title'=>'Introduction To Ai',
        'slug'=>'introduction-to-ai',

        'excerpt'=>'Learn the basics of ai.',

        'content'=>'Artificial Intelligence (AI) has rapidly transformed from a futuristic science fiction concept into an essential part of daily life. From personalized recommendation algorithms on streaming platforms to advanced diagnostic tools in healthcare, AI is fundamentally reshaping how we live, work, and interact.',
        'featured_image'=>'posts/default.jpg',
        'status'=>'published',

        'published_at'=>now(),

        'seo_title'=>'introduction to ai',
        'seo_description'=>'Learn Ai basics and understand what is ai is.'

        ]);
    }
}
