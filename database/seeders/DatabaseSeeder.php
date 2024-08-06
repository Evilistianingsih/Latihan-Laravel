<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
        User::create([
            'name' => 'Evi Listianingsih',
            'email' => 'evilistianingsih10@gmail.com',
            'password' => bcrypt('123')
        ]);
        User::create([
            'name' => 'Septi Fitria Munawaroh',
            'email' => 'septifitriam10@gmail.com',
            'password' => bcrypt('123')
        ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum pertama.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam vel mollitia earum, recusandae voluptatum asperiores nostrum numquam odio debitis esse neque, expedita aut facilis veniam delectus, consequuntur non error officiis architecto perspiciatis.</p> <p>Enim cupiditate vitae repudiandae, eum veniam explicabo eveniet soluta quos at, quasi sint amet expedita dolores dignissimos saepe debitis odit dolor minus autem fuga numquam officia. Voluptatum sapiente quaerat alias dicta, ducimus rem recusandae nulla reprehenderit dolor quod placeat accusamus modi! Atque non eum vitae iste quia, sapiente aliquid adipisci dolorum.</p> <p>Tempore amet aliquam blanditiis odio quam numquam laborum quasi distinctio qui, illo expedita esse deleniti soluta suscipit voluptatibus debitis, dolorum voluptatem cumque, ab tempora magni. Natus quos sint in enim deleniti, nesciunt ea suscipit necessitatibus nam facilis?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum kedua.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam vel mollitia earum, recusandae voluptatum asperiores nostrum numquam odio debitis esse neque, expedita aut facilis veniam delectus, consequuntur non error officiis architecto perspiciatis.</p> <p>Enim cupiditate vitae repudiandae, eum veniam explicabo eveniet soluta quos at, quasi sint amet expedita dolores dignissimos saepe debitis odit dolor minus autem fuga numquam officia. Voluptatum sapiente quaerat alias dicta, ducimus rem recusandae nulla reprehenderit dolor quod placeat accusamus modi! Atque non eum vitae iste quia, sapiente aliquid adipisci dolorum.</p> <p>Tempore amet aliquam blanditiis odio quam numquam laborum quasi distinctio qui, illo expedita esse deleniti soluta suscipit voluptatibus debitis, dolorum voluptatem cumque, ab tempora magni. Natus quos sint in enim deleniti, nesciunt ea suscipit necessitatibus nam facilis?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum ketiga.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam vel mollitia earum, recusandae voluptatum asperiores nostrum numquam odio debitis esse neque, expedita aut facilis veniam delectus, consequuntur non error officiis architecto perspiciatis.</p> <p>Enim cupiditate vitae repudiandae, eum veniam explicabo eveniet soluta quos at, quasi sint amet expedita dolores dignissimos saepe debitis odit dolor minus autem fuga numquam officia. Voluptatum sapiente quaerat alias dicta, ducimus rem recusandae nulla reprehenderit dolor quod placeat accusamus modi! Atque non eum vitae iste quia, sapiente aliquid adipisci dolorum.</p> <p>Tempore amet aliquam blanditiis odio quam numquam laborum quasi distinctio qui, illo expedita esse deleniti soluta suscipit voluptatibus debitis, dolorum voluptatem cumque, ab tempora magni. Natus quos sint in enim deleniti, nesciunt ea suscipit necessitatibus nam facilis?</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum keempat.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam vel mollitia earum, recusandae voluptatum asperiores nostrum numquam odio debitis esse neque, expedita aut facilis veniam delectus, consequuntur non error officiis architecto perspiciatis.</p> <p>Enim cupiditate vitae repudiandae, eum veniam explicabo eveniet soluta quos at, quasi sint amet expedita dolores dignissimos saepe debitis odit dolor minus autem fuga numquam officia. Voluptatum sapiente quaerat alias dicta, ducimus rem recusandae nulla reprehenderit dolor quod placeat accusamus modi! Atque non eum vitae iste quia, sapiente aliquid adipisci dolorum.</p> <p>Tempore amet aliquam blanditiis odio quam numquam laborum quasi distinctio qui, illo expedita esse deleniti soluta suscipit voluptatibus debitis, dolorum voluptatem cumque, ab tempora magni. Natus quos sint in enim deleniti, nesciunt ea suscipit necessitatibus nam facilis?</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);

    }
}
