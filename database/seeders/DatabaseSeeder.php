<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;
use App\models\Category;
use App\models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'Path shidou',
            'username' =>'pathshidou',
            'email' => 'pathshidou@gmail.com',
            'password' => bcrypt('123')
        ]);
        // User::create([
        //     'name' => 'Yae Miko',
        //     'email' => 'mrwysteria@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create ([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create ([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create ([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create ([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur alias, ipsum laborum quod quam sed perferendis maiores culpa iure maxime neque libero harum quas nihil rem ut.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur alias, ipsum laborum quod quam sed perferendis maiores culpa iure maxime neque libero harum quas nihil rem ut. Voluptates rem libero neque, at inventore beatae minima id aliquid in expedita dolorem iure. Unde corrupti neque reprehenderit nisi exercitationem minima, tempora aliquid.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create ([
        //     'title' => 'Judul Ke dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur alias, ipsum laborum quod quam sed perferendis maiores culpa iure maxime neque libero harum quas nihil rem ut.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur alias, ipsum laborum quod quam sed perferendis maiores culpa iure maxime neque libero harum quas nihil rem ut. Voluptates rem libero neque, at inventore beatae minima id aliquid in expedita dolorem iure. Unde corrupti neque reprehenderit nisi exercitationem minima, tempora aliquid.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create ([
        //     'title' => 'Judul Ke tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur alias, ipsum laborum quod quam sed perferendis maiores culpa iure maxime neque libero harum quas nihil rem ut.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur alias, ipsum laborum quod quam sed perferendis maiores culpa iure maxime neque libero harum quas nihil rem ut. Voluptates rem libero neque, at inventore beatae minima id aliquid in expedita dolorem iure. Unde corrupti neque reprehenderit nisi exercitationem minima, tempora aliquid.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create ([
        //     'title' => 'Judul Ke empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur alias, ipsum laborum quod quam sed perferendis maiores culpa iure maxime neque libero harum quas nihil rem ut.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur alias, ipsum laborum quod quam sed perferendis maiores culpa iure maxime neque libero harum quas nihil rem ut. Voluptates rem libero neque, at inventore beatae minima id aliquid in expedita dolorem iure. Unde corrupti neque reprehenderit nisi exercitationem minima, tempora aliquid.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}
